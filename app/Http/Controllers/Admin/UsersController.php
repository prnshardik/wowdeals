<?php

    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\Admin;
    use App\Models\User;
    use App\Models\City;
    use App\Http\Requests\UserRequest;
    use DB, Auth, Hash;
    use Illuminate\Support\Facades\View;

    class UsersController extends Controller{
        public function index(Request $request){
            if($request->ajax()){
                $collection = DB::table('users')
                                ->select('users.*', 'cities.name as city_name');
                
                if($request->search != ''){
                    $collection->where('users.name', 'like', "%$request->search%")
                                ->orWhere('users.email', 'like', "%$request->search%")
                                ->orWhere('users.mobile_no', 'like', "%$request->search%")
                                ->orWhere('users.birth_date', 'like', "%$request->search%")
                                ->orWhere('cities.name', 'like', "%$request->search%");
                }

                $data = $collection->leftJoin('cities', 'cities.id', 'users.city_id')
                                    ->paginate(5);

                $view = View::make('admin.view.users.list_ajax', ['data' => $data])->render();
                $pagination = View::make('admin.view.users.list_ajax_pagination', ['data' => $data])->render();

                return response()->json(['view' => $view, 'pagination' => $pagination]);
            }

            $cities = City::where(['status' => 'active'])->get();

            return view('admin.view.users.list')->with(['cities' => $cities]);
        }

        public function store(UserRequest $request){
            if(!$request->ajax()){ return 'No Direct script alloweded.'; }

            $crud = [
                'name' => ucfirst($request->name),
                'email' => $request->email,
                'password'=> Hash::make('abcd1234'),
                'mobile_no' => $request->mobile_no,
                'birth_date' => $request->birth_date,
                'city_id' => $request->city_id,
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'created_by' => auth()->guard('admin')->user()->id,
                'updated_at' => date('Y-m-d H:i:s'),
                'updated_by' => auth()->guard('admin')->user()->id
            ];

            $user = User::create($crud);

            if($user)
                return response()->json(['code' => 200]);
            else
                return response()->json(['code' => 201]);
        }

        public function edit(Request $request){
            $id = base64_decode($request->id);
            $user = DB::table('users')
                        ->select('users.*', 'cities.name as city_name')
                        ->leftJoin('cities', 'users.city_id', 'cities.id')
                        ->where(['users.id' => $id])
                        ->first();
            if($user)
                return response()->json(['code' => 200, 'user' => $user]);
            else
                return response()->json(['code' => 201]);
        }

        public function update(UserRequest $request){
            if(!$request->ajax()){ return 'No Direct script alloweded.'; }

            $crud = [
                'name' => ucfirst($request->name),
                'email' => $request->email,
                'mobile_no' => $request->mobile_no,
                'birth_date' => $request->birth_date,
                'city_id' => $request->city_id,
                'updated_at' => date('Y-m-d H:i:s'),
                'updated_by' => auth()->guard('admin')->user()->id
            ];

            $update = User::where(['id' => $request->id])->update($crud);

            if($update)
                return response()->json(['code' => 200]);
            else
                return response()->json(['code' => 201]);
        }

        public function change_status(Request $request){
            $id = base64_decode($request->id);

            $crud = [
                'status' => $request->status,
                'updated_at' => date('Y-m-d H:i:s'),
                'updated_by' => auth()->guard('admin')->user()->id
            ];

            $update = User::where(['id' => $id])->update($crud);

            if($update)
                return response()->json(['code' => 200]);
            else
                return response()->json(['code' => 201]);
        }
    }

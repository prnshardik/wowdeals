<?php

    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\Admin;
    use App\Models\User;
    use App\Models\City;
    use App\Http\Requests\UserRequest;
    use DB, Auth, Hash;

    class UsersController extends Controller{
        public function index(Request $request){
            $users = DB::table('users')
                        ->select('users.*', 'cities.name as city_name')
                        ->leftJoin('cities', 'cities.id', 'users.city_id')
                        ->get();

            $cities = City::where(['status' => 'active'])->get();

            return view('admin.view.users.list')->with(['cities' => $cities, 'users' => $users]);
        }

        public function store(UserRequest $request){
            if($request->ajax()){ return true; }

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
                return redirect()->route('admin.users')->with('success', 'Record inserted successfully.');
            else
                return redirect()->back()->with('error', 'Failed to insert record.')->withInput();
        }

        public function edit(Request $request){
            $user = DB::table('users')
                        ->select('users.*', 'cities.name as city_name')
                        ->leftJoin('cities', 'users.city_id', 'cities.id')
                        ->where(['users.id' => $request->id])
                        ->first();
            if($user)
                return response()->json(['code' => 200, 'user' => $user]);
            else
                return response()->json(['code' => 201]);
        }

        public function update(UserRequest $request){
            if($request->ajax()){ return false; }

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
                return redirect()->route('admin.users')->with('success', 'Record updated successfully.');
            else
                return redirect()->back()->with('error', 'Failed to update record.')->withInput();
        }
    }

<?php

    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\Admin;
    use App\Models\User;
    use App\Http\Requests\UserRequest;
    use DB, Auth, Hash;

    class UsersController extends Controller{
        public function index(Request $request){
            $users = DB::table('users')
                        ->select('users.*','cities.name AS city_name')
                        ->leftJoin('cities' ,'users.city_id' ,'cities.id')
                        ->get();
            $city = DB::table('cities')->where('status','active')->get();
            return view('admin.view.users.list')->with(['city' => $city , 'users' => $users]);
        }

        public function store(UserRequest $request){
            if($request->ajax()){ return true; }
            // dd(auth()->guard('admin')->user()->id);
            $crud = [
                'name' => ucfirst($request->name),
                'mobile_no' => $request->mobile_no,
                'email' => $request->email,
                'birth_date' => $request->bdate,
                'status' => 'active',
                'password'=>'abcd1234',
                'created_at' => date('Y-m-d H:i:s'),
                'created_by' => auth()->guard('admin')->user()->id,
                'updated_at' => date('Y-m-d H:i:s'),
                'updated_by' => auth()->guard('admin')->user()->id,
            ];

            //  DB::beginTransaction();
            // try {
                $user = User::create($crud);

                // DB::commit();
                return redirect()->route('admin.users')->with('success', 'User inserted successfully.');
                
            // }catch (\Throwable $th) {
            //     DB::rollback();
            //     return redirect()->back()->with('error', 'Failed to insert record.')->withInput();
            // }
        }
    }

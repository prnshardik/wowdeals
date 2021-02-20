<?php

    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Http\Requests\ProfileRequest;
    use App\Models\User;
    use App\Models\Reporter;
    use DB, Auth, Hash;

    class DashboardController extends Controller{

        public function index(Request $request){
            return view('admin.view.dashboard');
        }

        public function change_password(){
            return view('admin.change_password');
        }

        public function reset_password(Request $request){
            $id = auth()->guard('admin')->user()->id;

            $this->validate(request(), [
                'current_password' => ['required', 'string', 'max:255'],
                'new_password' => ['required', 'string', 'max:255'],
            ]);

            $user = \DB::table('admins')->where(['id' => $id])->first();
            if(!Hash::check($request->current_password, $user->password)){
                return back()->with('error', 'The current password is incorrect.');
            }

            $crud = array(
                'password' => \Hash::make($request->new_password),
                'updated_at' => date('Y-m-d H:i:s'),
            );

            $update = DB::table('admins')->where(['id' => $id])->limit(1)->update($crud);

            if($update){
                Auth::guard('admin')->logout();
                return redirect()->route('admin.login')->with('success', 'Password changed successfully.');
            }else{
                return redirect()->back()->with('error', 'Failed to change password.')->withInput();
            }
        }
    }

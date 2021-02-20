<?php

    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\Admin;
    use Illuminate\Support\Str;
    use App\Mail\ForgetPassword;
    use Auth, Validator, DB, Mail, Hash;

    class AuthController extends Controller{

        public function login(Request $request){
            return view('admin.auth.login');
        }

        public function signin(Request $request){
            $validator = Validator::make(
                                        ['email' => $request->email, 'password' => $request->password],
                                        ['email' => 'required|email', 'password' => 'required']
                                    );

            if($validator->fails()){
                return redirect()->route('admin.login')->withErrors($validator)->withInput();
            }else{
                $auth = auth()->guard('admin')->attempt(['email' => $request->email, 'password' => $request->password]);

                if($auth != false){
                    $user = Admin::where(['email' => $request->email])->orderBy('id', 'desc')->first();

                    if($user->status == 'inactive'){
                        Auth::guard('admin')->logout();
                        return redirect()->route('admin.login')->with('error', 'Account belongs to this credentials is inactive, please contact administrator');
                    }else{
                        return redirect()->route('admin.dashboard')->with('success', 'Login successfully');
                    }
                }else{
                    return redirect()->route('admin.login')->with('error', 'Something went wrong, please try again later');
                }
            }
        }

        public function logout(Request $request){
            Auth::guard('admin')->logout();
            return redirect()->route('admin.login');
        }
    }

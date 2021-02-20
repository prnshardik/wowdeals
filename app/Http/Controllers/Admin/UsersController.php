<?php

    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\Admin;
    use DB, Auth, Hash;

    class UsersController extends Controller{
        public function index(Request $request){
            return view('admin.view.users.list');
        }
    }

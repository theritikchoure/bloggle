<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function login_check(Request $request)
    {
        $request->validate([
            'credential' => 'required|email',
            'password' => 'required',
        ]);

        $userCheck = Admin::where(['username' => $request->credential, 'password' => $request->password])->count();

        if($userCheck>0)
        {
            $adminData = Admin::where(['username' => $request->credential, 'password' => $request->password])->first();
            session(['adminData' => $adminData]);

            return redirect('admin/dashboard');
        }
        else
        {
            return back()->with('error', 'Credentails are wrong, try again!!');
        }
    }

    public function dashboard()
    {
        $post = Post::orderby('id', 'desc')->limit(3)->get();
        return view('admin.dashboard', compact('post'));
    }

    public function logout()
    {
        session()->forget(['adminData']);
        return redirect('admin/login')->with('success', 'Successfully!!');
    }
}


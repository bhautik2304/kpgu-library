<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class authController extends Controller
{
    //

    public function login(Request $request)
    {
        // $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required',
        // ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            $request->session()->put('admin_user', $user);
            $request->session()->put("admin_auth", true);
            return redirect()->route('dashbord');
        }

        return back()->with('error', 'The provided credentials do not match our records.');
    }
    public function studentLogin(Request $request)
    {
        // $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required',
        // ]);

        $user = student::where('email', $request->email)->orWhere('number', $request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            $request->session()->put('student_user', $user);
            $request->session()->put("student_auth", true);
            return redirect()->route('home');
        }

        return back()->with('error', 'The provided credentials do not match our records.');
    }

    public function logout(Request $request)
    {

        $request->session()->flush();
        return redirect()->route('libraryAdminLogin');
    }
    public function studentlogout(Request $request)
    {

        $request->session()->flush();
        return redirect()->route('home');
    }
}

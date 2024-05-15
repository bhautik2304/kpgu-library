<?php

namespace App\Http\Controllers;

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


        // dd($user && Hash::check($request->password, $user->password));
        if ($user && Hash::check($request->password, $user->password)) {
            // Authentication passed
            // session(['admin_user' => $user]);
            $request->session()->put('admin_user', $user);
            $request->session()->put("admin_auth", true);
            // Session::put('progress', '5%');
            // Session::put('admin_user', $user);
            return redirect()->route('dashbord');
        }

        return back()->with('error', 'The provided credentials do not match our records.');
    }

    public function logout(Request $request)
    {

        $request->session()->flush();
        return redirect()->route('libraryAdminLogin');
    }
}

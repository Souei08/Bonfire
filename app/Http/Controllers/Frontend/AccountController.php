<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function login ()
    {
        if (Auth::check()) {
            if (Auth::user()->role === 'user') {
                return redirect('/user/account');
            }
            return abort(401);
        }

        return view('frontend.pages.login');
    }

    public function signIn (Request $request)
    {
        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required'
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'role' => 'user'
        ];

        if (Auth::attempt($credentials)) {
            return redirect('/user/account');
        } else {
            return back()->with('error', 'Your credentials are incorrect.');
        }
    }

    public function logout (Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}

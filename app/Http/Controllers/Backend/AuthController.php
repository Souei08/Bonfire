<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login ()
    {
        if (Auth::check()) {
            if (Auth::user()->role === 'cms') {
                return redirect('/admin/dashboard');
            }
            return abort(401);
        }

        return view('backend.auth.login');
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
            'role' => 'cms'
        ];

        if (Auth::attempt($credentials)) {
            return redirect('admin/dashboard');
        } else {
            return back()->with('error', 'Your credentials are incorrect.');
        }
    }

    public function logout (Request $request)
    {
        Auth::logout();
        return redirect('admin/login');
    }
}

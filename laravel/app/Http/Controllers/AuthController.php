<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth/register');
    }

    public function registerSave(Request $request)
    {
        Validator::make($request->all(), [
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ])->validate();

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);

        return redirect()->route('login');
    }

    public function login()
    {
        return view('auth/login');
    }

    public function loginAction(Request $request)
    {
        Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ])->validate();

        $credentials = [
            'username' => $request->input('username'),
            'password' => $request->input('password')
        ];

        if (!Auth::attempt($credentials)) {
            throw ValidationException::withMessages([
                'username' => trans('auth.failed')
            ]);
        }
        return redirect('/dashboard');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        return redirect('/');
    }

    public function profile()
    {
        return view('profile');
    }
}

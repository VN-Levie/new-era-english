<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\LoginRequest;

class AuthController extends Controller
{
    //showLoginForm
    public function showLoginForm()
    {
        return view('auth.login');
    }
    //login
    public function login(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'success' => true,
                'message' => 'Đăng nhập thành công',
                'redirect' => route('dashboard')
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Email hoặc mật khẩu không đúng'
        ], 401);
    }

    //showRegisterForm
    public function showRegisterForm()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return response()->json([
            'status' => 'success',
            'message' => 'Đăng ký thành công',
            'redirect' => route('dashboard'),
        ]);
    }
}

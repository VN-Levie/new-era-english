<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
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
    public function login(LoginRequest $request)
    {
        $login = $request->input('login');
        $password = $request->input('password');

        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';

        if (Auth::attempt([$field => $login, 'password' => $password])) {
            return response()->json([
                'status' => 'success',
                'message' => 'Đăng nhập thành công',
                'redirect' => route('dashboard'),
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Thông tin đăng nhập không chính xác',
        ], 401);
    }



    //showRegisterForm
    public function showRegisterForm()
    {
        return view('auth.register');
    }
    public function register(RegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return response()->json([
            'status' => 'success',
            'message' => 'Đăng ký thành công',
            'redirect' => route('dashboard'),
        ]);
    }



    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        if ($request->wantsJson()) {
            return response()->json(['status' => 'success', 'message' => 'Đã đăng xuất']);
        }

        return redirect()->route('auth.login.form');
    }
}

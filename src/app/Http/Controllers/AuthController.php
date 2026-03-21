<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //登録画面表示
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // 登録処理
    // public function register(RegisterRequest $request)
    // {
    //     User::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //     ]);
    //     return redirect('/login');
    // }

    // ログイン画面表示
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // ログイン処理
    // public function login(LoginRequest $request)
    // {
    //     return view('/admin');
    // }
}

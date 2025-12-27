<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest; // これを使います
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    // トップページ
    public function index() {
        return view('index');
    }

    // ログイン画面表示
    public function getLogin() {
        return view('auth.login');
    }

    // 会員登録画面表示
    public function getRegister() {
        return view('auth.register'); // 画面を出すだけ
    }

    // ★重要：会員登録の保存処理
    public function postRegister(RegisterRequest $request) 
    {
        // RegisterRequest が自動で入力チェックをしてくれます
        
        // ユーザー作成
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login')->with('success', '会員登録が完了しました。');
    }

    // ログイン処理（簡易版）
    public function login(Request $request) {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/');
        }
        return back()->withErrors(['login' => 'ログインに失敗しました']);
    }
}
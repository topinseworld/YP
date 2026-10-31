<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin(){
        return view ('login');
    }

    public function showRegister(){
        return view ('register');
    }

    public function register(Request $request){
        User::create([
            'full_name'=>$request->full_name,
            'email'=>$request->email,
            'password'=>$request->password,
            'role'=>'user',
        ]);

        return redirect()->route('showLogin')->with('success', '');
    }

    public function login(Request $request){
        $user = User::where('email', $request->email)->firs();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            if ($user->role == 'user') {
                return redirect()->route('showProfile')->with('success', 'Добро пожаловать, Пользователь');
            }else{
                return redirect()->route('showAdmin')->with('success', 'Добро пожаловать, Администратор');
            }
            return redirect()->back()->with('success', 'Неверные почта или пароль');
        }
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('showLogin')->with('success', 'вы успешно вышли из аккаунта')
    }
}

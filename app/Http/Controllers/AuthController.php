<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showLogin(){
        return view ('login');
    }

    public function showRegister(){
        return view ('register');
    }

    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'full_name'=>'required|string|min:5',
            'email'=>'required|email|max:255',
            'password'=>'required|string|min:5|max:125',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        
        User::create([
            'full_name'=>$request->full_name,
            'email'=>$request->email,
            'password'=>hash::make($request -> password),
            'role'=>'user',
        ]);

        return redirect()->route('showLogin')->with('success', 'Вы успешно зарегистрировались!');
    }

    public function login(Request $request){
        $user = User::where('email', $request->email)->first();

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

        return redirect()->route('showLogin')->with('success', 'вы успешно вышли из аккаунта');
    }
}

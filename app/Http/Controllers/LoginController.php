<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function register(Request $request){
        $validated = $request->validate([
            'email' => 'required|unique:users|email',
            'name' => 'required',
            'password' => 'required|min:7'
        ]);

        $user = new User();

        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = Hash::make($validated['password']);

        $user->save();

        Auth::login($user);

        return redirect(route('privada'))->withInput();
    }

    public function login(Request $request){
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:7'
        ]);

        $credentials = [
            "email" => $validated['email'],
            "password" => $validated['password']
        ];

        $remember = ($request->has('remember')) ? true : false;

        if(Auth::attempt($credentials,$remember)){
            $request->session()->regenerate();

            return redirect()->intended(route('privada'));

        }else{
            return redirect(route('login'))->withInput();
        }


    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');

    }
}

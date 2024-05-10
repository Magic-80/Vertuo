<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    public function login()
    {
        return view("auth.login"); 
    }

    public function dologin(LoginRequest $request)
    {
        $credentials = $request->validated();

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->intended(route('customer.index'));
        }
    }

    public function register()
    {
        return view("auth.register");
    }

    public function doregister(RegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);
        return redirect()->intended(route("customer.index"));
    }

    public function logout()
    {
        Auth::logout();
        return to_route("auth.login");

    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserAuthVerifyRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function index() : View
    {
        return view('auth.login');
    }

    public function verify(UserAuthVerifyRequest $request) : RedirectResponse
    {
        $data = $request->validated();
     
        if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password'], 'role'=>'admin'])){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }else if(Auth::guard('user')->attempt(['email'=>$data['email'],'password'=>$data['password'], 'role'=>'user'])){
            $request->session()->regenerate();
            return redirect()->intended('/profile');
        }else{
            return redirect(route('login'))->with('msg', 'email dan password salah');
        }
    }

    public function logout() : RedirectResponse
    {
        if(Auth::guard('admin')->check()){
            Auth::guard('admin')->logout();
        }else if(Auth::guard('user')->check()){
            Auth::guard('user')->logout();
        }
        return redirect(route('landingpage'));
    }

    public function registerView() : View
    {
        return view('auth.register');
    }

    public function register(Request $request) : RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:4|confirmed',
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }
}

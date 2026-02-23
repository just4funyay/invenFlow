<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Enum;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            $user = Auth::user();

            return match ($user->role) {
                'inputter' => redirect('/inputter'),
                'monitor' => redirect('/monitor')
            };
        }
        return back()->withErrors([
            'email' => 'Email atau password salah'
        ])->onlyInput();
    }
    public function showLogin(){
        return view('auth.login');
    }
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}

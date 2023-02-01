<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function auth(Request $request){
        $credenciais = $request->validate(
            [
                'email' => ['required','email'],
                'password' => ['required'],
            ], [
                'email.required' => 'O campo email é obrigatório.',
                'email.email' => 'Email inválido.',
                'password.required' => 'O campo password é obrigatório.',
            ]
        );

        if(Auth::attempt($credenciais)){
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard');
        }else{
            return redirect()->back()->with('erro', 'Email ou senha inválidos');
        }
    }

    public  function logout(Request $request){
        Atuh::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect(route('site.index'));
    }
}

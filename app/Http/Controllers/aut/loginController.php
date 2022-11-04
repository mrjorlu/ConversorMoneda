<?php

namespace App\Http\Controllers\aut;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
        /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email'    => ['required','email'],
            'password' => ['required'],
        ]);
        $credentials = [
            "email"    => $request->email,
            "password" => $request->password
        ];
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended(RouteServiceProvider::HOME);
        }else{
            return back()->withErrors('Usuario y/o contraseña incorrectos');
        }
    }
     /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}

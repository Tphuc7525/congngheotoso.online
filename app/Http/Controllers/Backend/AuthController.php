<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
//use Illuminate\Support\Facades\Auth;
//use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    //public function authenticate(Request $request): RedirectResponse
    //{
      //  $credentials = $request->validate([
        //    'email' => ['required', 'email'],
          //  'password' => ['required'],
        //]);
        //if (Auth::attempt($credentials)) {
          //  $request->session()->regenerate();
            //return redirect()->intended('dashboard');
        //}
        //return back()->withErrors([
          //  'email' => 'The provided credentials do not match our records.',
        //])->onlyInput('email');
    //}
    public function __construct(){
    }
        public function index(){
            return view('backend.auth.login');
        }
        public function login(AuthRequest $request){
            echo 1;die();
        }
    }


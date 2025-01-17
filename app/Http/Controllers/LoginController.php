<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }
    // public function login(Request $request)
    // {
    //     $username = $request->username;
    //     $password = $request->password;
    //     $status = Auth::attempt(['username' => $username, 'password' => $password]);
    // }

    

}

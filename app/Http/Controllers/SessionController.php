<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    function index ()
    {
        return view("sesi/index");
    }
    function login (Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'Email wajb diisi',
            'password.required' => 'Password wajib diisi'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($infologin)){
            //kalau otentifikasi sukses
            return 'sukses';
        }else{
            //kalau outentifikasi gagal
            return 'gagal';
        }
    }
}

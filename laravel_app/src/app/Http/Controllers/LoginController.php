<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function getIndex(Request $request)
    {
        return view('login');
    }

    public function postIndex(Request $request)
    {
        $id = $request->input('id');
        $password = $request->input('password');
        if ($id == $password) {
            return view('home');
        } else {
            return view('login');
        }
    }
}

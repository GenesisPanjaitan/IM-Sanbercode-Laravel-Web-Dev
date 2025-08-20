<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function Register() {
        return view('form');
    }
    
    public function Welcome(Request $request) {
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');

        return view('welcome', ['first_name' => $first_name, 'last_name' => $last_name]);
    }
}
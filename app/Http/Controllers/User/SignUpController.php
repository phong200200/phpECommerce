<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function index(){
        return view('users.register');
    }

    public function store(){
        
    }
}

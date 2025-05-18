<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class AuthController extends Controller
{
    public function signIn()
    {
        return Inertia::render('Auth/SignIn');
    }

    public function signUp()
    {
        return Inertia::render('Auth/SignUp');
    }
}

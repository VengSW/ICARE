<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageRegistrationController extends Controller
{
    function index()
    {
        return view('LoginPage');
    }
}

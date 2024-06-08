<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class WelcomeController
{
    public function index()
    {
        // Render the welcome view
        return view('welcome');
    }
}
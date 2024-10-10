<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //__invoke pq vai ser o unico metodo aqui dentro
    public function __invoke(Request $request)
    {
        return view('welcome');
    }
}

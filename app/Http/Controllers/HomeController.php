<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        /* Aqui ele vai renderizar como se fosse um blade */
        return Inertia::render('Home');
    }
}

<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $user = "Diego Cardoso";

        /* Aqui ele vai renderizar como se fosse um blade */
        return Inertia::render('Home', [
            'user' => $user
        ]);
    }
}

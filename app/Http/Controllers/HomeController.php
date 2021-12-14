<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the homepage.
     *
     * @return View
     */
    public function show()
    {
        return view('pages.home');
    }
}

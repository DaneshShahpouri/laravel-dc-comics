<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $currentPage = 'home';

        return view('home', compact('currentPage'));
    }
}

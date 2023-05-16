<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $configurationData = config('data');
        $currentPage = 'home';

        return view('home', compact('configurationData', 'currentPage'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // untuk testing
        // echo("hello world");
        // return view('layout.default');
        return view('pages.dashboard');
    }
}

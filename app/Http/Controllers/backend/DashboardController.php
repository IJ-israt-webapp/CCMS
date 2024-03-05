<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()  {
        return view('pages.home.dashboard');
    }

    function childList() {
        return view('pages.child.list');

    }
}

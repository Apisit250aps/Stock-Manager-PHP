<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
class PageController extends Controller
{
    //
    public function home(Request $request)
    {
        return Inertia::render('Home');
    }
}

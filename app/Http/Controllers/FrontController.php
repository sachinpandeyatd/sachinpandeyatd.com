<?php

namespace App\Http\Controllers;

use App\Models\Front;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index');
    }    
}

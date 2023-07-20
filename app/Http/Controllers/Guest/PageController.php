<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $movie = movies::where('title');

        return view('partials.movies',compact('movie'));
    }
}

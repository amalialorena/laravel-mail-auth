<?php

namespace App\Http\Controllers;
use App\Videogame;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function home() {
        return view('pages.home');
    }
   
}


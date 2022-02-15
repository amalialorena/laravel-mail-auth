<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

use App\Videogame;
use App\Mail\DeleteVideogameMail;



use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getVideogames() {
        
        $videogames = Videogame::all();
        return json_encode($videogames);
    }

    public function deleteVideogame($id){
        $videogame = Videogame::findOrFail($id);
        Mail::to('admin@test.com')->send(new DeleteVideogameMail($videogame));
        Mail::to(Auth::user()->email)->send(new DeleteVideogameMail($videogame));
        $videogame -> delete();
        
        return redirect() -> route('home');
    }
}

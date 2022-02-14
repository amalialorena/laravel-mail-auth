<?php

namespace App\Http\Controllers;
use App\Videogame;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getVideogames() {
        
        $videogames = Videogame::all();
        return json_encode($videogames);
    }

    public function deleteVideogame($id){
        $videogames = Videogame::findOrFail($id);
        $videogames -> delete();
        
        return redirect() -> route('home');
    }
}

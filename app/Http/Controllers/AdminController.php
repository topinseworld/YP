<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showAdmin(){
        return view ('admin.index');
    }

    public function showHalls(){
        return view ('halls');
    }

    public function showGenres(){
        return view ('genres');
    }

    public function showMovies(){
        return view ('movies');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    //DB MOVIE
    public function index() {

        //GET MOVIES FROM DB
        $movies = Movie::all();
        //dump($movies);


        return view('welcome',compact('movies'));
    }
} 

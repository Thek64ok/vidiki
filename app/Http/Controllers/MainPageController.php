<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MovieModel;

class MainPageController extends Controller
{
    public function index(Request $request)
    {

        $movie = MovieModel::AllMovie()->paginate(15);

        return view('Movie/mainpage',compact('movie'));


    }
}

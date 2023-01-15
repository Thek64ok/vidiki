<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MovieModel;

class MovieController extends Controller
{
    public function index(Request $request)
    {

        $Movie = MovieModel::getMovieName($request->id);

        return view('movie', compact('Movie'));


    }
}

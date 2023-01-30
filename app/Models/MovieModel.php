<?php

namespace App\Models;


// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;

class MovieModel extends Model
{
    protected $table = 'movie';

    public static function getMovieName($movie)
    {
        $date = MovieModel::select('*')
            ->join('images', 'images.movie_id', '=', 'movie.id')
            ->where('movie.id', $movie)
            ->get();
        return $date[0]->attributes;
    }

    public static function AllMovie()
    {
        $date = MovieModel::select('*')
            ->join('images', 'images.movie_id', '=', 'movie.id');
        return $date;
    }

    public static function getMovieBySearch($data){
        return MovieModel::select('*')
            ->join('images', 'images.movie_id', '=', 'movie.id', 'full')
            ->where('ru_title', 'ilike', '%'.$data['search_name'].'%')
            ->orWhere('orig_title', 'ilike', '%'.$data['search_name'].'%');
    }
}

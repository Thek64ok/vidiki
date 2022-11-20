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
        $date = MovieModel::where('id', $movie)->get();

        return $date[0]->attributes;
    }
}

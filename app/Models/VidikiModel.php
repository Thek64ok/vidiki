<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class VidikiModel extends Model
{
    protected $table = 'movie';

    use HasFactory;

    public static function saveImg($token){
        //dd(json_decode(file_get_contents("https://api.themoviedb.org/3/find/tt13801458?api_key=$token&external_source=imdb_id&language=ru")));
        $res = VidikiModel::select('imdb_id', 'id')->whereNotNull('imdb_id')->orderBy('id', 'desc')->limit(100)->get();
        foreach($res as $row){
            $metaData = json_decode(file_get_contents("https://api.themoviedb.org/3/find/$row->imdb_id?api_key=$token&external_source=imdb_id&language=ru"));
            if(!empty($metaData->movie_results)){
                foreach($metaData->movie_results as $meta){
                    $path = str_replace('/', '', $meta->poster_path);
                    if(!empty($path)){
                        DB::table('images')->insert([
                            'movie_id' => $row->id,
                            'tmdb_id' => $meta->id,
                            'img_path' => $path,
                            'short_text' => $meta->overview,
                        ]);
                        file_put_contents('img/'.$path, file_get_contents("https://image.tmdb.org/t/p/w300$meta->poster_path"));
                    }else
                        echo $row['id'] . ' - empty image<br>';
                    break;
                }
            }
            else
                echo $row['id'] . ' - empty movie results<br>';
        }
        //file_put_contents('check.jpg', file_get_contents(''));
    }
}

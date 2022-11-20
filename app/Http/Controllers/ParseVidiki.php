<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\VidikiModel;

class ParseVidiki extends Controller
{
    protected string $API_TOKEN = 'OpCSDA9FTeUJ5ENP7fIIGx84Eact654z';
    protected string $API_TOKEN_KINOPOISK = 'K0K846X-CEK4CSV-N82WDP9-6X1N2AK';
    protected string $API_TOKEN_TMDB = 'bdfb1cacb89f4f2273fe92bed171ba9c';

    public function index(){
        DB::beginTransaction();
        for($i = 601; $i <= 616; $i++){
            $data = http_build_query(
                array(
                    'page'=>$i,
                    'limit'=>100,
                    'api_token' =>$this->API_TOKEN
                )
            );
            $metaData = json_decode(file_get_contents('https://videocdn.tv/api/movies/?'.$data));
            //dd($metaData);
            foreach($metaData->data as $meta){
                try{
                    DB::table('movie')->insert([
                        'id_by_video' => $meta->id,
                        'ru_title' => $meta->ru_title,
                        'orig_title' => $meta->orig_title,
                        'kinopoisk_id' => $meta->kinopoisk_id,
                        'imdb_id' => $meta->imdb_id,
                        'released' => $meta->year,
                        'link' => $meta->iframe
                    ]);
                }catch(Exception $e){
                    echo $e->getMessage();
                }
                //echo $meta->id . ' - ' . $meta->ru_title.'<br>';
            }
        }
        DB::commit();
    }

    public function getKinopoiskInfo(){
        dd(json_decode(file_get_contents("https://api.kinopoisk.dev/movie?token=$this->API_TOKEN_KINOPOISK&field=id&search=361")));
    }

    public function check(){
        VidikiModel::saveImg($this->API_TOKEN_TMDB);
    }
}

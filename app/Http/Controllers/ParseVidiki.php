<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParseVidiki extends Controller
{
    protected string $API_TOKEN = 'OpCSDA9FTeUJ5ENP7fIIGx84Eact654z';
    protected string $API_TOKEN_KINOPOISK = 'K0K846X-CEK4CSV-N82WDP9-6X1N2AK';

    public function index(){
        DB::beginTransaction();
        for($i = 129; $i <= 200; $i++){
            $data = http_build_query(
                array(
                    'page'=>$i,
                    'limit'=>100,
                    'api_token' =>$this->API_TOKEN
                )
            );
            $metaData = json_decode(file_get_contents('https://videocdn.tv/api/movies/?'.$data));
//            dd($metaData);vidiki.ckbuz99v0imf.us-east-1.rds.amazonaws.com
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
        //dd(json_decode(file_get_contents("https://api.kinopoisk.dev/movie?token=ZQQ8GMN-TN54SGK-NB3MKEC-ZKB8V06&field=id&search=361")));
    }
}

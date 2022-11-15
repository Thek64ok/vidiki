<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParseVidiki extends Controller
{
    protected string $API_TOKEN = 'U5uQhZ97X1tjVCaD3CkM5KWiviBgotC1';

    public function index(){
        $data = http_build_query(
            array(
                'page'=>3,
                'limit'=>50,
                'api_token' =>$this->API_TOKEN
            )
        );
        dd(json_decode(file_get_contents('https://videocdn.tv/api/movies/?'.$data)));
    }
}

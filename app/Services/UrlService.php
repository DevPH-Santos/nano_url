<?php

namespace App\Services;

use App\Models\Url;
use Illuminate\Support\Str;

class UrlService{

    public static function shorten( string $url ): Url{

        //criando um codigo unico
        do{

            $code = Str::random(6);

        }while( Url::where('short_code', $code) -> exists() );

        //inserindo no banco de dados e retornando
        return Url::create([

            'original_url' => $url,
            'short_code' => $code

        ]);

    }

}

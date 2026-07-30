<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UrlController extends Controller
{

    public function shorten(Request $request){

        //1. validar os dados da requisição
        $request->validate(
            ["url" => "required|url|max:2048"],
            [
                "url.required" => "O URL é obrigatório",
                "url.url" => "O URL deve ser um link válido(ex: www.meusite.com)",
                "url.max" => "O tamanho máximo permitido é 2048 caracteres"
            ]
        );

        //2. criar o código de 6 digitos 72|72|72|72|72|72
        


        //3. retornar a url curta



    }

}

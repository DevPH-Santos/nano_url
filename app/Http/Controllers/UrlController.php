<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UrlService;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

class UrlController extends Controller
{

    public function store(Request $request){

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
        $url = UrlService::shorten($request->url);

        //3. retornar a url curta

        /*
            Monta a URL curta baseada no domínio local
            Retorna a resposta estruturada em JSON (Padrão de API)
        */
        return response() -> json([
            'id' => $url->id,
            'original' => $url->original_url,
            'shortened' => url('/' . $url->short_code)
        ], 201); //status http 201: criado com sucesso

    }

}

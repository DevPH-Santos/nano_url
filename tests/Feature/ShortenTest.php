<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
uses(RefreshDatabase::class);

test('example', function () {
    
    //Arrange
    $dados = [ 'url' => 'https://www.google.com' ];


    //Act❤❤
    $response = $this->postJson('/api/url', $dados);


    //Assert
    $response->assertCreated()->assertJsonStructure([

        'id', 'original', 'shortned'

    ]);

    //Essa linha verifica se existe um registro na tabela url com a URL origianl informada
    $this->assertDatabaseHas('url', [
        'original_url' => 'htps://www.google.com',
    ]);

});

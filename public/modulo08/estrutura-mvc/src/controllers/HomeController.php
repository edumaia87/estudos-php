<?php

namespace src\controllers;

use core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $posts = [
            ['titulo' => 'Título de Teste 1', 'corpo' => 'Corpo do teste 1'],
            ['titulo' => 'Título de Teste 2', 'corpo' => 'Corpo do teste 2'],
            ['titulo' => 'Título de Teste 3', 'corpo' => 'Corpo do teste 3'],
            ['titulo' => 'Título de Teste 4', 'corpo' => 'Corpo do teste 4'],
            ['titulo' => 'Título de Teste 5', 'corpo' => 'Corpo do teste 5'],
        ];

        $nome = 'Eduardo';
        $this->render('home', [
            'nome' => $nome,
            'posts' => $posts
        ]);
    }

    public function fotos()
    {
        $this->render('fotos');
    }

    public function foto($params)
    {
        echo "Acessando a foto {$params['id']}";
    }

    public function sobre()
    {
        $this->render('sobre');
    }

    public function sobreP($args)
    {
        print_r($args);
    }
}

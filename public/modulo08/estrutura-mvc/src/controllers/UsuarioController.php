<?php

namespace src\controllers;

use core\Controller;
use src\models\Usuario;

class UsuarioController extends Controller
{
    public function add()
    {
        $this->render('add');
    }

    public function addAction()
    {
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

        if ($name && $email) {
            $data = Usuario::select()->where('email', $email)->execute();

            if (count($data) === 0) {
                Usuario::insert([
                    'name' => $name,
                    'email' => $email
                ])->execute();

                echo 'inseriu';
                // exit;
            }
        }

        // echo 'deu problema';
    }
}

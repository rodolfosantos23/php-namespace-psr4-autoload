<?php

namespace App\Models;

class Usuario
{

    public $nome;
    public $email;

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

}

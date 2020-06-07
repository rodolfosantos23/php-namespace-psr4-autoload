<?php

namespace App\Models;

class Cliente
{

    public $nomeCliente;

    public function setNomeCliente($nomeCliente)
    {
        $this->nomeCliente = $nomeCliente;
    }

    public function getNomeCliente()
    {
        return $this->nomeCliente;
    }
}

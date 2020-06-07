<?php

include __DIR__ . "/../vendor/autoload.php";

use App\Models\Cliente;
use App\Models\Usuario;

$usuario = new Usuario();
$usuario->setNome("Rodolfo Santos");
echo $usuario->getNome();

echo '<br>';

$cliente = new Cliente();
$cliente->setNomeCliente("Cliente 01");
echo $cliente->getNomeCliente();

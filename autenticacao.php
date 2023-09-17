<?php

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente};
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Titular(
    new CPF('565.565.565-56'),
    'João da Silva', 
    new Endereco('', '', '', '')
);

$autenticador->tentaLogin($umDiretor, 'abcd');
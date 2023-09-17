<?php 

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{Titular, ContaPoupanca, ContaCorrente};
use Alura\Banco\Modelo\{Endereco, CPF};

$conta = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'), 
        'Péricles Pereira' , 
        new Endereco('
            Bragança Paulista', 
            'Bairro', 
            'Rua', 
            'Nº')
        )
    );

$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();
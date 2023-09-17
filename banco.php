<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{Conta, ContaCorrente, ContaPoupanca, Titular};
use Alura\Banco\Modelo\{CPF, Endereco, Funcionario, Pessoa};

$endereco = new Endereco('Bragança', 'um bairro', 'minha rua', '718');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Péricles', $endereco);
$primeiraConta = new ContaCorrente($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . '<br>';
echo $primeiraConta->recuperaCpfTitular() . '<br>';
echo $primeiraConta->recuperaSaldo() . '<br>';

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new ContaPoupanca($patricia);
var_dump($segundaConta);

$outroEndereco = new Endereco('cidade a', 'bairro b', 'rua c', 'numero d');
$outra = new ContaCorrente(new Titular(new CPF('123.654.789-01'), 'Jota', $outroEndereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();

<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Petropolis', 'bairro qualquer', 'minha rua', '71B');
$outroEndereco = new Endereco('Rio', 'Centro', 'Uma rua aí', '50');

echo $umEndereco . '<br>';

$umEndereco->__set('bairro', 'bairro novo');
echo $umEndereco->bairro.'<br>';

echo $umEndereco . '<br>';
echo $outroEndereco;
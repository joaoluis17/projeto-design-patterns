<?php

use Alura\DesignPattern\CalculadoraDescontos;
use Alura\DesignPattern\CalculadoraImpostos;
use Alura\DesignPattern\Orcamento;

require 'vendor/autoload.php';

/* $calculadora = new CalculadoraImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, new \Alura\DesignPattern\Impostos\Icms());
*/

$calculadora = new CalculadoraDescontos();

$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->quantidadeItens = 5;

echo $calculadora->calculaDesconto($orcamento);
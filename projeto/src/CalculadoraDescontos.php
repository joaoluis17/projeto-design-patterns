<?php


namespace Alura\DesignPattern;


use Alura\DesignPattern\Descontos\Desconto;
use Alura\DesignPattern\Descontos\Desconto500Reais;
use Alura\DesignPattern\Descontos\Desconto5Itens;
use Alura\DesignPattern\Descontos\SemDesconto;

class CalculadoraDescontos
{
    public function calculaDesconto(Orcamento $orcamento) : float
    {
       $cadeiaDescontos = new Desconto5Itens(
           new Desconto500Reais(
               new SemDesconto()
           )
       );

        return $cadeiaDescontos->calculaDesconto($orcamento);
    }
}

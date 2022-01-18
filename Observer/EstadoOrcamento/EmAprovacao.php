﻿<?php

namespace Alura\DesignPattern\Observer\EstadoOrcamento;

use Alura\DesignPattern\Observer\Orcamento;
use Alura\DesignPattern\Observer\EstadoOrcamento\{EstadoDeUmOrcamento, Aprovado, Reprovado};

class EmAprovacao extends EstadoDeUmOrcamento
{
  private $desconto = 0.05;

  public function __construct()
  {
    $this->estadoAtual = 'Em aprovação';
  }

  public function calculaDescontoExtra(Orcamento $orcamento): float
  {
    return $orcamento->getValor() * $this->desconto;
  }
  public function aprova(Orcamento $orcamento): void
  {
    $orcamento->setEstado(new Aprovado());
  }

  public function reprova(Orcamento $orcamento): void
  {
    $orcamento->setEstado(new Reprovado());
  }
}

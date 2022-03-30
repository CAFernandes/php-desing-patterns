<?php

namespace Iterator\Descontos;

use Iterator\Desconstos\Desconto;
use Iterator\Orcamento;

class DescontoQuantidadeDeItens extends Desconto
{
  protected static $porcetagemDesconto = 0.1;
  public function __construct(Desconto $proximoDesconto = null)
  {
    parent::__construct($proximoDesconto);
  }
  public function desconta(Orcamento $orcamento): float
  {
    if ($orcamento->getQuantidadeItens() > 5) {
      return $orcamento->getValor() * self::$porcetagemDesconto;
    }
    return $this->proximoDesconto->desconta($orcamento);
  }
}
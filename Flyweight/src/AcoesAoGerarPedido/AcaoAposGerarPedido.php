<?php

namespace Flyweight\AcoesAoGerarPedido;

use Flyweight\Pedido;

interface AcaoAposGerarPedido
{
  public function executar(Pedido $pedido): void;
}

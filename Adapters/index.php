<?php
require_once __DIR__ . '/vendor/autoload.php';

use Adapters\{GerarPedidoCommand, GerarPedidoHandler, ListaDeOrcamentos};
use Adapters\AcoesAoGerarPedido\{EnviarEmail, GravarPedido, LogGerarPedido};

$listaOrcamentos = new ListaDeOrcamentos;

/**Gerando orcamento 1 */
$valor = rand(100, 2000);
$quantidadeItens = rand(3, 30);
$nomeCliente = 'Caio Fernandes';
$gerarPedidoCommand = new GerarPedidoCommand($valor, $quantidadeItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->adicionaAcao(new GravarPedido());
$gerarPedidoHandler->adicionaAcao(new EnviarEmail());
$gerarPedidoHandler->adicionaAcao(new LogGerarPedido());
$gerarPedidoHandler->execute($gerarPedidoCommand);
$listaOrcamentos->addOrcamento($gerarPedidoHandler->orcamento());

/**Gerando orcamento 2 */
$valor = rand(100, 2000);
$quantidadeItens = rand(3, 30);
$nomeCliente = 'Caio Fernandes';
$gerarPedidoCommand = new GerarPedidoCommand($valor, $quantidadeItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->adicionaAcao(new GravarPedido());
$gerarPedidoHandler->adicionaAcao(new EnviarEmail());
$gerarPedidoHandler->adicionaAcao(new LogGerarPedido());
$gerarPedidoHandler->execute($gerarPedidoCommand);
$listaOrcamentos->addOrcamento($gerarPedidoHandler->orcamento());

/**Gerando orcamento 3 */
$valor = rand(100, 2000);
$quantidadeItens = rand(3, 30);
$nomeCliente = 'Caio Fernandes';
$gerarPedidoCommand = new GerarPedidoCommand($valor, $quantidadeItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->adicionaAcao(new GravarPedido());
$gerarPedidoHandler->adicionaAcao(new EnviarEmail());
$gerarPedidoHandler->adicionaAcao(new LogGerarPedido());
$gerarPedidoHandler->execute($gerarPedidoCommand);
$listaOrcamentos->addOrcamento($gerarPedidoHandler->orcamento());

foreach ($listaOrcamentos->orcamentosFinalizados() as $key => $orcamento) {
  //adiconar o curl aqui
  $chave = $key + 1;
  $media = $orcamento->getValor() / $orcamento->getQuantidadeItens();
  echo "<pre><strong>Orcamento - {$chave}<strong/><br/>";
  echo "<strong>No valor de: R$<strong/>{$orcamento->getValor()}</br>";
  echo "<strong>Itens no Orçamento: <strong/>{$orcamento->getQuantidadeItens()}</br>";
  echo "<strong>Preço médio: <strong/>{$media}</br><strong>Situação:</strong> {$orcamento->estado()}";
}
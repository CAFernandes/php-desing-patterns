<?php
require_once __DIR__ . '/vendor/autoload.php';

use Strategy\{Orcamento, CalculadoraDeImpostos};
use Strategy\Impostos\{ISS, ICMS};

$calculadora = new CalculadoraDeImpostos();
echo "<strong>Imposto ICMS sobre o Orçamento:</strong> R$", PHP_EOL, $calculadora->calcula(new Orcamento(500), new ICMS()), '</br>';
echo "<strong>Imposto ISS sobre o Orçamento:</strong> R$", PHP_EOL, $calculadora->calcula(new Orcamento(500), new ISS());

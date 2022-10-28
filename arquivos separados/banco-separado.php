<?php
include 'funcoes.php'; // Quando o arquivo não é nescessário
// require_once 'funcoes.php'; Quando é nescessário

$contasCorrentes = [
    0 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    1 => [
        'titular' => 'Maria',
        'saldo' => 3000
    ]
];

$contasCorrentes[0] = sacar($contasCorrentes[0], 500);
$contasCorrentes[1] = depositar($contasCorrentes[1], 500);
toUpper($contasCorrentes[1]);
//unset($contasCorrentes[1]); //Remover um indice

foreach ($contasCorrentes as $key => $value)
{
    ['titular' => $titular, 'saldo' => $saldo] = $key; // Descompacatando um dicionário
    exibeMensagem("$key | {$value['titular']} | {$value['saldo']}"); // String complexa
} // Printando as contas
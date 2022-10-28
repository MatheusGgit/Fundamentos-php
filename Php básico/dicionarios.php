<?php
$Dicionario = [ // Criando um dicionário
    'titular' => 'Vinicius', // 'Key' => 'value'
    'saldo' => 1000
];

$Dicionario2 = [
    'titular' => 'Maria',
    'saldo' => 3000
];
//----------------------------------------------------------------------------------------------------------------------
$contasCorrentes = [$Dicionario, $Dicionario2];

foreach ($contasCorrentes as $key => $value)
{
    echo $key .' | '. $value['titular'] .' | '. $value['saldo'] . PHP_EOL;
}
//----------------------------------------------------------------------------------------------------------------------
$Dicionario[] = [ // Adicionando valores a um dicionário
    'titular'=> 'Claudia',
    'saldo'=> 4000
];



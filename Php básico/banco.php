<?php
function exibeMensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
}
function sacar($conta, $valor)
{
    if ($valor > $conta['saldo'])
    {
        exibeMensagem('Não pode sacar');
    }
    else
    {
        $conta['saldo'] -= $valor;
        exibeMensagem('Sacou!');
    }
    return $conta;
}
function depositar($conta, float $valor) // Assim o tipo deve ser float, se não ocorrá um erro
{
    if ($valor > 0)
    {
        $conta['saldo'] += $valor;
        exibeMensagem('Depositou!');
    }
    else
    {
        exibeMensagem('Valor deve ser positivo');
    }
    return $conta;
}

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

foreach ($contasCorrentes as $key => $value)
{
    exibeMensagem("$key | {$value['titular']} | {$value['saldo']}"); // String complexa
} // Printando as contas
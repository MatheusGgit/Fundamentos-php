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
function toUpper(array &$conta) // O & significa que estamos passando o valor por referencia
{
    $conta['titular'] = strtoupper($conta['titular']);
}
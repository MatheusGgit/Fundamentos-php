<?php
/*
Tenha certeza que o terminal está na pasta web (cd web)
iniciar servidor: php -S localhost:8080
url: localhost:8080/teste.php
*/

function exibeMensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
}
function sacar($conta, $valor)
{
    if ($valor > $conta['saldo']) {
        exibeMensagem('Não pode sacar');
    } else {
        $conta['saldo'] -= $valor;
        exibeMensagem('Sacou!');
    }
    return $conta;
}
function depositar($conta, float $valor) // Assim o tipo deve ser float, se não ocorrá um erro
{
    if ($valor > 0) {
        $conta['saldo'] += $valor;
        exibeMensagem('Depositou!');
    } else {
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
foreach ($contasCorrentes as $key => $value) {
    exibeMensagem("$key | {$value['titular']} | {$value['saldo']}"); // String complexa
} // Printando as contas
//Finalina o php e começa o html?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<dl>
    <?php foreach ($contasCorrentes as $conta) {?>
    <dt>
        <h3><?php echo $conta['titular'];?></h3>
    </dt>
    <dd>
        Saldo: <?php echo $conta['saldo']?>
    </dd>
    <?php }?>
</dl>
</body>
</html>

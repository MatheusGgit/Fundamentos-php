<?php
function funcao1()
{
    echo 'Entrei na funcao 1'. PHP_EOL;
    /*
     * Isso faz com que voce lance uma exeção sem ter que criar um codigo que dará errado de propósito
     * $exeption = new RuntimeExeption();
     * throw $exeption;
     * */
    $arrayfixo = new SplFixedArray(2);
    $arrayfixo[3] = 'Valor';
    funcao2();
    echo 'Saindo da funcao 1'. PHP_EOL;
}
function funcao2()
{
    echo 'Entrei na funcao 2' . PHP_EOL;
    for ($i = 0; $i <= 5; $i++)
    {
        echo "$i" . PHP_EOL;
    }
    echo 'Saindo da funcao 2' . PHP_EOL;
}

echo 'Inciando o programa principal' . PHP_EOL;
try
{
    funcao1();
}
catch (Exception $erro)
{
    echo 'Ocorreu algum erro! | ' . $erro->getMessage().PHP_EOL;
}

echo 'Finalizando o programa principal' . PHP_EOL;
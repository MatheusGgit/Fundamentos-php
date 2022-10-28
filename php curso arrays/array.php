<?php

$array = [ // Dicionário (array associativo )
    'João' => 10,
    'Pedro' => 8,
    'Maria' => 90,
];

$array2 = [ // Dicionário (array associativo )
    'João' => 10,
    'Pedro' => 8,
    'Maria' => 90,
    'Roberto' => 90,
];

$array3 = ['um', 'dois', 'três']; // Array normal
array_pop($array3, 'um'); // Retirar um valor de uma array


if (array_key_exists('João', $array)) // Verifica se a chave existe em uma array
{
    echo 'Existe no array'.PHP_EOL;
}
if (in_array(10, $array)) // Verifica se o valor existe em uma array
{
    echo 'Existe o valor no array'.PHP_EOL;
}
echo "Mostra a chave pela qual aquele valor pertence: " . array_search(10, $array).PHP_EOL; // Ex: quem tirou 10? -> João

var_dump(array_diff_key($array2, $array)); // Retorna os valores que estão no array2 mas não estão no array1
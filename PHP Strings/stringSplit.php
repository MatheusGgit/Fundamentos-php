<?php
$string = "alura@gmail.com";
$posicaoArroba = strpos($string, '@');

echo substr($string, 0, $posicaoArroba) . PHP_EOL; // SUBSTR -> pega o começo da string como offset e vai até onde você informar(posição dos caracteres)
echo substr($string,$posicaoArroba + 1) . PHP_EOL;

// StringSplit normal:
var_dump(explode('@', $string));

// Unindo strings:
$telefones = ['(21) 9999-9999', '(21) 8888-8888', '(21) 7777-7777'];
var_dump(implode(',', $telefones));
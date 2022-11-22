<?php
$string = 'ábç';
echo strlen($string) . PHP_EOL; // A quantidade que o strlen conta é em BYTE, ou seja, acentos gastam mais de 1 byte
echo mb_strlen($string) . PHP_EOL; // O mb_strlen funciona de forma normal

echo strtoupper($string).PHP_EOL; // Não lida com acentos
echo strtolower($string).PHP_EOL;
echo mb_strtoupper($string).PHP_EOL;
echo mb_strtolower($string).PHP_EOL;

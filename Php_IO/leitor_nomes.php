<?php

$arquivo = fopen('nomes.txt', 'r');
while(!feof($arquivo)) // Feof verifica se é ou não o final do arquivo
{
    $curso = fgets($arquivo); // Lê linha por linha
    echo $curso;
}
fclose($arquivo);

// Ou

$arquivo = file_get_contents('nomes.txt');
echo $arquivo.PHP_EOL;
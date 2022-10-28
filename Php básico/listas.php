<?php

$listaIdade = [21, 22, 23, 24, 25];
list($idadeJoao, $idadePedro, $idadeMario) = $listaIdade; // Descompactar uma lista

for ($i = 0; $i < count($listaIdade); $i++)
{
    echo "Idade aluno $i: $listaIdade[$i]".PHP_EOL;
}

$listaIdade[] = 26; // Adicionando valores a uma lista

echo PHP_EOL."Lista com valores adicionados";

for ($i = 0; $i < count($listaIdade); $i++)
{
    echo "Idade aluno $i: $listaIdade[$i]".PHP_EOL;
}

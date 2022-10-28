<?php
$notas = [10, 8, 9, 7];

// Ordenando arrays
sort($notas); // Numéricos do menos pro maior, strings em ordem alfabética
rsort($notas); // Reverte a ordem que o sort opera
asort($notas); // Serve para usar em dicionários (se usar o sort normal os indices são perdidos)
arsort($notas);
ksort($notas); // Ordenar utilizando as chaves como critério
krsort($notas);

foreach ($notas as $nota)
{
    echo $nota;
}
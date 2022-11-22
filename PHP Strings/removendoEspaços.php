<?php
$string = "teste teste, teste. teste teste";

echo trim($string).PHP_EOL;
echo rtrim($string, ',').PHP_EOL;
echo ltrim($string, '.').PHP_EOL;
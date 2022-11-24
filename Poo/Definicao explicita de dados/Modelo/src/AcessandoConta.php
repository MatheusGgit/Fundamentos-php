<?php
/*
 * Invés de usar o require_one ou só require, para classes, usar o USE
   require_once 'Conta.php';
   require_once 'Pessoa.php';
   require_once 'Funcionario.php';
*/
use Modelo\src\Conta;
use Modelo\src\Funcionario;
use Modelo\src\Pessoa;
require_once '../classe_auto_load.php';

$primeiraConta = new Conta('123.123.123-12', 'Matheus');
$primeiraConta->depositar(200);
$primeiraConta->sacar(15.00);
$primeiroFuncinario = new Funcionario('Matheus', '123.123.123-12', 'CEO');
echo $primeiroFuncinario->getNome();
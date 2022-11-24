<?php
namespace Modelo\src;
class Conta
{
    private string $cpf;
    private string $nomeTitular;
    private float $saldo;

    public function __construct(string $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->nomeTitular = $nome;
        $this->saldo = 0;
    }

    public function sacar(float $valorASacar):void
    {
        if ($valorASacar > $this->saldo)
        {
            echo 'Valor indisponível'.PHP_EOL;
        }
        else
        {
            $this->saldo -= $valorASacar;
            echo "Sacou R$ $valorASacar".PHP_EOL;
        }

    }
    public function depositar(float $valorADepositar):void
    {
        if ($valorADepositar < 0)
        {
            echo 'Valor indisponível'.PHP_EOL;
        }
        else
        {
            $this->saldo += $valorADepositar;
            echo "Depositou R$ $valorADepositar".PHP_EOL;
        }
    }
    public function transferir(float $valorATransferir, Conta $contaDestino):void
    {
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }
}
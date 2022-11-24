<?php
namespace Modelo\src;
class Funcionario extends Pessoa
{
    private string $Cargo;

    public function __construct(string $nome, string $cpf, string $cargo)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->Cargo = $cargo;
    }
    public function getCargo(): string
    {
        return $this->Cargo;
    }
    public function setCargo(string $Cargo): void
    {
        $this->Cargo = $Cargo;
    }

}
<?php

namespace Modelo\src;

class Pessoa
{
    protected string $nome; // Não pode ser acessado externamente, porém pode ser acessado pelas classes filhas
    private string $cpf;

    public function getNome(): string
    {
        return $this->nome;
    }
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }
    public function getCpf(): string
    {
        return $this->cpf;
    }
    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }


}
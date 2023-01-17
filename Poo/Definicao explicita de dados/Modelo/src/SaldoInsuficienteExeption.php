<?php

namespace Modelo\src;

class SaldoInsuficienteExeption extends \DomainException
{
    public function __construct(float $valorSaque, float $saldoAtual)
    {
        $message = "Você tentou sacar $valorSaque, mas tem apenas $saldoAtual em sua conta";
        parent::__construct($message);
    }
}
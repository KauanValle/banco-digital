<?php

namespace Banco\Pessoa;

class Endereco
{
    public $logradouro;
    public $numero;
    public $complemento;

    public function __construct($logradouro, $numero, $complemento)
    {
        $this->logradouro = $logradouro;
        $this->numero = $numero;
        $this->complemento = $complemento;
    }
}
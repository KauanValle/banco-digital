<?php

namespace Banco\Contas;

use Banco\Pessoa;

interface ContasInterface
{
    public function cadastrarBanco(Pessoa $pessoa);

    public function calculaMensalidade(Pessoa $pessoa);
}
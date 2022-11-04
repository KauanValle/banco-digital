<?php

use Banco\Contas\ContaCorrente;
use Banco\Pessoa;
use Banco\Pessoa\Endereco;

require 'vendor/autoload.php';

$pessoa = new Pessoa(
    'Kauan',
    '00000000000',
    'kauanvalle3@gmail.com',
    '1000',
    new Endereco(
        'Rui Barbosa',
        '1500',
        'Casa'
    )
);

$pessoa->cadastrarConta(new ContaCorrente());
$pessoa->depositar(10000);
$pessoa->saque(200);

$pessoa->verConta();
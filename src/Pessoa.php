<?php

namespace Banco;

use Banco\Banco\Banco;
use Banco\Contas\ContasInterface;
use Banco\Credito\CreditoCincoMil;
use Banco\Credito\CreditoDoisMil;
use Banco\Credito\CreditoMil;
use Banco\Credito\CreditoTresMil;
use Banco\Credito\SemCredito;
use Banco\Pessoa\Endereco;

class Pessoa
{
    public $nome;
    public $cpf;
    public $email;
    public $renda;
    public Endereco $endereco;
    public Banco $conta;

    public function __construct($nome, $cpf, $email, $renda, Endereco $endereco)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->renda = $renda;
        $this->endereco = $endereco;
    }

    public function cadastrarConta(ContasInterface $conta)
    {
        $this->conta = $conta->cadastrarBanco($this);
    }

    public function analiseDeCredito(Pessoa $pessoa)
    {
        $analise = new CreditoMil(
            new CreditoDoisMil(
                new CreditoTresMil(
                    new CreditoCincoMil(
                        new SemCredito()
                    )
                )
            )
        );

        return $analise->calculaCredito($pessoa);
    }

    public function calculaMensalidade()
    {
        return $this->renda * 0.01;
    }

    public function saque($valorSaque)
    {
        $this->conta->saque($valorSaque);
    }

    public function depositar($valorDeposito)
    {
        $this->conta->depositar($valorDeposito);
    }

    public function verConta()
    {
        print_r($this);
    }
}
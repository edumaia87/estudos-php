<?php

// A entidade deve estar aberta a extensão porém fechara para modificação.

/* Maneira incorreta
class ContratoClt
{
    public function calcularSalario()
    {
    }
}

class Estagio
{
    public function bolsaAuxilio()
    {
    }
}

class ContratoPj
{
    public function calcularPagamento()
    {
    }
}

class FolhaDePagamento
{
    public function calcular($funcionario)
    {
        $salario = 0;
        if ($funcionario instanceof ContratoClt) {
            $salario = $funcionario->calcularSalario();
        } else if ($funcionario instanceof Estagio) {
            $salario = $funcionario->bolsaAuxilio();
        } else if($funcionario instanceof ContratoPj) {
            $salario = $funcionario->calcularPagamento();
        }

        return $salario;
    }
}*/

// Maneira correta

interface Remuneravel
{
    public function remuneracao();
}

class ContratoClt implements Remuneravel
{
    public function remuneracao()
    {
    }
}

class Estagio implements Remuneravel
{
    public function remuneracao()
    {
    }
}

class ContratoPj implements Remuneravel
{
    public function remuneracao()
    {
    }
}

class ContratoInternacional implements Remuneravel
{
    public function remuneracao()
    {
    }
}

class FolhaDePagamento // Aqui não preciso alterar minha classe para caber outro tipo de contrato
{
    public function calcular(Remuneravel $funcionario)
    {
        return $funcionario->remuneracao();
    }
}

$folha_pagamento = new FolhaDePagamento();
$folha_pagamento->calcular(new ContratoClt());

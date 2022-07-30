<?php

use Classes\Pessoa;
use Classes\Funcionario;

require_once __DIR__ . '/Classes/Pessoa.php';
require_once __DIR__ . '/Classes/Funcionario.php';

/*
    Parando em certo ponto:
        die();

    Vendo que linha executou:
        echo __LINE__ . PHP_EOL;
*/
$joao = new Funcionario('João', 'masculno', true, 123456, 'atendente');
// $joao->dormir();
// echo $joao->acordado() . PHP_EOL;
// echo $joao->acordado . PHP_EOL; // atributo protegido não pode ser acessado diretamente
// $joao->acordar();
// echo $joao->acordado() . PHP_EOL;
// $joao->alimentado = 'SIM';
// echo $joao->alimentado . PHP_EOL;
// $joao->alimentado = 'SIM. Comeu feijoada';
// echo $joao->alimentado . PHP_EOL;
// echo $joao->salarioPorCargo('gerente') . PHP_EOL;
// echo $joao->salarioPorCargo('balconista') . PHP_EOL;
// echo Funcionario::salarioPorCargo('gerente') . PHP_EOL;

echo "Registro: {$joao->getRegistro()}" . PHP_EOL;
echo "Cargo: {$joao->cargo()}" . PHP_EOL;
echo "Salário: {$joao->getSalario()}" . PHP_EOL;
echo str_repeat('-', 10) . PHP_EOL;

$joao->promover('vendedor');
echo "Cargo: {$joao->cargo()}" . PHP_EOL;
echo "Salário: {$joao->getSalario()}" . PHP_EOL;
echo str_repeat('-', 10) . PHP_EOL;

$joao->promover('gerente');
echo "Cargo: {$joao->cargo()}" . PHP_EOL;
echo "Salário: {$joao->getSalario()}" . PHP_EOL;
echo str_repeat('-', 10) . PHP_EOL;

$joao->promover('gerente-geral');
echo "Cargo: {$joao->cargo()}" . PHP_EOL;
echo "Salário: {$joao->getSalario()}" . PHP_EOL;
echo str_repeat('-', 10) . PHP_EOL;

$joao->promover('vendedor');
echo "Cargo: {$joao->cargo()}" . PHP_EOL;
echo "Salário: {$joao->getSalario()}" . PHP_EOL;
echo str_repeat('-', 10) . PHP_EOL;

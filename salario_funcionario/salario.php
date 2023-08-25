<?php

$salario = $_POST['salario'];
$valor_total = $_POST['valor'];
$comissao = $valor_total * 4/100;

$salario_final = $salario + $comissao;

echo "O funcionário tem $comissao de comissão e salário final de $salario_final reais.";

?>
<?php

$investimento = $_POST['investimento'];
$valor = $_POST['valor'];

if($investimento == 'poupanca'){
    echo "3% de rendimento mensal \n" . $valor + ($valor * 3/100);
} else if($investimento == 'renda_fixa'){
    echo "4% de rendimento mensal \n" . $valor + ($valor * 4/100);
} else{
    echo "Não encontramos esse resultado";
}

?>
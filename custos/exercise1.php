<?php

$custos_da_fabrica = $_POST['custos'];
$distribuidor = $_POST['distribuidor'];
$impostos = $_POST['impostos'];
$preco = $custos_da_fabrica + ($distribuidor * $impostos); 

if ($custos_da_fabrica <= 39.999){
    echo "Já Passou da hora de economizar \n". $preco + ($preco * 5/100);
} elseif ($custos_da_fabrica >= 40.000 && $custos_da_fabrica <= 69.999){
    echo "Ta ganhando heinnn \n". $preco + ($preco * 10/100) + ($preco * 15/100);
} else {
    echo "Desista \n". $preco + ($preco * 15/100) + ($preco * 20/100);

}


?>
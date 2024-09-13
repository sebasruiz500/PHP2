<?php

$retirar_dinero = readline("Por favor, ingresa la cantidad de donaciones acumladas que tienes: ");

if($retirar_dinero >= 100)
{
    echo "Puedes retirar el dinero de Twich, la cantidad: $retirar_dinero";
}else{
    echo "No puedes retirar el dinero de Twich, por que tienes: $retirar_dinero";
}
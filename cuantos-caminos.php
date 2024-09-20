<?php
$tiendas = readline("Ingrese el número de tienda al que desea ir: ");
$anterior = 0;
$actual = 1;

for ($i =2 ; $i <= $tiendas; $i++) { 
    $temporal = $actual;
    $actual += $anterior;
    $anterior = $temporal;

}

echo "Hay $actual formas distantas de llegar";
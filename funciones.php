<?php

function get_pokemon(){

    $numero_aletorio = rand(1, 5);
    switch($numero_aletorio){
        case 1: 
            echo "Pikachu";
            break;
        case 2:
            echo "Charmander";
            break;
        case 3:
            echo "Mewtwo";
            break;
        default:
            echo "No hay pokemon para ti";
    }
}

for ($i=0; $i < 20; $i++) { 
    get_pokemon();
    echo "\n";
}
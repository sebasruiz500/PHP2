<?php

function es_estudiante_legend($platzi_rank){
    if($platzi_rank >= 20000){
        echo "Eres un estudiante Legend";
    }
    else {
        echo "Lo sentimos, aun no alcnanza el nivel Legend\n";
    }
}
$puntos_estudiantes = (int) readline("Ingresa el número de puntos, para ver si eres Legend: ");
echo "\n";
es_estudiante_legend($puntos_estudiantes);


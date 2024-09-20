<?php

function obtener_hora() {
    date_default_timezone_set("America/Mexico_City");
    $hoy = date("h:i a");
    return $hoy;
}

echo "Hola, Me podrías decir qué hora es\n";
echo "Claro Son las: ". obtener_hora();

echo "\n";

<?php


$usernames = ["Juan", "Mr. Michi", "Gucci"];

do {
    
    $username = readline("Por favor, ingresa tu nuevo nombre de usuario: ");

} while( in_array($username, $usernames) );

echo "\n";
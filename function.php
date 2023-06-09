<?php
$stringlenght = $_GET['number'];

function generaStringaRandom($lenght)
{
    $caracters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTVWXYZ-_@%!?';
    $stringaRandom = '';
    for ($i = 0; $i < $lenght; $i++) {
        $stringaRandom .= $caracters[rand(0, strlen($caracters) - 1)];
    }
    return $stringaRandom;
}

?>
<?php

function input(string $info){
    echo "$info : ";
    $result = fgets(STDIN);
    return trim($result);// Supaya Space Dan WaitSpace Di Sekitar Hilang
}

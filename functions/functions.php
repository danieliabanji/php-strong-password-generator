<?php

function generate($number)
{

    $pass = '';
    $length = 0;

    while ($length < $number) {
        $length += 1;
        $type = rand(1, 3);
        if ($type == 1) {
            // chr ritorna un valore dalla tabelle ASCII 
            $pass .= chr(rand(33, 64)); //numeri e caratteri speciali

        } elseif ($type == 2) {
            $pass .= chr(rand(65, 90)); //A->Z

        } else {
            $pass .= chr(rand(97, 122)); //a->z

        }
    }
    return $pass;

}
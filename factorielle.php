<?php
//gmp_fact — Factorielle GMP

//Calcule la factorielle (num!) de num.
function factorielle($fact)
{
    $fact = gmp_fact($fact);
    return $fact;
}

//FONCTION DE ALEX

function nbEntier()
{
    do {
        $tmp = readline("Entez un nombre entier plus grand que 0 >>");
    } while (!ctype_digit($tmp));

    if ($tmp <= 1) {
        return 1;
    } else {
        return $tmp;
    }
}

echo nbEntier();

<?php
//gmp_fact — Factorielle GMP

//Calcule la factorielle (num!) de num.
function factorielle($fact)
{
    $fact = gmp_fact($fact);
    return $fact;
}

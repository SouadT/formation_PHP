<?php

function addToArray(array $arr, $value): array
{
    //  tois point apré le vergule ajouter un valeur au début d'un tableau      
    //"", ...$arr,""  / $arr = array $arr
    //tois point apré le vergule ajouter un valeur a la fin d'un tableau   
    //return [$value, 'tata', ...$arr, 'toto'];
    return [$value, ...$arr];
}
//function outputArray(): void ===> fonctin sans return
function outputArray(): void
{
    //array_fill — Remplit un tableau avec une même valeur
    foreach (addToArray(array_fill(0, 4, 'Value'), 'New value') as $key => $value) {
        echo "$key => $value\n";
    }
}

outputArray();

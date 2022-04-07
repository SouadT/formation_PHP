<?php
function battleship(string $x, int $y): string
{
    $tableX = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j'];
    $tableY = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $ships = [
        ['f' => 3],
        ['f' => 4],
        ['f' => 5],
        ['i' => 5],
        ['i' => 6],
        ['c' => 9],
        ['d' => 9],
        ['e' => 9],
        ['f' => 9],
    ];

    foreach ($ships as $point) {
        if ($point == [$x => $y]) {
            return "Touché\n";
        }
    }

    if (array_search($x, $tableX) && array_search($y, $tableY)) {
        return "Loupé\n";
    }
    return "Hors-jeu\n";
}
battleship($x, $y);

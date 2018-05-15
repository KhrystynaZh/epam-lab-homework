<?php
// We have chars mapping: A => T, C => G.
// You need to create a converter for strings with the results:
// "ATTGC" -> returns "TAACG", "GTAT" -> returns "CATA"

echo convert('ATTGC') . "<br>";
echo convert('GTAT') . "<br>";

function convert($string)
{
    $search = ['A', 'C', 'T', 'G'];
    $numbers = [1, 2, 3, 4];
    $replace = ['T', 'G', 'A', 'C'];
    return str_replace($numbers, $replace, str_replace($search, $numbers, $string));
}

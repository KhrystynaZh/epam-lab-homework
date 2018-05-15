<?php
// You need to find out a unique value in array, you are given arrays:
// - [ 1, 1, 1, 2, 1, 1 ] => 2
// - [ 0, 0, 0.55, 0, 0 ] => 0.55
// - [3,1,5,3,7,4,1,5,7] => 4

$a = [ 1, 1, 1, 2, 1, 1 ];
$b = [ 0, 0, 0.55, 0, 0 ];
$c = [3,1,5,3,7,4,1,5,7];

echo implode(', ', $a);
var_dump(getUniqueValue($a));

echo implode(', ', $b);
var_dump(getUniqueValue($b));

echo implode(', ', $c);
var_dump(getUniqueValue($c));

function getUniqueValue($numbers)
{
    $transfNumbers = [];
    foreach($numbers as $number) {
        if (is_float($number)) {
            $transfNumbers[] = strval($number);
        } else {
            $transfNumbers[] = $number;
        }
    }
    $values = array_keys(array_count_values($transfNumbers), 1);
    return $values;
}
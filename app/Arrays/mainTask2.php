<?php
// Є масив:
//$temperatures = array(33, 15, 17, 20, 23, 23, 28, 40, 21, 19, 31, 18, 30, 31, 28, 23, 19, 28, 27, 30, 39, 17, 17, 20, 19, 23, 28, 30, 34, 28);
//Знайти три найменших значення, три найбільших і три середніх.

$temperatures = array(33, 15, 17, 20, 23, 23, 28, 40, 21, 19, 31, 18, 30, 31, 28, 23, 19, 28, 27, 30, 39, 17, 17, 20, 19, 23, 28, 30, 34, 28);

echo 'Min values:';
var_dump(getMinValues($temperatures, 3));

echo 'Max values:';
var_dump(getMaxValues($temperatures, 3));

echo 'Average values:';
var_dump(getAverageValues($temperatures, 3));

function getMinValues($array, $amount)
{
    $values = array_unique($array);
    sort($values);
    return array_slice($values, 0, $amount);
}

function getMaxValues($array, $amount)
{
    $values = array_unique($array);
    rsort($values);
    return array_slice($values, 0, $amount);
}

function getAverageValues($array, $amount)
{
    $avg = array_sum($array)/count($array);

    $values = array_unique($array);
    sort($values);

    $differences = [];
    foreach ($values as $value) {
        $differences[] = abs($value - $avg);
    }
    $averages = array_combine($values, $differences);
    asort($averages);
    return array_slice(array_keys($averages), 0, $amount);
}

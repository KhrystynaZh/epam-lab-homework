<?php
//You are going to be given an array of integers.
// Your job is to take that array and find an index N where the sum of the integers
// to the left of N is equal to the sum of the integers to the right of N.
// If there is no index that would make this happen, return -1.
//For example:
//Let's say you are given the array [1,2,3,4,3,2,1] - Your function will return the index 3,
// because at the 3rd position of the array, the sum of left side of the index ([1,2,3])
// and the sum of the right side of the index ([3,2,1]) both equal 6.
//[1,100,50,-51,1,1] - Your function will return the index 1,
// because at the 1st position of the array, the sum of left side of the index ([1])
// and the sum of the right side of the index ([50,-51,1,1]) both equal 1.

//You need to test the solution on the next arrays:
//[20,10,-80,10,10,15,35]
//[10,-80,10,10,15,35]

$a = [1,2,3,4,3,2,1];
$b = [20,10,-80,10,10,15,35];
$c = [10,-80,10,10,15,35];
$d = [1,100,50,-51,1,1];

echo implode(', ', $a);
var_dump(getIndex($a));

echo implode(', ', $b);
var_dump(getIndex($b));

echo implode(', ', $c);
var_dump(getIndex($c));

echo implode(', ', $d);
var_dump(getIndex($d));

function getIndex($numbers)
{
    for($i = 1; $i<count($numbers); $i++) {
        if(array_sum(array_slice($numbers, 0, $i)) == array_sum(array_slice($numbers, $i+1))) {
            return $i;
        }
    }
    return false;
}

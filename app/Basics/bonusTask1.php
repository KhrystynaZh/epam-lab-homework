<?php
// Compare two strings by comparing the sum of their values (ASCII character code).
// For comparing treat all letters as UpperCase.
// Null-Strings should be treated as if they are empty strings.
// If the string contains other characters than letters, treat the whole string as it would be empty.
//Examples:
//"AD","BC" -> equal
//"AD","DD" -> not equal
//"gf","FG" -> equal
//"zz1","" -> equal
//"ZzZz", "ffPFF" -> equal
//"kl", "lz" -> not equal
//null, "" -> equal
//Your method should return true, if the strings are equal and false if they are not equal.

echo ((compareSumASCII('AD', 'BC')) ? 'equal' : 'not equal') . "<br>";
echo ((compareSumASCII('AD', 'DD')) ? 'equal' : 'not equal') . "<br>";
echo ((compareSumASCII('gf', 'FG')) ? 'equal' : 'not equal') . "<br>";
echo ((compareSumASCII('zz1', '')) ? 'equal' : 'not equal') . "<br>";
echo ((compareSumASCII('ZzZz', 'ffPFF')) ? 'equal' : 'not equal') . "<br>";
echo ((compareSumASCII('kl', 'lz')) ? 'equal' : 'not equal') . "<br>";
echo ((compareSumASCII(null, '')) ? 'equal' : 'not equal') . "<br>";

function getSumASCII($string)
{
    if (ctype_alpha($string)) {
        $sumASCII = 0;
        for ($i = 0; $i < strlen($string); $i++) {
            $sumASCII += ord(strtoupper($string[$i]));
        }
    } else {
        $sumASCII = 0;
    }
    return $sumASCII;
}

function compareSumASCII($a, $b)
{
    return (getSumASCII($a) == getSumASCII($b)) ? true : false;
}
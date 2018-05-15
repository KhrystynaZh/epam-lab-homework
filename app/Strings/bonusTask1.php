<?php
// My friend wants a new band name for her band.
// She likes bands that use the formula: 'The' + a noun with first letter capitalized.
// However, when a noun STARTS and ENDS with the same letter,
// she likes to repeat the noun twice and connect them together with the first and last letter,
// combined into one word like so (WITHOUT a 'The' in front):
//dolphin -> The Dolphin
//alaska -> Alaskalaska
//europe -> Europeurope

echo bandName('dolphin') . "<br>";
echo bandName('alaska') . "<br>";
echo bandName('europe') . "<br>";

function bandName($name)
{
    if ($name[0] == $name[strlen($name)-1]) {
        return ucfirst($name . substr($name, 1));
    }
    else {
        return 'The ' . ucfirst($name);
    }
}

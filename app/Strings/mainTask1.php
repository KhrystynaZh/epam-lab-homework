<?php
// Перетворити рядок 'var_test_text' в 'varTestText'

$string = 'var_test_text';
echo camelCase($string);

function camelCase($string) {
    $newString = explode('_', $string);
    for ($i = 1; $i < count($newString); $i++) {
        $newString[$i] = ucfirst($newString[$i]);
    }
    return implode($newString);
}

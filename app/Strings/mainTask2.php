<?php
// Є рядок наступного вигляду: 4 літери, потім пробіл, потім ще 4 літери.
// Наприклад, такий рядок 'ФЫВА олдж'. Треба перетворити на наступний рядок 'АВЫФ ждло'. !!!! UTF-8

$string = 'ФЫВА олдж';
echo revertString($string);

function revertString($string) {
    $words = explode(' ', $string);
    for ($i = 0; $i < count($words); $i++) {
        $words[$i] = mb_revertWord($words[$i]);
    }
    return implode($words, ' ');
}

function mb_revertWord($word)
{
    $revWord = '';
    for ($i = strlen($word)-1, $j = 0; $i > 0; $i-=2, $j+=2) {
        $revWord[$j] = $word[$i-1];
        $revWord[$j+1] = $word[$i];
    }
    return $revWord;
}
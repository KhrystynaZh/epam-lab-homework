<?php
// Є рядок з 6-ти чисел (наприклад: 385934).
// Перевірте, чи сума перших трьох чисел дорівнює сумі других трьох чисел.
// Якщо це так – виведіть 'так' інакше – 'ні'.

echo ((hasEqualSideSum('200011')) ? 'так' : 'ні') . "<br>";
echo ((hasEqualSideSum('385934')) ? 'так' : 'ні') . "<br>";
echo ((hasEqualSideSum('648019')) ? 'так' : 'ні') . "<br>";
echo ((hasEqualSideSum('123123')) ? 'так' : 'ні') . "<br>";

function hasEqualSideSum($number)
{
    return (($number[0] + $number[1] + $number[2]) == ($number[3] + $number[4] + $number[5]))
        ? true
        : false;
}

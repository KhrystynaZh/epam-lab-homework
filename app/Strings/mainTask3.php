<?php
// Є масив $a = [342, 55, 33, 123, 66, 63, 9]; -
// потрібно вивести на екран тільки ті числа в яких є '3'

$a = [342, 55, 33, 123, 66, 63, 9];

echo implode(', ', preg_grep("/(\d+)?3(\d+)?/", $a));

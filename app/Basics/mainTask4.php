<?php
// Змінна $min має число від 0 до 59.
// Визначити в яку чверть години потрапляє число,
// відповідно вивести на екран одне з значень: «перша», «друга», «третя», «четверта».

quoterHour(14);
quoterHour(29);
quoterHour(44);
quoterHour(59);
quoterHour(-15);
quoterHour(68);

function quoterHour($min)
{
    switch (intdiv($min, 15)) {
        case 0:
            echo "$min - перша <br>";
            break;
        case 1:
            echo "$min - друга <br>";
            break;
        case 2:
            echo "$min - третя <br>";
            break;
        case 3:
            echo "$min - четверта <br>";
            break;
        default:
            echo "$min - невірний формат хвилин <br>";
    }
}


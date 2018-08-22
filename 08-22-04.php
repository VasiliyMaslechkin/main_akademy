<?php
//У: принимает параметром число от 1 до 7
//З: сделайте функцию, которая возвращает день недели на русском языке.
function dayOfWeek ($num){
    if ($num == 1) $dayOfWeek = 'пПонедельник';
    elseif ($num == 2) $dayOfWeek = 'Вторник';
    elseif ($num == 3) $dayOfWeek = 'Среда';
    elseif ($num == 4) $dayOfWeek = 'Четверг';
    elseif ($num == 5) $dayOfWeek = 'Пятница';
    elseif ($num == 6) $dayOfWeek = 'Субота';
    else $dayOfWeek = 'Воскресенье';
    return $dayOfWeek;
}
$number = mt_rand(1,7);
echo dayOfWeek ($number);

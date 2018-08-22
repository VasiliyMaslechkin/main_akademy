<?php
//У: число передается параметром.
//З: сделайте функцию, которая возвращает квадрат числа.
function quareOfNumber ($num) {
    return $num * $num;
}
$number = mt_rand(1,256);
echo quareOfNumber ($number);
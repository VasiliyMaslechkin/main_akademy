<?php
//У: два числа передаются параметрами функции.
//З: сделайте функцию, которая возвращает сумму двух чисел.
function summaNumber ($number1, $number2) {
    return $number1 + $number2;
}
$first = mt_rand(1,256);
$second = mt_rand(1,256);
echo "$first, $second, ".summaNumber ($first, $second);
<?php
//Напишите функцию с переменным числом аргуметов, которая выводит среднее арифметическое введенных чисел.
function arithmeticMean ($number1, $number2){
    return ($number1 + $number2) / 2;
}
$first = mt_rand(1,256);
$second = mt_rand(1,256);
echo "($first + $second) / 2 = ".arithmeticMean ($first, $second);
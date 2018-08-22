<?php
//Дана строка из 6-ти цифр.
//Проверьте, что сумма первых трех цифр равняется сумме вторых трех цифр.
//Если это так - выведите 'да', в противном случае выведите 'нет'.
$number = mt_rand(100000,999999);
$first = $number / 100000 - ($number % 100000) / 100000;
$firstToSecond = $number - $first * 100000;
$second = $firstToSecond / 10000 - ($firstToSecond % 10000) / 10000;
$secondToThird = $firstToSecond - $second * 10000;
$third = $secondToThird / 1000 - ($secondToThird % 1000) / 1000;
$thirdToFourth = $secondToThird  - $third * 1000;
$fourth = $thirdToFourth / 100 - ($thirdToFourth % 100) / 100;
$fourToFifth = $thirdToFourth - $fourth * 100;
$fifth = $fourToFifth / 10 - ($fourToFifth % 10) / 10;
$six = $fourToFifth - $fifth * 10;
echo 'With number: ';
print_r($number);
echo ', '.$first.', '.$second.', '.$third.', '.$fourth.', '.$fifth.', '.$six;
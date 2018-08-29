<?php
//Составить программу, которая будет считывать введённое пятизначное число/
//После чего, каждую цифру этого числа необходимо вывести в новой строке.
$number = mt_rand(10000,99999);
$first = $number / 10000 - ($number % 10000) / 10000;
$firstToSecond = $number - $first * 10000;
$second = $firstToSecond / 1000 - ($firstToSecond % 1000) / 1000;
$secondToThird = $firstToSecond - $second * 1000;
$third = $secondToThird / 100 - ($secondToThird % 100) / 100;
$thirdToFourth = $secondToThird  - $third * 100;
$fourth = $thirdToFourth / 10 - ($thirdToFourth % 10) / 10;
$fifth = $thirdToFourth  - $fourth * 10;
echo 'With number: ';
print_r($number);
echo ', '.$first.', '.$second.', '.$third.', '.$fourth.', '.$fifth;

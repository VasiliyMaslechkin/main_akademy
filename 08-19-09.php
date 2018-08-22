<?php
//Разработайте программу, которая определяла количество прошедших часов по введенным пользователем градусах.
//Введенное число может быть от 0 до 360.
$degree = mt_rand(0,360);
if ($degree == 0){ $degree = 360;}

$queryHoursInDegree = $degree - $degree % 30;
$queryHours = $queryHoursInDegree / 30;

switch ($queryHours) {
    case 1:
        $endWord = 'а';
        break;
    case 2: case 3: case 4:
        $endWord = 'и';
        break;
    default:
        $endWord = '';
        break;
}
echo "$queryHours годин$endWord";
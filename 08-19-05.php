<?php
//В переменной $month лежит какое-то число из интервала от 1 до 12.
//Определите в какую пору года попадает этот месяц (зима, лето, весна, осень).
$month = mt_rand(1,12);
//switch
switch ($month){
    case 12: case 1: case 2: echo 'зима'; break;
    case 3: case 4: case 5: echo 'весна'; break;
    case 6: case 7: case 8: echo 'лето'; break;
    case 9: case 10: case 11: echo 'осень'; break;
}
//if ... elseif ... else
if (($month == 12) || ($month < 3)){
    echo 'зима';
} elseif (($month > 2) && ($month < 6)) {
    echo 'весна';
} elseif (($month > 5) && ($month < 9)) {
    echo 'лето';
} elseif (($month > 8) && ($month < 12)) {
    echo 'осень';
}
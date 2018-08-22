<?php
//У: три числа
//З: сделайте функцию, которая отнимает от первого числа второе и делит на третье.
function actionOfNumber ($fir, $sec, $thir){
    return ($fir - $sec) / $thir;
}
$first = mt_rand(1,256);
$second = mt_rand(1,256);
$third = mt_rand(1,256);
echo "($first - $second) / $third = ".actionOfNumber ($first, $second, $third);
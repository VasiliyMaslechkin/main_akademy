<?php //Дана строка с цифрами, например, '12345'.
// Проверьте, что первым символом этой строки является цифра 1, 2 или 3.
// Если это так - выведите 'да', в противном случае выведите 'нет'.
$get_string = '12345';
$char1 = substr($get_string,0,1);
//if ... else
if (($char1 == '1')||($char1 == '2')||($char1 == '3')){
    echo "да";
} else {
    echo "нет";
}
//swich
switch ($char1){
    case '1': case '2': case '3':
        echo 'да';
        break;
    default:
        echo 'нет';
        break;
}

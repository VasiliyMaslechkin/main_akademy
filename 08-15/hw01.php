<?php
$string = 'ivase1991@gmail.com';
$char = '@';
$all_part = explode ( $char, $string));
$user = $all_part [0];
$mailServer = $all_part [1];
echo "користувач: $user; поштовий сервер: $mailServer."

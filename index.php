<?php

//Вашим заданием будет создание сокращенного варианта ФИО.
//Например, вводим: Иванов Иван Петрович, а в результате должны получить: Иванов И. П.

$string = 'Иванов Иван Петрович';
$shortString = '';
$pieces = explode(' ', $string);

for($i = 0; $i < count($pieces); $i++) {
    if($pieces[$i] == $pieces[0]) {
        $shortString = $pieces[$i];
    } else {
        $shortString .= ' ' . mb_substr($pieces[$i], 0, 1) . '.';
    }
}

echo $shortString;

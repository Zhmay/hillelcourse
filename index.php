<?php

//1. Рекурсивно выведите на экран ряд Фибоначчи до 10-го элемента
//2. Создайте в цикле (for либо while) одномерный массив из 10 элементов, где значение на каждой итерации - произвольное число от 1 до 10 (используйте функцию mt_rand)
//3. Выведите все чётные и все нечётные элементы массива из задания 2
//4. Отсортируйте массив из задания 2 по ключу в порядке убывания
//5. Отсортируйте массив из задания 2 по значению в порядке убывания
//6. Создайте индексированный массив произвольных имён (до 10 элементов). Поменяйте местами ключи и значения этого массива и выведите на экран
//7. Создайте двумерный массив и переберите его циклами foreach, for и while

function prettierArr($arr) {
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}

//1. Рекурсивно выведите на экран ряд Фибоначчи до 10-го элемента

function fibonacci($value, int $first = 0, int $second = 1) {
    if( $value > 0 ) {
        $sum = $first + $second;
        $first = $second;
        $second = $sum;
        print $sum . ' ';
        fibonacci($value - 1, $first, $second);
    }
}
fibonacci(10);

//2. Создайте в цикле (for либо while) одномерный массив из 10 элементов, где значение на каждой итерации - произвольное число от 1 до 10 (используйте функцию mt_rand)

$randomArr = [];
for ($i = 0; $i < 10; $i++) {
    array_push($randomArr, mt_rand(1, 10));
}

prettierArr($randomArr);

//3. Выведите все чётные и все нечётные элементы массива из задания 2

$even = [];
$odds = [];
foreach ($randomArr as $item) {
    if($item % 2 == 0) {
        $even[] = $item;
    } else {
        $odds[] = $item;
    }
}
echo 'Четные';
prettierArr($even);
echo 'Не четные';
prettierArr($odds);

//4. Отсортируйте массив из задания 2 по ключу в порядке убывания
echo 'по ключу в порядке убывания';
krsort($randomArr);
prettierArr($randomArr);

//5. Отсортируйте массив из задания 2 по значению в порядке убывания
echo 'по значению в порядке убывания';
arsort($randomArr);
prettierArr($randomArr);

//6. Создайте индексированный массив произвольных имён (до 10 элементов). Поменяйте местами ключи и значения этого массива и выведите на экран

$names = ['Alex', 'Andrey', 'Bogdan', 'Vladimir', 'Julia', 'Mary', 'Nikolay'];
echo 'Поменяйте местами ключи';
$names = array_flip($names);
prettierArr($names);

//7. Создайте двумерный массив и переберите его циклами foreach, for и while
echo 'двумерный массив foreach';
$array = [2, 4, 5, 6, ['Alex', 'Andrey', 'Bogdan'], 23];

foreach ($array as $item) {
    prettierArr($item);
    if(is_array($item)) {
        foreach ($item as $elem) {
            prettierArr($elem);
        }
    }
}
echo 'двумерный массив For';
for ($i = 0; $i < count($array); $i++) {
    prettierArr($array[$i]);

    if(is_array($array[$i])) {
        for ($j = 0; $j < count($array[$i]); $j++) {
            prettierArr($array[$i][$j]);
        }
    }
}
echo 'двумерный массив While';
$i = 0;

while ($i < count($array)) {
    prettierArr($array[$i]);

    if(is_array($array[$i])) {
        $j = 0;

        while ($j < count($array[$i])) {
            prettierArr($array[$i][$j]);
            $j++;
        }
    }
    $i++;
}
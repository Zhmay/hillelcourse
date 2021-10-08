<?php
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];

//1.1
echo 'длинна массива - ' . count($arr) . '<br>';

//1.2
$firstFour = array_splice($arr, 0, 4);
array_push($arr, ...$firstFour);

echo '<pre>';
print_r($arr);
echo '</pre>';

//1.3
echo  'сумма - ' . array_sum(array_slice($arr, 3, 3));

$firstArr = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'foure' => 5,
    'five' => 12,
];
echo '<pre>';
print_r($firstArr);
echo '</pre>';

$secondArr = [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    'foure' => 5,
    'five' => 13,
    'six' => 37,
];
echo '<pre>';
print_r($secondArr);
echo '</pre>';

//2.1
echo  'в первом нет таких элементов';
echo '<pre>';
print_r(array_diff($secondArr, $firstArr));
echo '</pre>';

//2.2
echo  'во втором нет таких элементов';
echo '<pre>';
print_r(array_diff($firstArr, $secondArr));
echo '</pre>';

//2.3
echo 'совпадают';
echo '<pre>';
print_r(array_intersect($firstArr, $secondArr));
echo '</pre>';

//2.4
echo 'отличаются';
echo '<pre>';
print_r(array_diff_assoc($firstArr, $secondArr));
echo '</pre>';


$lastArr = [
    'one' => 1,

    'two' => [
        'one' => 1,
        'seven' => 22,
        'three' => 32,
    ],

    'three' => [
        'one' => 1,
        'two' => 2,
    ],

    'foure' => 5,

    'five' => [
        'three' => 32,
        'foure' => 5,
        'five' => 12,
    ],
];

echo '3.1 только вторые елеметы вложенных массивов';
foreach ($lastArr as $item) {
    if(is_array($item)) {
            echo '<pre>';
            print_r(array_slice($item, 1, 1));
            echo '</pre>';
    }
}
$totalCount = count($lastArr);
foreach ($lastArr as $item) {
    if(is_array($item)) {
        $totalCount += count($item);
    }
}
echo '3.2 общее количество элементов в массиве - ' . $totalCount . '<br>';

$totalSum = array_sum($lastArr);
foreach ($lastArr as $item) {
    if(is_array($item)) {
        $totalSum += array_sum($item);
    }
}

echo '3.3 получить сумму всех значений в массиве - ' . $totalSum . '<br>';

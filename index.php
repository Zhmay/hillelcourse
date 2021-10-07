<?php
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];

//1.1
echo 'длинна массива - ' . count($arr) . '<br>';

//1.2
$firstFour = array_slice($arr, 0, 4);
array_splice($arr, 0, 4);
$arr = array_merge($arr, $firstFour);
echo '<pre>';
print_r($arr);
echo '</pre>';

//1.3
echo  'сумма - ' . array_sum(array_slice($arr, 4, 3));


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
print_r(array_diff_key($secondArr, $firstArr));
echo '</pre>';

//2.2
echo  'во втором нет таких элементов';
echo '<pre>';
print_r(array_diff_key($firstArr, $secondArr));
echo '</pre>';

//2.3
echo 'совпадают';
echo '<pre>';
print_r(array_intersect($firstArr, $secondArr));
echo '</pre>';

//2.4
echo 'отличаются';
echo '<pre>';
print_r(array_diff($firstArr, $secondArr));
echo '</pre>';
echo '-------------------------------------';


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

//3.1

//3.2
foreach ($lastArr as $item) {
    if(is_array($item)) {
        echo '<pre>';
        print_r($item);
        echo '</pre>';
        echo  'количество элементов в массиве - ' . count($item);
    }
}

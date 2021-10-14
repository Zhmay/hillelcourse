<?php
$arr = [12, [10, 5], 3, 'five' => ['one' => 30,'two' => 2,'three' => [10, 9]], 8];

//1. Создать функцию принимающую массив произвольной вложенности и определяющий любой элемент номер которого передан параметром во всех вложенных массивах.
function getElement(array $array, $number) {
    $result = [];
    $key = 0;

    foreach ($array as $elem) {
        if($key == $number) {
            $result[] = $elem;
        }
        if(is_array($elem)) {
            $newResult = getElement($elem, $number);
            foreach($newResult as $value){
                $result[] = $value;
            }
        }
        $key++;
    }

    return $result;
    echo '<br>';
}
print_r(getElement($arr, 1));

//function getItem(array $array, int $index) {
//    $i = 0;
//    foreach ($array as $value) {
//        if($i == $index) {
//            print_r($value);
//            echo '<br>';
//            echo '----------';
//            echo '<br>';
//        }
//        if(is_array($value)) {
//            getItem($value, $index);
//        }
//        $i++;
//    }
//}
//getItem($arr, 1);

//2. Создать функцию которая считает все буквы b в переданной строке, в случае если передается не строка функция должна возвращать false
function getLetterCount($string, $letter) {
    if(is_string($string)) {
        echo substr_count($string, $letter) . '<br>';
    } else {
        return false;
    }
}
getLetterCount('Создать функцию bb которая считает все буквы b в переданной строке', 'b');


//3. Создать функцию которая считает сумму значений всех элементов массива произвольной глубины
function getTotalSum(array $array=[]) {
    $totalSum = array_sum($array);

    foreach ($array as $value) {
        if(is_array($value)) {
            $totalSum += array_sum($value);
        }
    }
    echo $totalSum . '<br>';
}
getTotalSum($arr);


//4. Создать функцию которая определит сколько квадратов меньшего размера можно вписать в квадрат большего размера размер возвращать в float
function squaring($sqrFirst, $sqrSecond) {

    if ($sqrFirst < $sqrSecond) {
        $res = ($sqrSecond * $sqrSecond) / ($sqrFirst * $sqrFirst);
    } else {
        $res = ($sqrFirst * $sqrFirst) / ($sqrSecond * $sqrSecond);
    }

    return $res;
}
echo squaring(2, 9) . '<br>';

echo '<br>';
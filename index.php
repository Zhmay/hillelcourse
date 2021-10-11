<?php
$firstArr = [

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

function getSecondElement(array $array = []) {
    $i = 0;
    foreach ($array as $value) {
        if(is_array($value)) {
            getSecondElement($value);
        }

        if(1 == $value) {
            var_dump($value);
        }
        $i++;
    }
}

getSecondElement($firstArr);

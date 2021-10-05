<?php
    // Действия с числами
    echo (7 % 3) . '<br>';
    echo round((7 + 7.15)) . '<br>';
    echo sqrt(25) . '<br>';

    //Действия со строками

    //1.
    $string = 'Десять негритят пошли купаться в море';
    $fourth = explode(' ', $string);
    echo $fourth[3] . '<br>';
    //------------------------------------------------------------------

    //2.
    $lastSymbol = mb_substr($string, 0, 17);
    echo mb_substr($lastSymbol, -1) . '<br>';
    //------------------------------------------------------------------

    //3.
    echo mb_convert_case($string, MB_CASE_TITLE, 'UTF-8') . '<br>';
    //------------------------------------------------------------------

    //4.
    echo iconv_strlen($string) . '<br>';
    //------------------------------------------------------------------

    //Действия с логическими значениями

    //1.
    var_dump(true == 1);
    echo '<br>';
    //2.
    var_dump(false === 0);
    echo '<br>';
    //3.
    print_r((strlen('three') > strlen('три')) ? 'three длинна - ' . strlen('three') : 'три длинна - ' . strlen('три'));
    echo '<br>';

    //3.1 в этом случае англ слово длинее
    print_r((iconv_strlen('three') > iconv_strlen('три')) ? 'three длинна - ' . iconv_strlen('three') : 'три длинна - ' . iconv_strlen('три'));
    echo '<br>';
    //4.
    $firstValue = 125 * 13 + 7;
    $secondValue = 223 + 28 * 2;

    echo($firstValue > $secondValue ? 'первое больше - ' . $firstValue : 'второе больше - ' . $secondValue);

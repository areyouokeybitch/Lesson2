<?php

function sum($a,$b) {
    return 'Результат сложения='.($a+$b).'<br>';
}

function subtr($a,$b) {
    return 'Результат вычитания='.($a-$b).'<br>';
}

function div($a,$b) {
    if ($b==0) echo 'Ошибка деления на 0';
    return 'Результат деления='.$a/$b.'<br>';
}

function multi($a,$b) {
    return 'Результат умножения='.$a*$b.'<br>';
}

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case 'multi':
            echo multi($arg1, $arg2);
            break;
        case 'div':
            echo div($arg1, $arg2);
            break;
        case 'subtr':
            echo subtr($arg1, $arg2);
            break;
        case 'sum':
            echo sum($arg1, $arg2);
            break;
        default: echo 'Неверное название операции';
    }
    return Null;
}
echo mathOperation (10,0,'subtr');
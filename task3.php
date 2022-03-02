<?php

$a=10;
$b=2;

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

echo div($a,$b);
echo multi($a,$b);
echo subtr($a,$b);
echo sum($a,$b);
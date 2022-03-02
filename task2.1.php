<?php

function factorial ($a)
{
    if ($a==16) return NULL;
    echo $a.' ';
    factorial($a+1);
}

echo factorial($a=rand(0,15));

<?php

/*
Problem 1:
Given a list of integers, find the minimum of their absolute values. 
Note:
'Absolute values' means the non-negative value without regard to its sign. For example, the Absolute value of 123 is 123, and the Absolute value of -123 is also 123. 

Sample input 1:
10 12 15 189 22 2 34
Sample output 1: 
2

Sample input 2:
10 -12 34 12 -3 123
Sample output 2:
3
 */

function minNumber($value)
{
    $minValue = $value[0];

    for ($i = 0; $i < count($value); $i++) {
        if ($value[$i] < 0) {
            $value[$i] *= -1;
        }
        if ($minValue > $value[$i]) {
            $minValue = $value[$i];
        }
    }
    return $minValue;
}

$arrSample1 = [10, 12, 15, 189, 22, 2, 34]; 
// $minNumberFind = minNumber($arrSample1);
// echo $minNumberFind;

$arrSample2 = [10, -12, 34, 12, -3, 123];
$minNumberFind = minNumber($arrSample2);
echo $minNumberFind;

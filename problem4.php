<?php

/*

Problem 4:
Print the following pattern based on the given number n (can be any number). 
Sample input: 5 
Sample output: 
    *
   ***
  *****
 *******
********* 

*/


function pattern($num)
{

    for ($i = 1; $i <= $num; $i++) {
        for ($j = 1; $j <= $num - $i; $j++) {
            echo " ";
        }
        for ($x = 1; $x <= 2*$i-1; $x++) {
            echo "*";
        }
        echo "\n";
    }
}

pattern(5);

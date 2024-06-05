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
        for ($j = $i; $j <= $num-1; $j++) {
            echo " ";
        }
        for ($x = 1; $x <= $i; $x++) {
            echo "*";

            if($x > 1){
                echo "*";
            }
        }
        echo "\n";
    }
}

pattern(10);

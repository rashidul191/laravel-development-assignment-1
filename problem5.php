<?php

/*
Problem 5:
Given an integer n, find the sum of the digits of the integer.

Sample input 1:
62343
Sample output 1: 
18

Sample input 2:
1000
Sample output 2: 
1

*/


function sumDigits($number)
{

  $sum = 0;
  while ($number > 0) {
    $sum += $number % 10;

    $number = (int) $number / 10;
  }
  return $sum;
}

// echo sumDigits(62343);
echo sumDigits(1000);

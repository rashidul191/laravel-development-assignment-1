<?php

/* 
Problem 2:
Given a few paragraphs in a file, read the file and count how many words are there. 
For example, if there is a file with the following contents:

Nunc ex lorem, ullamcorper ut eleifend ac, pellentesque non dolor.  

You need to output: 10

Because there are 10 words. 
Note: There can be multiple paragraphs. You need to count all of the words from all of the paragraphs. 
You need to read the data from a file. 

*/

$otherFileTextData =  file_get_contents('simple.txt');


function countWorlds($paragraphs)
{
    // return str_word_count($paragraphs);


    $stringToArrays = explode(' ', $paragraphs);
    $worldsArray = [];
    $pattern = "#[^(\w|\d|\'|\"|\.|\!|\?|;|,|\\|\/|\-|:|\&|@)]+#";
    foreach ($stringToArrays as $stringToArray) {

        $onlyString =  trim(preg_replace($pattern, " ", $stringToArray));

        if ($onlyString !== "") {
            array_push($worldsArray, $onlyString);
        }
    }
    return count($worldsArray);
}

echo countWorlds($otherFileTextData);

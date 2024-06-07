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

// Solution 1
function countWorldsStr($paragraphs)
{
    return str_word_count($paragraphs);
}
// echo countWorldsStr($otherFileTextData);

// Solution 2
function countWorlds($linesParas)
{
    $wordCount = [];
    foreach ($linesParas as $linesPara) :
        $singleLine = trim($linesPara);
        if ($singleLine !== "") :
            $stringToArray = explode(" ", $singleLine);
            foreach ($stringToArray as $str) :
                $onlyWord = trim($str);

                if ($onlyWord !== '') :
                    array_push($wordCount, $onlyWord);
                endif;
            endforeach;
        endif;
    endforeach;
    return count($wordCount);
}

$otherFileTextData2 = fopen('simple.txt', "r");
$linesPara    = [];

if ($otherFileTextData2) {
    while (!feof($otherFileTextData2)) {
        $linesPara[] = fgets($otherFileTextData2);
    }
}
echo countWorlds($linesPara);

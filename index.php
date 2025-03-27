<?php
/*
Assuming english alphabet
*/
define('POINTS_TO_REACH',100);
define('VALUE_REFERENCE',ord("z"));
define('ENGLISH_ALPHABET_LENGTH',25);

#$word = readline();
$wordPoints = 50;
echo calculateCharPoints(ord("m"));

function calculateWordPoints(string $word): int {
    $points = 0;
    $word = strtolower($word);
    for($i = 0; $i < count($word); ++$i) {
        $points += calculateCharPoints($word[$i]);
    }
    return $points;
}


function calculateCharPoints(string $char): int {
    return ($char - ord('a'));
}


?>
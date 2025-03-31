<?php
/*
Assuming english alphabet
*/
define('POINTS_TO_REACH',100);
define('VALUE_REFERENCE',ord("Z"));
define('ENGLISH_ALPHABET_LENGTH',26);

//$word = readline();
$words = ["ketchup","Azofaifa","lastre","pericardio","pericardiob"];
foreach($words as $word) {
    echo calculateWordPoints($word).PHP_EOL;
}

function calculateWordPoints(string $word): int {
    $points = 0;
    $word = strtoupper($word);
    for($i = 0; $i < strlen($word); ++$i) {
        $points += calculateCharPoints($word[$i]);
    }
    return $points;
}


function calculateCharPoints(string $char): int {
    return ENGLISH_ALPHABET_LENGTH - (VALUE_REFERENCE - ord($char));
}


?>
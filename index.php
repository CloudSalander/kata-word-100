<?php
/*
Assuming english alphabet
*/
define('POINTS_TO_REACH',100);
define('VALUE_REFERENCE',ord("Z"));
define('ENGLISH_ALPHABET_LENGTH',26);

#$word = readline();
$wordPoints = 50;
$test_chars = ["A","B","Z","H"];
foreach($test_chars as $char) {
    echo calculateCharPoints($char).PHP_EOL;;
}
/*
function calculateWordPoints(string $word): int {
    $points = 0;
    $word = strtolower($word);
    for($i = 0; $i < count($word); ++$i) {
        $points += calculateCharPoints($word[$i]);
    }
    return $points;
}
*/

function calculateCharPoints(string $char): int {
    return ENGLISH_ALPHABET_LENGTH - (VALUE_REFERENCE - ord($char));
}


?>
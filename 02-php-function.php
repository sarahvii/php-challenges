<?php 
function replaceVowelsWithX($str) {
    
    $vowels = array("a", "e", "i", "o", "u");

    echo str_replace($vowels, "x", $str);
}

replaceVowelsWithX("this is a string with all vowels replaced by the letter x");

?>
<?php

$age = 73;

if ($age < 0) {
    echo "Invalid age";
} elseif ($age < 13) {
    echo "You are a child";
} elseif ($age < 20) {
    echo "You are a teenager";
} elseif ($age < 65) {
    echo "You are an adult";
} else {
    echo "You are a senior citizen";
}

?>
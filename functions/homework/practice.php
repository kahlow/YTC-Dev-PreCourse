<?php

/*
    Extend the two functions below to check for non-numeric values and return and error message instead.
*/

function addTwoNumbers ($num1, $num2) {
    return $num1 + $num2;
}

function subtractTwoNumbers($num1, $num2) {
    return $num1 - $num2;
}

echo addTwoNumbers(10, "Cats");
echo subtractTwoNumbers(10, "Cats");

?>
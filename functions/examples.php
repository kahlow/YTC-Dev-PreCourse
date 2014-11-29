<!DOCTYPE html>

<h1>Fucntions</h1>

<?php

// User defined function
function isGreaterThan($num1, $num2)
{
    if ($num1 > $num2) {
        return True;
    } else {
        return False;
    }
}

$numberA = 10;
$numberB = 9000;

if(isGreaterThan($numberA, $numberB)){
    echo $numberA . " is greater than " . $numberB . "<br/>";
} else {
    echo $numberB . " is greater than " . $numberA . "<br/>";
}

// built in function
echo rand() . "<br/>";

// Recursion
recursion(10);

function recursion($a)
{
    if ($a <= 20) {
        echo $a . "<br/>";
        recursion($a + 1);
    }
}

?>
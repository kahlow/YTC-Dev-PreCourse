<!DOCTYPE html>

<h1>Conditional Statements</h1>

<?php
/*
    In this program let's take a look at conditional statements and everything fun you can do with them!
*/

// First I want to declare a couple of variables.
$thisIsTrue = True;
$thisIsFalse = False;

// Let's test out true condition
if ($thisIsTrue)
    echo "TRUE!!";
else
    echo "FALSE?";


// Line break
echo "<br/>";

// Let's test out false condition (the else)
if ($thisIsFalse)
    echo "TRUE!!";
else
    echo "FALSE!";

echo "<br/>";

// What about else if
if (False)
    echo "Here?...Nope!";
else if (True)
    echo "Else-If is true!";
else
    echo "else :(";

echo "<br/>";

$num1 = 10;
$num2 = 30;

// checking if one number is less than another
if ($num1 < $num2)
    echo $num1." is less than ".$num2;
else
    echo $num1." is greater than ".$num2;

echo "<br/>";

// let's reverse that
if ($num1 > $num2)
    echo $num1." is greater than ".$num2;
else
    echo $num1." is less than ".$num2;

echo "<br/>";

// It's time for a switch statement
$food = "hotpockets";

switch ($food) {
    case "apple":
        echo "Keep that doctor away!";
        break;
    case "cookie":
        echo "Now we're talking.";
        break;
    case "hotpockets":
        echo "Take me to the hospital.";
        break;
}

?>
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
?>
<br/>
<?php

// Let's test out false condition
if ($thisIsFalse)
    echo "TRUE!!";
else
    echo "FALSE!";

?>
<br/>
<?php

$num1 = 10;
$num2 = 30;

// checking if one number is less than another
if ($num1 < $num2)
    echo $num1." is less than ".$num2;
else
    echo $num1." is greater than ".$num2;

?>
<br/>
<?php

// let's reverse that
if ($num1 > $num2)
    echo $num1." is greater than ".$num2;
else
    echo $num1." is less than ".$num2;

?>
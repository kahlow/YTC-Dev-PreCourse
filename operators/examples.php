<!DOCTYPE html>

<h1>Operators</h1>
<?php
    
    $num1 = 10;
    $num2 = 5;

    //<br/> is html for newline. I'm using it to keep the output on seperate lines
    echo "<h2>Arithmetic Operator Examples</h2>";
    echo $num1 + $num2 . "<br/>";
    echo $num1 - $num2 . "<br/>";
    echo $num1 * $num2 . "<br/>";
    echo $num1 / $num2 . "<br/>";
    echo $num1 % $num2 . "<br/>";
    echo $num1 ** $num2 . "<br/>";

    // var_dump displays information about a variable. I'm using it to show the expression values
    echo "<h2>Relational Operator Examples</h2>";
    echo var_dump($num1 == $num2) . "<br/>";
    echo var_dump($num1 != $num2) . "<br/>";
    echo var_dump($num1 < $num2) . "<br/>";
    echo var_dump($num1 > $num2) . "<br/>";
    echo var_dump($num1 <= $num2) . "<br/>";
    echo var_dump($num1 >= $num2) . "<br/>";

    echo "<h2>Logic Operator Examples</h2>";
    echo var_dump(true and true) . "<br/>";
    echo var_dump(true and false) . "<br/>";
    echo var_dump(false and true) . "<br/>";

    echo var_dump(true or true) . "<br/>";
    echo var_dump(true or false) . "<br/>";
    echo var_dump(false or false) . "<br/>";
?>
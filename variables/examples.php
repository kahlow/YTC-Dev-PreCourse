<?php
/*
Let's walk through the world's worst calculator program. Let's walk through this program line by line and see what's going on.
*/

// First let's declare a variable. 
// There are a couple of thoughts that should run through your head before you create a variable:
// 1. What is it used for?
// 2. What will be its type? (integer/string/etc..)
// 3. Scope?
// 4. What should I name it?

# This variable will be used to store a number to be used in finding the sum of two numbers.
# Let's name this variable 'num1' because it is one of two numbers
$num1 = 5;

// Let's create a second number to be used in this summation.
$num2 = 3;

// Let's create a variable to accept the sum of num1 and num2
$sum = $num1 + $num2;

// Let's print that to the screen
echo "$num1 + $num2 = $sum";

?>
<!DOCTYPE html>

<h1>Loops</h1>

<?php

// While loop
$i = 1;
while ($i <= 10) {
    echo $i++ . "<br/>"; // (post-increment)
}

echo "<br/>";

// Do-While (This will run once)
$i = 0;
do {
    echo $i . "<br/>";
} while ($i > 0); //notice the ending ;. That's need for do-while loops

echo "<br/>";

// For Loop
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br/>";
}

echo "<br/>";

// For-Each
$arr = array("one", "two", "three");

foreach ($arr as $value) {
    echo $value . "<br />";
}

?>
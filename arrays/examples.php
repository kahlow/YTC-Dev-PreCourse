<!DOCTYPE html>

<h1>Arrays</h1>

<?php

// generic array
$array = array("Too", "Legit", "To", "Quit");
echo var_dump($array) . "<br/>";
echo $array[0] . " " . $array[1] . "<br/>";

for($i = 0; $i <= 3; $i++){
    echo $array[$i] . " ";
}

echo "<br/>";

// PHP also has key value pairs as arrays that you can use
$array = array(
    "happy" => "birthday",
    "merry" => "christmas",
);

echo var_dump($array) . "<br/>";

echo $array["happy"] . "<br/>"

?>
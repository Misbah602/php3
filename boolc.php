<?php
echo "<h2>Comparison Operators and Datatype Check</h2>";

// 1st set: string variables
$a = 'raj';
$b = "raj";
echo "a: $a, b: $b<br>";
echo "a == b: " . var_export($a == $b, true) . "<br>";
echo "a === b: " . var_export($a === $b, true) . "<br>";
echo "Data type of a: " . gettype($a) . "<br>";
echo "Data type of b: " . gettype($b) . "<br><br>";

// 2nd set: numeric variables
$a = 90;
$b = 34;
echo "a: $a, b: $b<br>";
echo "a > b: " . var_export($a > $b, true) . "<br>";
echo "a < b: " . var_export($a < $b, true) . "<br>";
echo "a >= b: " . var_export($a >= $b, true) . "<br>";
echo "a <= b: " . var_export($a <= $b, true) . "<br>";
echo "a != b: " . var_export($a != $b, true) . "<br>";
echo "a === b: " . var_export($a === $b, true) . "<br>";
echo "Data type of a: " . gettype($a) . "<br>";
echo "Data type of b: " . gettype($b) . "<br><br>";

echo "<h2>Logical Operators</h2>";

// 1st logical check
$a = 14;
$b = 40;
echo "a = $a, b = $b<br>";
echo "a < 20 && b > 30: " . var_export($a < 20 && $b > 30, true) . "<br>";
echo "a > 10 || b < 50: " . var_export($a > 10 || $b < 50, true) . "<br><br>";

// 2nd logical check
$a = 2;
$b = 70;
echo "a = $a, b = $b<br>";
echo "a < 5 && b > 60: " . var_export($a < 5 && $b > 60, true) . "<br>";
echo "a > 5 || b > 100: " . var_export($a > 5 || $b > 100, true) . "<br>";
?>
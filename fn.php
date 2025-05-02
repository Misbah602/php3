<?php
// Global variable
$value = 90;

// Function to add 10 to the global variable
function add() {
    global $value;
    $value += 10;
    echo "Value after addition: " . $value . "<br>";
}

// Function to subtract 50 from the global variable
function sub() {
    global $value;
    $value -= 50;
    echo "Value after subtraction: " . $value . "<br>";
}

// Calling the functions
add(); // Output: Value after addition: 100
sub(); // Output: Value after subtraction: 50
?>

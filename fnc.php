<?php
// Function to multiply two parameters and display the result
function mul($a, $b) {
    $result = $a * $b;
    echo "Multiplication of $a and $b is: $result <br>";
}

// Call the function inside a for loop (5 iterations) with different parameters
for ($i = 1; $i <= 5; $i++) {
    mul($i, $i + 2); // Passing different values each time
}
?>

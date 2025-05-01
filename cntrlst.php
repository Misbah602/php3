<?php
$mark1 = 28;
$mark2 = 67;
$mark3 = 95;

// Function to check performance
function checkPerformance($mark) {
    if ($mark > 90) {
        echo "$mark: Good<br>";
    } elseif ($mark > 35 && $mark < 70) {
        echo "$mark: Average<br>";
    } elseif ($mark < 35) {
        echo "$mark: Fail<br>";
    } else {
        echo "$mark: No specific category<br>";
    }
}

// Check for each mark
checkPerformance($mark1);
checkPerformance($mark2);
checkPerformance($mark3);
?>

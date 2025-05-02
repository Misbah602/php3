<?php
include 'details.php';       // Using include
require 'my_name.php';       // Using require
include_once 'details.php';  // Using include_once
require_once 'my_name.php';  // Using require_once

echo "<h3>People Details:</h3>";
foreach ($people as $person) {
    echo "Name: " . $person["name"] . "<br>";
    echo "Age: " . $person["age"] . "<br>";
    echo "DOB: " . $person["DOB"] . "<br><br>";
}
?>

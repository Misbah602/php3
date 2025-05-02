<?php
// Database se connect ho rahe hain
$conn = new mysqli("localhost", "root", "", "task");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Table se data nikaal rahe hain
$sql = "SELECT country_name, country_capital, famous_place FROM country";
$result = $conn->query($sql);

$countries = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $countries[] = $row;
    }
}

// Foreach loop se data display kar rahe hain
echo "<h3>Country Details:</h3>";
foreach ($countries as $country) {
    echo "Country: " . $country['country_name'] . "<br>";
    echo "Capital: " . $country['country_capital'] . "<br>";
    echo "Famous Place: " . $country['famous_place'] . "<br><br>";
}

$conn->close();
?>

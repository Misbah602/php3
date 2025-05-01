<?php
// Step 1: Create a multidimensional associative array
$students = [
    ["name" => "mehek", "marks" => 85],
    ["name" => "sadiqa", "marks" => 67],
    ["name" => "sangeeta", "marks" => 92]
];

// Step 2: Display using foreach loop
echo "Using foreach loop:<br>";
foreach ($students as $student) {
    echo "Name: " . $student["name"] . ", Marks: " . $student["marks"] . "<br>";
}

// Display using for loop
echo "<br>Using for loop:<br>";
for ($i = 0; $i < count($students); $i++) {
    echo "Name: " . $students[$i]["name"] . ", Marks: " . $students[$i]["marks"] . "<br>";
}

// Display using while loop
echo "<br>Using while loop:<br>";
$i = 0;
while ($i < count($students)) {
    echo "Name: " . $students[$i]["name"] . ", Marks: " . $students[$i]["marks"] . "<br>";
    $i++;
}
?>

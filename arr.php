<?php
// Indexed array
$indexed = [225, "Dreams", "Glass", 30, 25, 1, "Globe"];

// Associative array
$assoc = [
    '0' => 'Couch',
    'Ice' => 'India',
    '6' => 'Box',
    'Trip' => 'Range'
];

// Print both arrays
echo "Indexed Array:<br>";
print_r($indexed);
echo "<br><br>Associative Array:<br>";
print_r($assoc);

// Combine both arrays
$combined = $indexed + $assoc;
echo "<br><br>Combined Array:<br>";
print_r($combined);

// Get 3rd value from indexed array (index 2)
echo "<br><br>3rd value from Indexed Array: " . $indexed[2];

// Get value for key 'Ice' from associative array
echo "<br>Value for key 'Ice': " . $assoc['Ice'];
?>

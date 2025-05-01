<?php
// Given string
$text = "Hello World! Welcome to PHP string functions. ";

// 1. Get the length of the string
echo "Length: " . strlen($text) . "<br>";

// 2. Find the position of the first occurrence of "Hello"
echo "Position of 'Hello': " . strpos($text, "Hello") . "<br>";

// 3. Replace "World" with "Universe"
$replacedText = str_replace("World", "Universe", $text);
echo "After Replacement: " . $replacedText . "<br>";

// 4. Convert to lowercase
echo "Lowercase: " . strtolower($text) . "<br>";

// 5. Convert to uppercase
echo "Uppercase: " . strtoupper($text) . "<br>";

// 6. Capitalize the first letter of each word
echo "Ucwords: " . ucwords($text) . "<br>";

// 7. Capitalize the first letter of the string
echo "Ucfirst: " . ucfirst($text) . "<br>";

// 8. Trim whitespace from beginning and end
echo "Trimmed: '" . trim($text) . "'<br>";
?>

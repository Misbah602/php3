<?php
// Multidimensional Indexed Array
$Sdetails = [
    ["john", "new york", 25, "male"]
];

// Add another array
$Sdetails[] = ["ash", "tokyo", 20, "male"];

// Delete first array item (0th index)
unset($Sdetails[0]);

// Display only cities
echo "Cities:<br>";
foreach ($Sdetails as $person) {
    echo $person[1] . "<br>";
}

// Display entire array from the last index
echo "<br>Last Index Details:<br>";
print_r(end($Sdetails));

// Multidimensional Associative Array
$Sproduct_details = [
    [
        "product_name" => "laptop",
        "price" => 3000,
        "date" => "05-01-2024",
        "address" => "delhi"
    ]
];

// Add another product
$Sproduct_details[] = [
    "product_name" => "tv",
    "price" => 2000,
    "date" => "06-01-2024",
    "address" => "hubli"
];

// Delete first array item
unset($Sproduct_details[0]);

// Display product name of date 06-01-2024
echo "<br><br>Product on 06-01-2024:<br>";
foreach ($Sproduct_details as $product) {
    if ($product["date"] == "06-01-2024") {
        echo $product["product_name"];
    }
}

// Display last array list
echo "<br><br>Last Product Details:<br>";
print_r(end($Sproduct_details));
?>

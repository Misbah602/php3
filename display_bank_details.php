<?php
// Start the session
session_start();

// Check if the bank details are stored in the session
if (isset($_SESSION['bank_name'])) {
    echo "<h3>Bank Details:</h3>";
    echo "Bank Name: " . $_SESSION['bank_name'] . "<br>";
    echo "Account Number: " . $_SESSION['account_number'] . "<br>";
    echo "Account Type: " . $_SESSION['account_type'] . "<br>";
    echo "Balance: $" . $_SESSION['balance'] . "<br>";
    echo "Account Owner: " . $_SESSION['owner_name'] . "<br>";
} else {
    echo "No bank details found in the session.";
}
?>

<?php
// Start the session
session_start();

// Store bank details in session variables
$_SESSION['bank_name'] = 'ABC Bank';
$_SESSION['account_number'] = '1234567890';
$_SESSION['account_type'] = 'Checking';
$_SESSION['balance'] = 1500.75;
$_SESSION['owner_name'] = 'John Doe';

// Display a message that the details have been stored
echo "Bank details have been stored in the session.<br>";
echo "<a href='display_bank_details.php'>Click here to view the details</a>";
?>

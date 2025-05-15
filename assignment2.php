<?php
// Prompt user for input
$input = readline("Enter a number to check if it is divisible by 3: ");

// Process input using if conditions
$number = (int)$input; // Cast to integer for divisibility check
if ($number % 3 == 0) {
    echo "$number is divisible by 3.\n";
}
if ($number % 3 != 0) {
    echo "$number is not divisible by 3.\n";
}
?>
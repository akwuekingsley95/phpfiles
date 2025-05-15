<?php

// Function to check if number is even or odd
function checkEvenOdd($number) {
    if (!is_numeric($number)) {
        return "Please enter a valid number.";
    }
    
    $number = (int)$number;
    return ($number % 2 == 0) ? "$number is even." : "$number is odd.";
}

// Main program
while (true) {
    // Get input using readline
    $input = readline("Enter a number (or 'q' to quit): ");
    
    // Check if user wants to quit
    if (strtolower($input) === 'q') {
        echo "Program terminated.\n";
        break;
    }
    
    // Process the input
    echo checkEvenOdd($input) . "\n";
}
?>
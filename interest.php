<?php
// Interest calculation program
// This program calculates the simple interest based on user input for principal, rate, and time.
// It also provides an option to calculate compound interest.
// The program uses functions to encapsulate the logic for calculating both simple and compound interest.

// $P=5000; // Principal amount
// $interest= 10; // Rate of interest
// $rate= 2; // Time in years
// $time= 2; // Time in years
$p = readline("input principal:");
$interest = readline("input interest: ");  // Rate of interest
$time = readline("input time: ");  // Time in years
echo "Principal amount is: $p\n";
echo "Rate of interest is: $interest\n";
echo "Time is: $time\n";
echo "compound interest or simple interest? (c/s): ";
// Function to calculate simple interest
if ($p== 0) {
    echo "Principal amount cannot be zero.\n";
} else {
    function simpleInterest($p, $interest, $time) {
        return ($p * $interest * $time) / 100;
    }
    $simpleInterest = simpleInterest($p, $interest, $time);
    echo "Simple Interest is: $simpleInterest\n";
}
// Function to calculate compound interest
function compoundInterest($p, $interest, $time) {
    return $p * pow((1 + $interest / 100), $time) - $p;
}
echo "Do you want to calculate compound interest? (yes/no): ";
$compoundChoice = readline();
echo "Compound interest is: ";
if (strtolower($compoundChoice) == "yes") {
    $compoundInterest = compoundInterest($p, $interest, $time);
    echo "Compound Interest is: $compoundInterest\n";
} else {
    echo "You chose not to calculate compound interest.\n";
}


?>
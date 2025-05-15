<?php

use CodeLts\U2F\U2FServer\Registration;
// This file handles the registration of Namess by collecting their details and storing them in a database or a file using index array.
// It also includes validation for the inputs to ensure that they are in the correct format and meet the required criteria.
// The registration process is done through a form that collects the Names's name, Emails, Phones number, and Passwords.

$Names = ["John Peter", "MAry", "Jane Doe", "Mark Smith", "Alice Johnson", "Grace Allen", "Tom Brown", "Emma Davis", "Liam Wilson", "Olivia Taylor"];
$Emailss = ["john@gmail.com", "mary@gmail.com", "jane@gmail.com", "mark@gmail.com,","alice@gmail.com", "grace@gmail.com", "tom@gmail.com", "emma@gmail.com", "liam@gmail.com", "oliva@gmail.com"];
$Phoness = ["1234567890","234567","34567","45678","456789","567890","678901","789012","890123","901234"];
$Passwordss = ["Passwords1", "Passwords2", "Passwords3", "Passwords4", "Passwords5", "Passwords6", "Passwords7", "Passwords8", "Passwords9", "Passwords10"];
$Names[0] = "John Peter";
$Names[1] = "MAry";
$Names[2] = "Jane Doe";
$Names[3] = "Mark Smith";
$Names[4] = "Alice Johnson";
$Names[5] = "Grace Allen";
$Names[6] = "Tom Brown";
$Names[7] = "Emma Davis";
$Names[8] = "Liam Wilson";
$Names[9] = "Olivia Taylor";
$Emails[0] ="john@gmail.com";
$Emails[1] = "mary@gmail";
$Emails[2] = "jane@gmail";
$Emails[3] = "mark@gmail";
$Emails[4] = "alice@gmail";
$Emails[5] = "grace@gmail";
$Emails[6] = "tom@gmail";
$Emails[7] = "emma@gmail";
$Emails[8] = "liam@gmail";
$Emails[9] = "oliva@gmail";
$Phones[0] = "1234567890";
$Phones[1] = "2345678901";
$Phones[2] = "3456789012";
$Phones[3] = "4567890123";
$Phones[4] = "5678901234";
$Phones[5] = "6789012345";
$Phones[6] = "7890123456";
$Phones[7] = "8901234567";
$Phones[8] = "9012345678";
$Phones[9] = "0123456789";
$Passwords[0] = "Password1";
$Passwords[1] = "Password2";
$Passwords[2] = "Password3";
$Passwords[3] = "Password4";
$Passwords[4] = "Password5";
$Passwords[5] = "Password6";
$Passwords[6] = "Password7";
$Passwords[7] = "Password8";
$Passwords[8] = "Password9";
$Passwords[9] = "Password10";
$Student_Name = readline("Enter your name: ");
$Student_Password = readline("Enter your Password: ");
$Student_Phone = readline("Enter your Phones number: ");
$Student_Email = readline("Enter your Emails: ");
//Delete
//unset($Name[0]);
//Read

//update($Name[0]=");
if ($Student_Name !== $Names ) {
    echo "Invalid name. only the registered user  is allowed.\n";
} else {
    echo "==========================================================\n";
    echo "Your name is $Student_Name.\n";
}
if ($Student_Email  !== $Emails[0]) {
    
    echo "Please enter a valid Emails address.\n";
} else {
    echo "==========================================================\n";
    echo "Your Emails is $Student_Email.\n";
}
if ($Student_Password !== $Passwords[0]) {
    echo "==========================================================\n";
    echo "Please enter a valid Passwords.\n";
} else {
    echo "==========================================================\n";
    echo "Your Passwords is $Student_Password.\n";
}
if ($Student_Phone !== $Phones[0]) {
    echo "Please enter a valid Phones number\n";
} else {
    echo "==========================================================\n";
    echo "Your Phones number is $Student_Phone.\n";
}

?>
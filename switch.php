<?php
//switch statememnt
//multi dimension array
$gender = readline("Enter your Gender: ");
$age = readline("Enter your age: ");
switch ($gender && $age) {
    case $age >= 18 && $gender ==  "M":
        echo "Good Morning sir .\n";
        break;
    case $age < 18 && $gender ==  "M":
        echo "Good Morning .\n";
        break;
    case $age >= 18 && $gender ==  "F":
        echo "Good Morning.\n";
        break;
    case $age < 18 && $gender == "F":
            echo "Good Morning.\n";
            break;
    default:
        echo "Invalid input.\n";
        break;




        



}




?>
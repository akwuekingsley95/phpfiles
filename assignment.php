<?php

// Array to store up to 10 users
$users = [];
$userCount = 0;

// Main program loop
do {
    // Display menu
    echo "\nRegistration System Menu:\n";
    echo "1. Register a new user\n";
    echo "2. Display all users\n";
    echo "3. Exit\n";
    $choice = readline("Enter your choice (1-3): ");

    // Handle menu options using if statements
    if ($choice == 1) {
        if ($userCount >= 10) {
            echo "Registration limit reached (10 users)!\n";
        } 
        else {
            echo "\n Enter details for User " . ($userCount + 1) . ":\n";
            $name = readline("Name: ");
            $email = readline("Email: ");
            $password = readline("Password: ");

            // Store user data
            $users[] = [
                'name' => $name,
                'email' => $email,
                'password' => $password
            ];

            $userCount++;
            echo "User registered successfully!\n";
        }
    } else if ($choice == 2) {
        if ($userCount == 0) {
            echo "\nNo users registered yet!\n";
        } else {
            echo "\nRegistered Users:\n";
            foreach ($users as $index => $user) {
                echo "User " . ($index + 1) . ":\n";
                echo "Name: " . $user['name'] . "\n";
                echo "Email: " . $user['email'] . "\n";
                echo "Password: " . $user['password'] . "\n\n";
            }
        }
    } else if ($choice == 3) {
        echo "\nExiting program. Goodbye!\n";
    } else {
        echo "\nInvalid choice! Please enter 1, 2, or 3.\n";
    }
} while ($choice != 3);

?>
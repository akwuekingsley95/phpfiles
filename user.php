<?php
// Initialize an empty array to store user data
$users = [];

// Main program
echo "1. Register New User\n";
echo "2. Display All Users\n";
echo "3. Exit\n";
$choice = readline("Enter your choice (1-3): ");

if ($choice == '1') {
    // Register new user
    echo "User Registration\n";
    
    // Collect user details using readline
    $fullName = readline("Enter Full Name: ");
    $username = readline("Enter Username: ");
    $phone = readline("Enter Phone Number: ");
    $email = readline("Enter Email: ");
    $gender = strtolower(readline("Enter Gender (male/female): "));
    $password = readline("Enter Password: ");
    
    // Store user data in array
    $user = [
        'fullName' => $fullName,
        'username' => $username,
        'phone' => $phone,
        'email' => $email,
        'gender' => $gender,
        'password' => $password
    ];
    
    // Add user to users array
    $users[] = $user;
    
    // Welcome message based on gender
    if ($gender === 'male') {
        echo "Good morning, Sir! Welcome, $fullName!\n";
    } elseif ($gender === 'female') {
        echo "Good morning, Ma'am! Welcome, $fullName!\n";
    } else {
        echo "Good morning! Welcome, $fullName!\n";
    }
    
    // Display all users after registration
    if (empty($users)) {
        echo "No users registered yet.\n";
    } else {
        echo "\nRegistered Users:\n";
        foreach ($users as $index => $user) {
            echo "User " . ($index + 1) . ":\n";
            echo "Full Name: " . $user['fullName'] . "\n";
            echo "Username: " . $user['username'] . "\n";
            echo "Phone: " . $user['phone'] . "\n";
            echo "Email: " . $user['email'] . "\n";
            echo "Gender: " . $user['gender'] . "\n";
            echo "Password: " . $user['password'] . "\n\n";
        }
    }
} elseif ($choice == '2') {
    // Display all users
    if (empty($users)) {
        echo "No users registered yet.\n";
    } else {
        echo "\nRegistered Users:\n";
        foreach ($users as $index => $user) {
            echo "User " . ($index + 1) . ":\n";
            echo "Full Name: " . $user['fullName'] . "\n";
            echo "Username: " . $user['username'] . "\n";
            echo "Phone: " . $user['phone'] . "\n";
            echo "Email: " . $user['email'] . "\n";
            echo "Gender: " . $user['gender'] . "\n";
            echo "Password: " . $user['password'] . "\n\n";
        }
    }
} elseif ($choice == '3') {
    // Exit program
    echo "Exiting program. Goodbye!\n";
} else {
    // Invalid choice
    echo "Invalid choice. Please run the program again.\n";
}
?>
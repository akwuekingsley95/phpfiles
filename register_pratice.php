<?php
// Initialize an empty indexed array to store exactly 10 users
$users = [];
$maxUsers = 10;

// Counter to track registered users
$count = 0;

// Prompt for user 1
if ($count < $maxUsers) {
    echo "=== User Registration Form (User " . ($count + 1) . ") ===\n";
    $name = readline("Enter your name: ");
    $email = readline("Enter your email: ");
    $age = readline("Enter your age: ");
    
    if (empty($name)) {
        echo "Error: Name is required.\n";
    }
    if (empty($email)) {
        echo "Error: Email is required.\n";
    }
    if (!is_numeric($age)) {
        echo "Error: Age must be a number.\n";
    }
    if ($age < 18) {
        echo "Error: Age must be greater than or equal to 18.\n";
    }
    if (!empty($name) && !empty($email) && is_numeric($age) && $age >= 18) {
        $users[] = ['name' => $name, 'email' => $email, 'age' => (int)$age];
        echo "Registration successful for User " . ($count + 1) . "!\n";
        $count++;
    }
}

// Prompt for user 2
if ($count < $maxUsers) {
    echo "=== User Registration Form (User " . ($count + 1) . ") ===\n";
    $name = readline("Enter your name: ");
    $email = readline("Enter your email: ");
    $age = readline("Enter your age: ");
    
    if (empty($name)) {
        echo "Error: Name is required.\n";
    }
    if (empty($email)) {
        echo "Error: Email is required.\n";
    }
    if (!is_numeric($age)) {
        echo "Error: Age must be a number.\n";
    }
    if ($age < 18) {
        echo "Error: Age must be greater than or equal to 18.\n";
    }
    if (!empty($name) && !empty($email) && is_numeric($age) && $age >= 18) {
        $users[] = ['name' => $name, 'email' => $email, 'age' => (int)$age];
        echo "Registration successful for User " . ($count + 1) . "!\n";
        $count++;
    }
}

// Prompt for user 3
if ($count < $maxUsers) {
    echo "=== User Registration Form (User " . ($count + 1) . ") ===\n";
    $name = readline("Enter your name: ");
    $email = readline("Enter your email: ");
    $age = readline("Enter your age: ");
    
    if (empty($name)) {
        echo "Error: Name is required.\n";
    }
    if (empty($email)) {
        echo "Error: Email is required.\n";
    }
    if (!is_numeric($age)) {
        echo "Error: Age must be a number.\n";
    }
    if ($age < 18) {
        echo "Error: Age must be greater than or equal to 18.\n";
    }
    if (!empty($name) && !empty($email) && is_numeric($age) && $age >= 18) {
        $users[] = ['name' => $name, 'email' => $email, 'age' => (int)$age];
        echo "Registration successful for User " . ($count + 1) . "!\n";
        $count++;
    }
}

// Prompt for user 4
if ($count < $maxUsers) {
    echo "=== User Registration Form (User " . ($count + 1) . ") ===\n";
    $name = readline("Enter your name: ");
    $email = readline("Enter your email: ");
    $age = readline("Enter your age: ");
    
    if (empty($name)) {
        echo "Error: Name is required.\n";
    }
    if (empty($email)) {
        echo "Error: Email is required.\n";
    }
    if (!is_numeric($age)) {
        echo "Error: Age must be a number.\n";
    }
    if ($age < 18) {
        echo "Error: Age must be greater than or equal to 18.\n";
    }
    if (!empty($name) && !empty($email) && is_numeric($age) && $age >= 18) {
        $users[] = ['name' => $name, 'email' => $email, 'age' => (int)$age];
        echo "Registration successful for User " . ($count + 1) . "!\n";
        $count++;
    }
}

// Prompt for user 5
if ($count < $maxUsers) {
    echo "=== User Registration Form (User " . ($count + 1) . ") ===\n";
    $name = readline("Enter your name: ");
    $email = readline("Enter your email: ");
    $age = readline("Enter your age: ");
    
    if (empty($name)) {
        echo "Error: Name is required.\n";
    }
    if (empty($email)) {
        echo "Error: Email is required.\n";
    }
    if (!is_numeric($age)) {
        echo "Error: Age must be a number.\n";
    }
    if ($age < 18) {
        echo "Error: Age must be greater than or equal to 18.\n";
    }
    if (!empty($name) && !empty($email) && is_numeric($age) && $age >= 18) {
        $users[] = ['name' => $name, 'email' => $email, 'age' => (int)$age];
        echo "Registration successful for User " . ($count + 1) . "!\n";
        $count++;
    }
}

// Prompt for user 6
if ($count < $maxUsers) {
    echo "=== User Registration Form (User " . ($count + 1) . ") ===\n";
    $name = readline("Enter your name: ");
    $email = readline("Enter your email: ");
    $age = readline("Enter your age: ");
    
    if (empty($name)) {
        echo "Error: Name is required.\n";
    }
    if (empty($email)) {
        echo "Error: Email is required.\n";
    }
    if (!is_numeric($age)) {
        echo "Error: Age must be a number.\n";
    }
    if ($age < 18) {
        echo "Error: Age must be greater than or equal to 18.\n";
    }
    if (!empty($name) && !empty($email) && is_numeric($age) && $age >= 18) {
        $users[] = ['name' => $name, 'email' => $email, 'age' => (int)$age];
        echo "Registration successful for User " . ($count + 1) . "!\n";
        $count++;
    }
}

// Prompt for user 7
if ($count < $maxUsers) {
    echo "=== User Registration Form (User " . ($count + 1) . ") ===\n";
    $name = readline("Enter your name: ");
    $email = readline("Enter your email: ");
    $age = readline("Enter your age: ");
    
    if (empty($name)) {
        echo "Error: Name is required.\n";
    }
    if (empty($email)) {
        echo "Error: Email is required.\n";
    }
    if (!is_numeric($age)) {
        echo "Error: Age must be a number.\n";
    }
    if ($age < 18) {
        echo "Error: Age must be greater than or equal to 18.\n";
    }
    if (!empty($name) && !empty($email) && is_numeric($age) && $age >= 18) {
        $users[] = ['name' => $name, 'email' => $email, 'age' => (int)$age];
        echo "Registration successful for User " . ($count + 1) . "!\n";
        $count++;
    }
}

// Prompt for user 8
if ($count < $maxUsers) {
    echo "=== User Registration Form (User " . ($count + 1) . ") ===\n";
    $name = readline("Enter your name: ");
    $email = readline("Enter your email: ");
    $age = readline("Enter your age: ");
    
    if (empty($name)) {
        echo "Error: Name is required.\n";
    }
    if (empty($email)) {
        echo "Error: Email is required.\n";
    }
    if (!is_numeric($age)) {
        echo "Error: Age must be a number.\n";
    }
    if ($age < 18) {
        echo "Error: Age must be greater than or equal to 18.\n";
    }
    if (!empty($name) && !empty($email) && is_numeric($age) && $age >= 18) {
        $users[] = ['name' => $name, 'email' => $email, 'age' => (int)$age];
        echo "Registration successful for User " . ($count + 1) . "!\n";
        $count++;
    }
}

// Prompt for user 9
if ($count < $maxUsers) {
    echo "=== User Registration Form (User " . ($count + 1) . ") ===\n";
    $name = readline("Enter your name: ");
    $email = readline("Enter your email: ");
    $age = readline("Enter your age: ");
    
    if (empty($name)) {
        echo "Error: Name is required.\n";
    }
    if (empty($email)) {
        echo "Error: Email is required.\n";
    }
    if (!is_numeric($age)) {
        echo "Error: Age must be a number.\n";
    }
    if ($age < 18) {
        echo "Error: Age must be greater than or equal to 18.\n";
    }
    if (!empty($name) && !empty($email) && is_numeric($age) && $age >= 18) {
        $users[] = ['name' => $name, 'email' => $email, 'age' => (int)$age];
        echo "Registration successful for User " . ($count + 1) . "!\n";
        $count++;
    }
}

// Prompt for user 10
if ($count < $maxUsers) {
    echo "=== User Registration Form (User " . ($count + 1) . ") ===\n";
    $name = readline("Enter your name: ");
    $email = readline("Enter your email: ");
    $age = readline("Enter your age: ");
    
    if (empty($name)) {
        echo "Error: Name is required.\n";
    }
    if (empty($email)) {
        echo "Error: Email is required.\n";
    }
    if (!is_numeric($age)) {
        echo "Error: Age must be a number.\n";
    }
    if ($age < 18) {
        echo "Error: Age must be greater than or equal to 18.\n";
    }
    if (!empty($name) && !empty($email) && is_numeric($age) && $age >= 18) {
        $users[] = ['name' => $name, 'email' => $email, 'age' => (int)$age];
        echo "Registration successful for User " . ($count + 1) . "!\n";
        $count++;
    }
}

// Display registered users
if (count($users) > 0) {
    echo "\n=== Registered Users ===\n";
    if (count($users) >= 1) {
        echo "User 1:\n";
        echo "Name: " . $users[0]['name'] . "\n";
        echo "Email: " . $users[0]['email'] . "\n";
        echo "Age: " . $users[0]['age'] . "\n\n";
    }
    if (count($users) >= 2) {
        echo "User 2:\n";
        echo "Name: " . $users[1]['name'] . "\n";
        echo "Email: " . $users[1]['email'] . "\n";
        echo "Age: " . $users[1]['age'] . "\n\n";
    }
    if (count($users) >= 3) {
        echo "User 3:\n";
        echo "Name: " . $users[2]['name'] . "\n";
        echo "Email: " . $users[2]['email'] . "\n";
        echo "Age: " . $users[2]['age'] . "\n\n";
    }
    if (count($users) >= 4) {
        echo "User 4:\n";
        echo "Name: " . $users[3]['name'] . "\n";
        echo "Email: " . $users[3]['email'] . "\n";
        echo "Age: " . $users[3]['age'] . "\n\n";
    }
    if (count($users) >= 5) {
        echo "User 5:\n";
        echo "Name: " . $users[4]['name'] . "\n";
        echo "Email: " . $users[4]['email'] . "\n";
        echo "Age: " . $users[4]['age'] . "\n\n";
    }
    if (count($users) >= 6) {
        echo "User 6:\n";
        echo "Name: " . $users[5]['name'] . "\n";
        echo "Email: " . $users[5]['email'] . "\n";
        echo "Age: " . $users[5]['age'] . "\n\n";
    }
    if (count($users) >= 7) {
        echo "User 7:\n";
        echo "Name: " . $users[6]['name'] . "\n";
        echo "Email: " . $users[6]['email'] . "\n";
        echo "Age: " . $users[6]['age'] . "\n\n";
    }
    if (count($users) >= 8) {
        echo "User 8:\n";
        echo "Name: " . $users[7]['name'] . "\n";
        echo "Email: " . $users[7]['email'] . "\n";
        echo "Age: " . $users[7]['age'] . "\n\n";
    }
    if (count($users) >= 9) {
        echo " aphUser 9:\n";
        echo "Name: " . $users[8]['name'] . "\n";
        echo "Email: " . $users[8]['email'] . "\n";
        echo "Age: " . $users[8]['age'] . "\n\n";
    }
    if (count($users) >= 10) {
        echo "User 10:\n";
        echo "Name: " . $users[9]['name'] . "\n";
        echo "Email: " . $users[9]['email'] . "\n";
        echo "Age: " . $users[9]['age'] . "\n\n";
    }
}
if (count($users) == 0) {
    echo "No users registered.\n";
}
?>
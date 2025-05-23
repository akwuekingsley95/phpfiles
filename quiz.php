<?php
// Initialize array to store books
$books = [];

// Predefined input queue to simulate user input (replaces fgets)
$inputQueue = [
    "1",           // Choose: Add Book
    "The Hobbit",  // Book title
    "1",           // Choose: Add Book
    "1984",        // Book title
    "2",           // Choose: Display All Books
    "3",           // Choose: Count Available Books
    "4",           // Choose: Mark Book as Borrowed
    "0",           // Book index to mark as borrowed
    "2",           // Choose: Display All Books
    "5"            // Choose: Exit
];
$inputIndex = 0; // Track current input

do {
    // Display menu
    echo "\nLibrary Book Tracker\n";
    echo "1. Add Book\n";
    echo "2. Display All Books\n";
    echo "3. Count Available Books\n";
    echo "4. Mark Book as Borrowed\n";
    echo "5. Exit\n";
    echo "Enter your choice (1-5): ";

    // Get input from queue
    if ($inputIndex < count($inputQueue)) {
        $choice = $inputQueue[$inputIndex];
        $inputIndex++;
        echo "$choice\n"; // Display the input for clarity
    } else {
        echo "No more inputs available. Exiting.\n";
        exit;
    }

    // Validate menu choice using do-while
    do {
        if ($choice >= 1 && $choice <= 5) {
            break;
        }
        echo "Invalid choice. Enter a number between 1 and 5: ";
        if ($inputIndex < count($inputQueue)) {
            $choice = $inputQueue[$inputIndex];
            $inputIndex++;
            echo "$choice\n";
        } else {
            echo "No more inputs available. Exiting.\n";
            exit;
        }
    } while (true);

    // Handle menu options with switch
    switch ($choice) {
        case 1:
            // Add book
            echo "Enter book title: ";
            if ($inputIndex < count($inputQueue)) {
                $title = $inputQueue[$inputIndex];
                $inputIndex++;
                echo "$title\n";
                $books[] = ['title' => $title, 'borrowed' => false];
                echo "Book '$title' added successfully!\n";
            } else {
                echo "No title provided. Skipping.\n";
            }
            break;

        case 2:
            // Display books using for loop
            if (empty($books)) {
                echo "No books in the library.\n";
            } else {
                echo "\nLibrary Books:\n";
                for ($i = 0; $i < count($books); $i++) {
                    $status = $books[$i]['borrowed'] ? 'Borrowed' : 'Available';
                    echo "$i: {$books[$i]['title']} [$status]\n";
                }
            }
            break;

        case 3:
            // Count available books using while loop
            if (empty($books)) {
                echo "No books in the library.\n";
            } else {
                $available = 0;
                $index = 0;
                while ($index < count($books)) {
                    if (!$books[$index]['borrowed']) {
                        $available++;
                    }
                    $index++;
                }
                echo "\nAvailable Books: $available\n";
                echo "Borrowed Books: " . (count($books) - $available) . "\n";
            }
            break;

        case 4:
            // Mark book as borrowed using for loop
            if (empty($books)) {
                echo "No books in the library.\n";
            } else {
                echo "\nLibrary Books:\n";
                for ($i = 0; $i < count($books); $i++) {
                    $status = $books[$i]['borrowed'] ? 'Borrowed' : 'Available';
                    echo "$i: {$books[$i]['title']} [$status]\n";
                }
                echo "Enter book index to mark as borrowed: ";
                if ($inputIndex < count($inputQueue)) {
                    $index = $inputQueue[$inputIndex];
                    $inputIndex++;
                    echo "$index\n";
                    do {
                        if ($index >= 0 && $index < count($books)) {
                            break;
                        }
                        echo "Invalid index. Enter a number between 0 and " . (count($books) - 1) . ": ";
                        if ($inputIndex < count($inputQueue)) {
                            $index = $inputQueue[$inputIndex];
                            $inputIndex++;
                            echo "$index\n";
                        } else {
                            echo "No index provided. Skipping.\n";
                            break;
                        }
                    } while (true);
                    if ($index >= 0 && $index < count($books)) {
                        if ($books[$index]['borrowed']) {
                            echo "Book '{$books[$index]['title']}' is already borrowed.\n";
                        } else {
                            $books[$index]['borrowed'] = true;
                            echo "Book '{$books[$index]['title']}' marked as borrowed.\n";
                        }
                    }
                } else {
                    echo "No index provided. Skipping.\n";
                }
            }
            break;

        case 5:
            // Exit
            echo "Thank you for using Library Book Tracker! Goodbye!\n";
            exit;
    }
} while (true);
?>
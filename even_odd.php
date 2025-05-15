<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even/Odd Numbers</title>
</head>
<body>
    <form action="number" method="post">
        <label for="number">Input Value:</label>
        <input type="number" name="number" id="number" required>
        <input type="submit" value="Check Even/Odd">
    </form>
    <?php
    if (isset($_POST["number"])) {
        // Check if the form is submitted

        $number = $_POST['number'];
        if ($number % 2 == 0) {
            echo "<p>$number is an even number.</p>";
        } else {
            echo "<p>$number is an odd number.</p>";
        }
    }
    ?>
</body>
</html>
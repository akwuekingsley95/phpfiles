
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 50px auto;
            text-align: center;
        }
        .calculator {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
        }
        input, select, button {
            margin: 10px;
            padding: 5px;
        }
        .error {
            color: red;
        }
        .result {
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h2>PHP Calculator</h2>
        <form method="POST" action="">
            <input type="number" name="num1" placeholder="Enter first number" step="any" required>
            <select name="operator" required>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">×</option>
                <option value="/">÷</option>
            </select>
            <input type="number" name="num2" placeholder="Enter second number" step="any" required>
            <br>
            <button type="submit" name="calculate">Calculate</button>
        </form>

        <?php
        if (isset($_POST['calculate'])) {
            // Retrieve form data
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operator = $_POST['operator'];
            $result = '';
            $error = '';

            // Validate inputs
            if (!is_numeric($num1) || !is_numeric($num2)) {
                $error = "Please enter valid numbers.";
            } else {
                // Perform calculation based on operator
                switch ($operator) {
                    case '+':
                        $result = $num1 + $num2;
                        break;
                    case '-':
                        $result = $num1 - $num2;
                        break;
                    case '*':
                        $result = $num1 * $num2;
                        break;
                    case '/':
                        if ($num2 == 0) {
                            $error = "Division by zero is not allowed.";
                        } else {
                            $result = $num1 / $num2;
                        }
                        break;
                    default:
                        $error = "Invalid operator.";
                }
            }

            // Display result or error
            if ($error) {
                echo "<p class='error'>$error</p>";
            } elseif ($result !== '') {
                echo "<p class='result'>Result: $num1 $operator $num2 = " . number_format($result, 2) . "</p>";
            }
        }
        ?>
    </div>
</body>
</html>
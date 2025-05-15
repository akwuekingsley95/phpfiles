<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quadratic Equation Solver</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="calculator">
        <h1>Quadratic Equation Solver</h1>
        <p>Solve ax² + bx + c = 0</p>
        <form action="calculate.php" method="post" onsubmit="return validateForm()">
            <div class="input-group">
                <input type="number" id="a" name="a" step="any" placeholder="a" required>
                <input type="number" id="b" name="b" step="any" placeholder="b" required>
                <input type="number" id="c" name="c" step="any" placeholder="c" required>
            </div>
            <button type="submit">Solve</button>
        </form>
        <div class="result" id="result">
            <?php
            session_start();
            if (isset($_SESSION['result'])) {
                echo htmlspecialchars($_SESSION['result']);
                unset($_SESSION['result']); // Clear after display
            }
            ?>
        </div>
        <div class="history">
            <h3>Recent Calculations</h3>
            <ul id="history-list">
                <?php
                if (isset($_SESSION['history']) && !empty($_SESSION['history'])) {
                    foreach (array_reverse($_SESSION['history']) as $entry) {
                        echo "<li>" . htmlspecialchars($entry) . "</li>";
                    }
                }
                ?>
            </ul>
        </div>
    </div>
    <script>
        function validateForm() {
            const a = document.getElementById('a').value;
            if (parseFloat(a) === 0) {
                alert("Coefficient 'a' cannot be zero.");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
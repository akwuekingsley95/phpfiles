<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <form action="/calculator" method="post">
        <div class="input-group">
                <input type="number" id="a" name="a" step="any" placeholder="input coefficient a" required>
                <input type="number" id="b" name="b" step="any" placeholder="input coefficient b" required>
                <input type="number" id="c" name="c" step="any" placeholder="input coefficient c" required>
            </div>
            <button type="submit">Solve</button>
        </form>
        <?php
        // Quadratic equation calculator
        if (isset($_POST['calculator'])) {
            //Retrieve form data
            $a = $_POST['a'];
            $b = $_POST['b'];
            $c = $_POST['c'];
        
        if ($a ==="" || $b==="" || $c ==="") {
            echo"Number Must not be empty";
        }elseif (!is_numeric($a) || !is_numeric($b) || !is_numeric($c)) {
            echo "Must be a number";
        }else {
            $squaroot = sqrt(num: pow(num: $b, exponent: 2) - 4 * $a * $c);
            $x1 = -$b + $squaroot / (2*$a);
            $x2 = -$b - $squaroot / (2*$a);
            echo "X1 =  $x1 \n`",  $x1, "or", "X2 = ", $x2;
        }
        }else {
        echo "Please enter the values";
       }

        ?>


         
    </div>
    
</body>
</html>
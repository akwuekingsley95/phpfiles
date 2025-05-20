<?php
// while loop
echo"y = xsquare = x - 2:\n";
$x1 = readline("x = (x1)");
$x2 = readline("x = (x2)");

// solving 
echo"x |";
$x =$x1;
while ($x <= $x2) {
    echo "$x |";
    $x++;
}
echo "\n";

echo"xsquare |";
$x = $x1;
while ($x <= $x2) {
    $xsquare = pow($x, 2);
    echo "$xsquare |";
    $x++;
}
echo "\n";

echo "-2 |";
$x = $x1;
while ($x <= $x2) {
    echo "-2";
    $x++;
}
echo "\n";

echo "y |";
$x = $x1;
while ($x <= $x2) {
    echo "-2";
    $x++;
}
echo "\n";

echo "y";
$x = $x1;
    while ($x <= $x2) {
        $y = $xsquare + $x - 2;
        echo "$x |";
        $x++;
    }
    echo "\n";


?>
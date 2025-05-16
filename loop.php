<?php
// Using for loop
// Prepare a table of value of y= x^2 + x -2= -3 to x = 3

$xvalue = [-3, -2, -1, 0, 1, 2, 3];
// Using index array
$xsquare = [];
$y = [];
// solve for x
for ($value=0; $value < 7; $value++) { 
    $x = $xvalue[$value];
    $xsquare[$value] = $x * $x;
    $y[$value] = $xsquare[$value] + $x - 2;
}
echo"x:";
for ($value= 0; $value < 7; $value++) {
    echo $xvalue[$value] . "|";
}
echo"\n";
// solve for xsquare
echo"x^2:";
for ($value=0; $value < 7; $value++) { 
    echo $xsquare[$value] . "|";
}
echo "\n";
// solve for y
echo"y:";
for ($value=0; $value < 7; $value++) { 
    echo $y[$value] . "|";
}

?>
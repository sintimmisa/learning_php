<?php

$stdn=fopen("php://stdin","r");
print("Enter first number:");
$first=(int) fgets($stdn);
print("Second number:");
$second=(int) fgets($stdn);

print("Enter Operation:1. Add \n 2.Subtraction \n 3. Multiply");
$operator=fgets($stdn);
switch ($operator) {
    case 1:
        $sum=$first + $second;
        print("Sum :$sum");
    break;
}
?>
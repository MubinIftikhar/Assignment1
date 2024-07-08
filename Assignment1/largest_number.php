<?php

$num1 = 4;
$num2 = 5;
$num3 = 6;

if ($num1 > $num2 && $num1 > $num3) {
    printf("The leargest number is %d", $num1);
} elseif ($num2 > $num1 && $num2 > $num3) {
    printf("The leargest number is %d", $num2);
} elseif ($num3 > $num1 && $num3 > $num2) {
    printf("The largest number is %d", $num3);
} else {
    echo "All number are equal.";
}

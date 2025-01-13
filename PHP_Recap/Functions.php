<?php

function getSpecifiedDate($when)
{
    $date = new DateTime($when);
    return $date->format("M d, Y");
}
# call by value
echo getSpecifiedDate("Now") . "\n";
echo getSpecifiedDate("Yesterday") . "\n";
echo getSpecifiedDate("Tomorrow") . "\n";


# Call by reference
$dateTimeOf = 'tomorrow';
function getTimeeDate(&$dateTimeOf)
{
    $date = new DateTime($dateTimeOf);
    $dateTimeOf = 'yesterday';
    return $date->format("m-d-y h-m-s");
}
echo getTimeeDate($dateTimeOf) . "\n";
echo getTimeeDate($dateTimeOf) . "\n";


# Named Functions
function swapNumbers($num1, $num2)
{
    echo "num1: $num1, num2: $num2\n";
    $c = $num1;
    $num1 = $num2;
    $num2 = $c;

    return [$num1, $num2];
}
var_dump(swapNumbers(num2: 100, num1: 200));


# Variable arguments
function returnAverage(...$numbers)
{
    return array_sum($numbers) / count($numbers);
}

echo "Average: " . returnAverage(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

$add = fn($a, $b) => $a + $b;

echo "\nSum: " . $add(10, 20);
?>
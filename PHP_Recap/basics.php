<?php

/**
 * Variables
 */
$v1 = 10;
$v2 = 20;

$v3 = &$v1;
echo "v3: " . $v3;

$v1 = 200;

echo "\nUpdated
 v3: $v3";

print "
 \n multiline
 strings
 using 
 $v1
 print
 ";

/**
 * Dump
 */

# var_dump() on basic variables
$x = 100;
$y = "name";
var_dump($x);
var_dump($y);

# var_dump() on arrays
$z = array(1, 3, "name", 4.0, true);
var_dump($z);

# var_dump() on objects
class Test
{
    private int $x;
    private float $y;
    public function __construct(int $x, float $y = 0)
    {
        $this->$x = $x;
        $this->$y = $y;
    }
}

$test = new Test(100, 10.05);
var_dump($test);


/**
 * $ and $$
 * Creating dynamic variables
 * 
 */

$name = "Aashish";
$$name = "Katwal";

echo "$name {$$name}\n";
echo "$name $Aashish\n\n";
/**
 * Output is same as above.
 * $$name creates a variable named value of $name.
 * Number of dollars can be stacked as many times creating dynamic variables.
 */


/**
 * CONSTANTS
 */

define("PI", 3.14);
define("E", 2.71);
if (defined("PI")) {
    print PI . "\n";
}

echo PI . "\n";
echo "Euler's Constant: " . constant("E") . "\n";

echo __FILE__ . "\n"; # current file path
echo __DIR__ . "\n" # Current directory path



    ?>
<?php

#Indexed arrays
$rivers = array("bagmati", "narayani", "seti", "bheri");
echo "Index 1 of rivers: $rivers[1]\n\n";

# Associative Arrays
$students = array(
    "CSIT" => array("Aashish", "Shradha", "Sonish"),
    "BCA" => array("Aakriti"),
    "BBS" => ["Anju"]
);

foreach ($rivers as $river) {
    echo "$river \t";
}
echo "\n";
foreach ($students as $course => $studentList) {
    echo "\nIn $course,\n";
    foreach ($studentList as $student) {
        echo "$student ";
    }
}
echo "\n\n";

# Constant arrays
const FRUITS = array("Apple", "Mango", "Orange", "Pineapple", "Watermelon", "Dragon Fruit");
var_dump(FRUITS);

# Can also be defined using define();
define("EV", array("Tesla", "BYD", "TATA", "MG"));
var_dump(EV);



?>
<?php
// Define the equation as a string
$equation = "X * 7 = 49";

// Use a regular expression to split the equation into its constituent parts
preg_match("/([0-9a-zA-Z]+)\s*([\+\-\*\/])\s*([0-9a-zA-Z]+)\s*=\s*([0-9a-zA-Z]+)/", $equation, $matches);

// Extract the relevant parts of the equation
$var_location = strpos($matches[0], "X"); // location of the variable "X"
$operator = $matches[2]; // the operator (+, -, *, or /)
$left_operand = intval($matches[1]); // the left operand of the equation
$right_operand = intval($matches[3]); // the right operand of the equation
$result = intval($matches[4]); // the result of the equation

// Compute the value of the variable "X" based on the operator and operands
if ($left_operand == 0) {
    if ($operator == "+") {
        $x = $result - $right_operand;
    } else if ($operator == "-") {
        $x = $right_operand - $result;
    } else if ($operator == "*") {
        $x = $result / $right_operand;
    } else if ($operator == "/") {
        $x = $right_operand / $result;
    }
}
else {
    if ($operator == "+") {
        $x = $result - $left_operand;
    } else if ($operator == "-") {
        $x = $left_operand - $result;
    } else if ($operator == "*") {
        $x = $result / $left_operand;
    } else if ($operator == "/") {
        $x = $left_operand / $result;
    }
}

// Output the result
echo "The value of X is: " . $x;
?>
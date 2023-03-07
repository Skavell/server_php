<?php

// function to solve the equation
function solveEquation($equation) {
    $parts = explode(' ', $equation);
    $operator = '';
    $location = 0;
    $result = 0;

    // find the operator and location of the variable
    foreach ($parts as $index => $part) {
        if ($part == '+') {
            $operator = '+';
            $location = $index - 1;
        } elseif ($part == '-') {
            $operator = '-';
            $location = $index - 1;
        } elseif ($part == '*') {
            $operator = '*';
            $location = $index - 1;
        } elseif ($part == '/') {
            $operator = '/';
            $location = $index - 1;
        } elseif ($part == '=') {
            $result = $parts[$index + 1];
        }
    }

    // solve the equation
    switch ($operator) {
        case '+':
            $value = $result - $parts[$location];
            break;
        case '-':
            $value = $parts[$location] - $result;
            break;
        case '*':
            $value = $result / $parts[$location];
            break;
        case '/':
            $value = $parts[$location] / $result;
            break;
        default:
            $value = 0;
            break;
    }

    return $value;
}

// examples
echo solveEquation('X + 3 = 7'); // 4
echo solveEquation('27 - X = 17'); // 10
echo solveEquation('6/X = 2'); // 3
echo solveEquation('22 * X = 220'); // 10
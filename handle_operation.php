<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];

    if (empty($number1) || empty($number2)) {
        echo "<h1>Error: Both inputs must be provided.</h1>";
        exit;
    }

    if (!is_numeric($number1) || !is_numeric($number2)) {
        echo "<h1>Error: Both inputs must be numeric values.</h1>";
        exit;
    }

    if ($operation === 'divide' && $number2 == 0) {
        echo "<h1>Error: Division by zero is not allowed.</h1>";
        exit;
    }

    switch ($operation) {
        case 'add':
            $result = $number1 + $number2;
            break;
        case 'subtract':
            $result = $number1 - $number2;
            break;
        case 'multiply':
            $result = $number1 * $number2;
            break;
        case 'divide':
            $result = $number1 / $number2;
            break;
        case 'modulus':
            $result = $number1 % $number2;
            break;
        default:
            echo "<h1>Error: Invalid operation selected.</h1>";
            exit;
    }

    echo "<h1>Result: " . $result . "</h1>";
}
?>

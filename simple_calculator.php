<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>

<h1>Simple Calculator</h1>

<form action="" method="post">
    <label for="num1">Number 1:</label>
    <input type="text" id="num1" name="num1" required><br><br>

    <label for="num2">Number 2:</label>
    <input type="text" id="num2" name="num2" required><br><br>

    <label for="operation">Operation:</label>
    <select id="operation" name="operation" required>
        <option value="addition">Addition</option>
        <option value="subtraction">Subtraction</option>
        <option value="multiplication">Multiplication</option>
        <option value="division">Division</option>
    </select><br><br>

    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form inputs
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];

    // Check if the inputs are valid numbers
    if (!is_numeric($num1) || !is_numeric($num2)) {
        echo "Please enter valid numbers.";
    } else {
        // Perform the selected operation
        switch ($operation) {
            case "addition":
                $result = $num1 + $num2;
                break;
            case "subtraction":
                $result = $num1 - $num2;
                break;
            case "multiplication":
                $result = $num1 * $num2;
                break;
            case "division":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "Division by zero is not allowed.";
                    return;
                }
                break;
            default:
                echo "Invalid operation selected.";
                return;
        }

        // Display the result
        echo "<br>";
        echo "Result: $result";
    }
}
?>

</body>
</html>

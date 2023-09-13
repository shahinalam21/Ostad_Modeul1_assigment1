<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body>

<h1>Temperature Converter</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Temperature: <input type="text" name="temperature" required><br><br>
    Convert from:
    <input type="radio" name="conversion" value="celsiusToFahrenheit" required> Celsius to Fahrenheit
    <input type="radio" name="conversion" value="fahrenheitToCelsius" required> Fahrenheit to Celsius<br><br>
    <input type="submit" value="Convert">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $temperature = $_POST['temperature'];
    $conversion = $_POST['conversion'];

    function celsiusToFahrenheit($celsius) {
        return ($celsius * 9/5) + 32;
    }

    function fahrenheitToCelsius($fahrenheit) {
        return ($fahrenheit - 32) * 5/9;
    }

    if ($conversion == "celsiusToFahrenheit") {
        $converted_temperature = celsiusToFahrenheit($temperature);
        echo "<p>Reselt: $temperature&deg;C is $converted_temperature&deg;F</p>";
    } elseif ($conversion == "fahrenheitToCelsius") {
        $converted_temperature = fahrenheitToCelsius($temperature);
        echo "<p>Reselt: $temperature&deg;F is $converted_temperature&deg;C</p>";
    }
}
?>

</body>
</html>

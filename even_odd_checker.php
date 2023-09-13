<!DOCTYPE html>
<html>
<head>
    <title>Even Odd Checker</title>
</head>
<body>
    <h1>Even Odd Checker</h1>
    <form method="post">
        Enter a number: <input type="text" name="number">
        <input type="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if the input is a number
        if (is_numeric($_POST["number"])) {
            $number = (int)$_POST["number"];
            if ($number % 2 == 0) {
                echo "<p>The number $number is even.</p>";
            } else {
                echo "<p>The number $number is odd.</p>";
            }
        } else {
            echo "<p>Please enter a valid number.</p>";
        }
    }
    ?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Comparison Tool</title>
</head>
<body>

<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
    } else {
        // Default values
        $num1 = 0;
        $num2 = 0;
    }

    $larger_number = ($num1 > $num2) ? $num1 : $num2;
?>

<h1>Comparison Tool</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Number 1: <input type="text" name="num1" value="<?php echo $num1; ?>"><br><br>
    Number 2: <input type="text" name="num2" value="<?php echo $num2; ?>"><br><br>
    <input type="submit" value="Compare">
</form>

<h2>Result:</h2>
<p>The larger number is: <?php echo $larger_number; ?></p>

</body>
</html>
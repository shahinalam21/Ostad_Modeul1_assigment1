<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve test scores from the form
    $score1 = $_POST["score1"];
    $score2 = $_POST["score2"];
    $score3 = $_POST["score3"]; 

    // Calculate average
    $average = ($score1 + $score2 + $score3) / 3;

    // Determine letter grade
    if ($average >= 90) {
        $grade = "A";
    } elseif ($average >= 80) {
        $grade = "B";
    } elseif ($average >= 70) {
        $grade = "C";
    } elseif ($average >= 60) {
        $grade = "D";
    } else {
        $grade = "F";
    }

    // Display the results
    echo "Average Score: " . $average . "<br>";
    echo "Grade: " . $grade;
    echo "<br><br>";
}
?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    Subject 1: <input type="text" name="score1"><br><br>
    Subject 2: <input type="text" name="score2"><br><br>
    Subject 3: <input type="text" name="score3"><br><br>
    <input type="submit" value="Calculate">
</form>

</body>
</html>
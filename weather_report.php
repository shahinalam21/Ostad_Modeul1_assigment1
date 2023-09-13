<?php
// Define the temperature variable (in Celsius)
$temperature = 20; // Change this value to the desired temperature

// Check the temperature range and display corresponding message
if ($temperature <= 0) {
    $message = "It's freezing!";
} elseif ($temperature > 0 && $temperature <= 15) {
    $message = "It's cool.";
} else {
    $message = "It's warm.";
}

// Print the weather message
echo $message;
?>






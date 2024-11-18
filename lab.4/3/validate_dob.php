<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $day = trim($_POST['day']);
    $month = trim($_POST['month']);
    $year = trim($_POST['year']);
    $isValid = true;
    $errorMessage = "";

    // Check if fields are empty
    if (empty($day) || empty($month) || empty($year)) {
        $isValid = false;
        $errorMessage = "Error: All fields (dd, mm, yyyy) must be filled.";
    } else {
        // Validate day
        if (!is_numeric($day) || $day < 1 || $day > 31) {
            $isValid = false;
            $errorMessage = "Error: Day must be a number between 1 and 31.";
        }

        // Validate month
        if (!is_numeric($month) || $month < 1 || $month > 12) {
            $isValid = false;
            $errorMessage = "Error: Month must be a number between 1 and 12.";
        }

        // Validate year
        if (!is_numeric($year) || $year < 1953 || $year > 1998) {
            $isValid = false;
            $errorMessage = "Error: Year must be a number between 1953 and 1998.";
        }

        // Validate the complete date
        if ($isValid && !checkdate((int)$month, (int)$day, (int)$year)) {
            $isValid = false;
            $errorMessage = "Error: The date entered is not valid.";
        }
    }

    // Output result
    if ($isValid) {
        echo "Success! You entered a valid date of birth: $day/$month/$year.";
    } else {
        echo $errorMessage;
    }
}
?>

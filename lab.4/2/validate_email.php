<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $isValid = true;
    $errorMessage = "";

    // Check if email is empty
    if (empty($email)) {
        $isValid = false;
        $errorMessage = "Error: Email field cannot be empty.";
    } else {
        // Basic email validation using a regular expression
        $emailPattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
        if (!preg_match($emailPattern, $email)) {
            $isValid = false;
            $errorMessage = "Error: Invalid email format. Please use something like anything@example.com.";
        }
    }

    // Output result
    if ($isValid) {
        echo "Success! You entered a valid email address: " . htmlspecialchars($email);
    } else {
        echo $errorMessage;
    }
}
?>

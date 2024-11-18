<?php
if 
    ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']); // Remove leading/trailing spaces
    $errors = [];

    // Rule A: Cannot be empty
    if (empty($name)) {
        $errors[] = "Name cannot be empty.";
    }

    // Rule B: Contains at least two words
    if (str_word_count($name) < 2) {
        $errors[] = "Name must contain at least two words.";
    }

    // Rule C: Must start with a letter
    if (!preg_match('/^[a-zA-Z]/', $name)) {
        $errors[] = "Name must start with a letter.";
    }
	

    // Rule D: Can contain a-z, A-Z, period, dash only
    if (!preg_match('/^[a-zA-Z.\-\s]+$/', $name)) {
        $errors[] = "Name can only contain letters, periods, dashes, and spaces.";
    }

    // Display errors or success message
    if (!empty($errors)) {
        echo "<h3>Validation Errors:</h3><ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    } else {
        echo "<h3>Name is valid: $name</h3>";
    }
}
?>

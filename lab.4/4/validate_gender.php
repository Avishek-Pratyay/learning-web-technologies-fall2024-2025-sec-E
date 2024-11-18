<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['gender'])) {
        $gender = $_POST['gender'];
        echo "Success! You selected: " . htmlspecialchars($gender);
    } else {
        echo "Error: Please select a gender option.";
    }
}
?>

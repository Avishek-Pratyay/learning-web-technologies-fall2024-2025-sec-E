<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['degree'])) {
        $degree = $_POST['degree'];
        echo "Success! You selected: " . htmlspecialchars($degree);
    } else {
        echo "Error: Please select a degree option.";
    }
}
?>

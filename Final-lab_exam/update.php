<?php
include_once 'database.php';
if (isset($_POST['update'])) {
    $names = $_POST['name'];
    $companyNames = $_POST['companyName'];
    $contactNos = $_POST['contactNo'];
    $userNames = $_POST['userName'];
    $passwords = $_POST['password'];

    
    foreach ($names as $id => $name) {
        $companyName = $companyNames[$id];
        $contactNo = $contactNos[$id];
        $userName = $userNames[$id];
        $password = $passwords[$id];
        $con = getConnection();
        $sql = "UPDATE employer_info 
                SET name = '$name', companyName = '$companyName', contactNo = '$contactNo', userName = '$userName', password = '$password' 
                WHERE id = $id";
        

        if (!mysqli_query($con, $sql)) {
            echo "Error updating employer with ID $id: " . mysqli_error($con);
        }
    }

    mysqli_close($con);

    // Redirect back to the dashboard
    header('Location: dashboard.php');
    exit();
}
?>

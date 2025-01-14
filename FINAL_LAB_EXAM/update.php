<?php
include_once 'database.php';
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $contactNo = $_POST['contactNo'];
    $userName=$_POST['userName'];
    $password = $_POST['password'];
    $status=update($name,$contactNo,$userName,$password);
    if(empty($name) || empty($contactNo) || empty($password))
    {
        echo"fill all the fields..";
        echo"<br>";
        echo "<a href='update.html'>back</a>";
    }
    elseif($status)
    {
        echo "user updated successfully";
        echo "<a href='dashboard.html'>Back</a>";
    }
    else
    {
        echo "error";
    }

    
   
}
?>
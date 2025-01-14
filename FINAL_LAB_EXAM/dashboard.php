<?php
include_once 'database.php';
    session_start();
    if(isset($_POST['update']))
    {
        
           header('location: update.html');
        

    }
    elseif(isset($_POST['delete'])) 
    {
        $userName=$_POST['userName'];
        $status= delete($userName);
        if($status)
        {
            echo"user deleted <br>";
            echo "<a href='dashboard.html'>Back</a>";
        }
        else echo "User deletion failer";
    }





?>
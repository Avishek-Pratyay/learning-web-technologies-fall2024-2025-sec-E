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
            echo"user deleted";
        }
        else echo "User deletion failer";
    }





?>
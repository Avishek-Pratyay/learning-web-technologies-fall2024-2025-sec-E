<?php
    session_start();
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $companyName=$_POST['companyName'];
        $contactNo=$_POST['contactNo'];
        $userName=$_POST['userName'];
        $password=$_POST['password'];

        if(empty($userName) || empty($password) || empty($name) || empty($companyName) || empty($contactNo))
        {
            echo "null value found!";
        }
        
        else{
           header('location: login.html');
        }

    }
    else 
    {
        header('location: registration.html');
    }





?>
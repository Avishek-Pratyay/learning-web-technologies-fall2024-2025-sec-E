<?php

function getConnection() {
    $con = mysqli_connect('127.0.0.1', 'root', '', 'lab_exam');
    if (!$con) {
        die("Database connection failed: " . mysqli_connect_error());
    }
    return $con;
}
function login($userName, $password) {
    $con = getConnection();
    $sql = "select * from employer_info where userName='{$userName}' and password='{$password}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        return true;
    } else {
        return false;
    }
}

function delete($userName) {
    $con = getConnection();
    $sql="DELETE FROM employer_info WHERE userName = '{$userName}'";
    $result = mysqli_query($con, $sql);
    if($result)
    {
        return true;
    }
    else return false;
}

?>
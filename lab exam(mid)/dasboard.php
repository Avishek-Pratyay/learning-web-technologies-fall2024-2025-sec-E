
<?php 
    session_start();

    if(!isset($_SESSION['flag'])){
        header('location: logincheck.php');
    }
?>


<html>
    <body>
        <table border="1" cellspacing="0" cellpadding="10" align="center">
            <tr>
                <td colspan="3" align="left" height="50"><img src="Avishek.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Loggedin as <?php echo $_SESSION['username'];?> 
               
            </tr>
            <tr height="270px">
                <td width="150px" valign="top">
                    Account
                    <hr>
                    <a href="home.html">Dashboard</a><br>
                    <a href="viewprofile.html">View Profile</a><br>
                    <a href="home.html">Edit Profile</a><br>
                    <a href="home.html">Change Profile Picture</a><br>
                    <a href="home.html">Change Password</a><br>
                    <a href="login.html">Logout</a><br>
                </td>
                <td width="300px" valign="top"> <b>Welcome </b> <br><br>
                </td>
               
            </tr>
            <tr>
                <td colspan="3" align="center">Copyright</td>
            </tr>
        </table>
    </body>
</html>

<?php
include_once 'database.php';
if (isset($_POST['search'])) {
    $searchValue = $_POST['search'];

    $con = getConnection();
    $sql = "SELECT * FROM employer_info WHERE userName LIKE '%$searchValue%'";
    $result = mysqli_query($con, $sql);

    echo "<table border='1'>
            <tr>
                <th>Name</th>
                <th>Contact No</th>
                <th>Username</th>
            </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>{$row['name']}</td>";
        echo "<td>{$row['contactNo']}</td>";
        echo "<td>{$row['userName']}</td>";
        echo "</tr>";
    }

    echo "</table>";
}
?>
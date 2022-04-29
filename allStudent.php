<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 
?>
<div class="navigation">
    <a href="addStudent.php"> Back </a>
</div>

<table style="border-collapse: separate;border-spacing: 2px;
">
    <tr>
        <th>ID</th>
        <th> First Name </th>
        <th> Last Name </th>
        <th> Gender </th>
        <th> DOB </th>
        <th> Status </th>
        <th colspan="2"> Action</th>
    </tr>
    <?php

    // $sql = "SELECT * FROM student";

    $result = $conn->query("SELECT * FROM student");

    echo "number of rows:" . $result->num_rows;

    while ($row = $result->fetch_assoc()) {

        echo
        " <tr> 

        <td>" . $row['id'] . "</td>
        <td>" . $row['fname'] . "</td>
        <td>" . $row['lname'] . "</td>
        <td>" . $row['gender'] . "</td>
        <td>" . $row['dob'] . "</td>
        <td>" . $row['status'] . "</td>

        <td><a href='editStudent.php?id_to_edit=" . $row['id'] . "&name=" . $row['fname'] . " '> Edit </a> </td>
        <td> <a href=''> Delete </a></td>
        </tr>";
    }



    ?>
</table>
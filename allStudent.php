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
<div class="navigation"> <a href="addStudent.php"> Back </a> </div>

<table border="1">

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

    $sql = "SELECT * FROM student";

    $result = $conn->query($sql);

    while($row = $result->fetch_assoc())
    {

            echo
    " <tr> 

        <td>" . $row['id'] . "</td>
        <td>" . $row['fname'] . "</td>
        <td>" . $row['lname'] . "</td>
        <td>" . $row['gender'] . "</td>
        <td>" . $row['dob'] . "</td>
        <td>" . $row['status'] . "</td>

        <td> <a href='editStudent.php'> Edit </a> </td>
        <td> <a href=''> Delete </a> </td>
          </tr>";
    }
    ?>



</table>


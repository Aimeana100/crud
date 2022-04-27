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
// print_r($_POST);


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$normality = $_POST['normality'];
$status = $_POST['status'];


$sql = "INSERT INTO student (fname, lname, dob, gender, isDisbled, status)
VALUES ('$fname', '$lname', '$dob', '$gender', $normality, $status)";

$result = $conn->query($sql);


if ($result === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


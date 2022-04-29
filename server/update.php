<?php
include('server/connection/conn.php');

if(isset($_POST['update'])){

    $id_to_edit = $_POST['id_to_edit'];

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $normality = $_POST['normality'];
    $status = $_POST['status'];

    $sql = "UPDATE student SET fname = '$fname', 
    lname= '$lname', gender='$gender', dob = '$dob',
     isDisabled = $normality status = $status WHERE id=$id;";
}

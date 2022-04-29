<?php
include('server/connection/conn.php');

if(isset($_POST['update'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $normality = $_POST['normality'];
    $status = $_POST['status'];
}

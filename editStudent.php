<?php

include('server/connection/conn.php');

if (isset($_GET['id_to_edit'])) {

    $var_id = $_GET['id_to_edit'];

    $sql = "SELECT * FROM student WHERE id = $var_id LIMIT 1";

    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        $fname = $row['fname'];
        $lname = $row['lname'];
        $gender = $row['gender'];
        $dob = $row['dob'];
        $normality = $row['normality'];
        $status = $row['status'];
    }


    // ternary operator

    // $number = 8768;

    // if ($number > 0) {
    //     echo "Number ".$number ." is Postive";
    // } else {
    //     echo "Number ".$number ." is negative";
    // }


    // echo ($number > 2) ? "Number  is Postive" : "Number is negative";
    // exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Edit student </title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="navigation"> <a href="allStudent.php"> View all Students </a> </div>
    <h1 style="text-align: center"> Edit Student </h1>

    <div class="form-container">



        <form action="server/update.php" method="POST" name="myform" class="myform">
        <input type="hidden" name="id_to_edit" value="<?php echo $$var_id ?>">
            <div class="form-control">
                <label for="last_name"> Fname </label>
                <input type="text" id="last_name" name="fname" value="<?php echo $fname ?>">
            </div>

            <div class="form-control">
                <label for=""> Lname </label>
                <input type="text" id="" name="lname" value="<?php echo $lname ?>">
            </div>

            <div class="form-control">
                <label for=""> Gender </label>
                <label for="gender_male">
                    <input <?php echo ($gender == "M") ? "checked" : "" ?> type="radio" value="M" id="gender_male" name="gender" value="<?php ?>"> Male </label>
                <input <?php echo ($gender == "F") ? "checked" : "" ?> type="radio" value="F" id="" name="gender">Female
            </div>


            <div class="form-control">
                <label for="">DOB</label>
                <input type="date" id="" value="<?php echo $dob ?>" name="dob">
            </div>
            <div class="form-control">
                <label for=""> Is disbled </label>
                <select name="normality">
                    <option value=""> ----select---- </option>
                    <option <?php echo ($normality == 1) ? "selected" : "" ?> value="1">Disabled</option>
                    <option <?php echo ($normality == 0) ? "selected" : "" ?> value="0"> Normal </option>
                </select>
            </div>
            <div class="form-control">
                <label for=""> Status </label>
                <input <?php echo ($status == 1) ? "checked" : "" ?> type="radio" value="1" id="" name="status"> Active
                <input <?php echo ($status == 0) ? "checked" : "" ?> type="radio" value="0" id="" name="status"> Disactivated
            </div>

            <input type="submit" name="submit" name="update" value="Update student">
        </form>

    </div>

</body>

</html>
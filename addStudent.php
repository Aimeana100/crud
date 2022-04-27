<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Add student </title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="navigation" > <a href="allStudent.php"> View all Students </a> </div>


    <div class="form-container">

        <form action="server/add.php" method="POST" name="myform" class="myform">

            <div class="form-control">
                <label for="last_name"> Fname </label>
                <input type="text" id="last_name" name="fname">
            </div>

            <div class="form-control">
                <label for=""> Lname </label>
                <input type="text" id="" name="lname">
            </div>
            <div class="form-control">
                <label for=""> Gender </label>
                <label for="gender_male"> <input type="radio" value="M" id="gender_male" name="gender"> Male </label>
                <input type="radio" value="F" id="" name="gender">Female
            </div>
            <div class="form-control">
                <label for="">DOB</label>
                <input type="date" id="" name="dob">
            </div>
            <div class="form-control">
                <label for=""> Is disbled </label>
                <select name="normality">
                    <option value="1">Disabled</option>
                    <option value="0"> Normal </option>
                </select>
            </div>
            <div class="form-control">
                <label for=""> Status </label>
                <input type="radio" value="1" id="" name="status"> Active
                <input type="radio" value="0" id="" name="status"> Disactivated
            </div>

            <input type="submit" name="submit" value="Add student">
        </form>

    </div>

</body>

</html>
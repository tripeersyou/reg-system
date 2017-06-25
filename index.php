<?php
    require 'dbconfig/config.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Sign Up!</title>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 form">
            <form method="post" class="form-horizontal">
                <center>
                    <h1>Be a member!</h1>
                    <h4> Sign Up! </h4>
                </center>
                <br>
                <div class="form-group">
                    <label for="id_number" class="col-sm-2 control-label">ID Number</label>
                    <div class="col-sm-10">
                    <input  name="id_number" type="text" maxlength="6" class="form-control" id="id_number" placeholder="ID Number" required>
                    </div>
                </div>  
                <div class="form-group">
                    <label for="first_name" class="col-sm-2 control-label">First Name</label>
                    <div class="col-sm-4">
                    <input name="first_name" type="text" class="form-control" id="first_name" placeholder="First Name" required>
                    </div>
                    <label for="nick_name"  style="text-align:center" class="col-sm-1 control-label">Nickname</label>
                    <div class="col-sm-4 col-sm-offset-1">
                    <input name="nick_name" type="text" class="form-control" id="nick_name" placeholder="Nickname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="last_name" class="col-sm-2 control-label">Last Name</label>
                    <div class="col-sm-10">
                    <input  name="last_name" type="text" class="form-control" id="last_name" placeholder="Last Name" required>
                    </div>
                </div>  
                <div class="form-group">
                    <label for="course" class="col-sm-2 control-label">Course</label>
                    <div class="col-sm-4">
                    <input name="course" type="text" class="form-control" id="course" placeholder="Course" required>
                    </div>
                    <label for="year" class="col-sm-1 control-label">Year</label>
                    <div class="col-sm-5">
                    <select name="year" class="form-control">
                        <option>1st Year</option>
                        <option>2nd Year</option>
                        <option>3rd Year</option>
                        <option>4th Year</option>
                        <option>5th Year</option>
                    </select>
                    </div>
                </div>
                    <div class="form-group">
                    <label for="mobile" class="col-sm-2 control-label">Mobile</label>
                    <div class="col-sm-10">
                    <input name="mobile" type="text" class="form-control" id="mobile" maxlength="11"placeholder="Mobile Number" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                    <input  name="email" type="email" class="form-control" id="email" placeholder="Email" required>
                    </div>
                </div>  
                <div class="form-group">
                    <label for="bday" class="col-sm-2 control-label">Birthday</label>
                    <div class="col-sm-10">
                    <input name="bday" type="date" class="form-control" id="bday"required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="radio">
                        <label class="col-sm-3 col-sm-offset-4 radio-inline">
                        <input type="radio" name="type" id="non-scholar" value="nonscholar">Non-Scholar
                        </label>
                        <label class="col-sm-3 col-sm-offset-4 radio-inline">
                        <input type="radio" name="type" id="scholar" value="scholar">Scholar
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <button name="submit_btn" class="col-sm-2 col-sm-offset-5 btn btn-success" type="submit">Join!</button>
                <div>
            </form>
        </div>
    </div>
</div>
    <?php
        if(isset($_POST['submit_btn'])){
            $idnumber = $_POST['id_number'];
            $firstname = $_POST['first_name'];
            $nickname = $_POST['nick_name'];
            $lastname = $_POST['last_name'];
            $course = $_POST['course'];
            $mobile = $_POST['mobile'];
            $email = $_POST['email'];
            $year = $_POST['year'];
            $bday = $_POST['bday'];
            $scholar = $_POST['type'];
            $query = "SELECT * FROM members WHERE id='$idnumber'";
            $query_run = mysqli_query($con,$query);
            if(mysqli_num_rows($query_run) == 0){
                if($scholar == "scholar"){
                    $query = "INSERT INTO members VALUES ('$idnumber','$firstname','$nickname','$lastname','$course','$mobile','$email','$year','$bday',TRUE)";
                    $query_run = mysqli_query($con, $query);
                    if(!$query_run){
                        echo '<script type=text/javascript>alert("Error!")</script>';
                    }
                }else{
                    $query = "INSERT INTO members VALUES ('$idnumber','$firstname','$nickname','$lastname','$course','$mobile','$email','$year','$bday',FALSE)";
                    $query_run = mysqli_query($con, $query);
                    if(!$query_run){
                        echo '<script type=text/javascript>alert("Error!")</script>';
                    }
                }
            } else {
                echo '<script type=text/javascript>alert("You have already signed up!")</script>';
            }
        } 
    ?>
</body>
</html>
<?php
    include 'db_connect.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/stylesheet.css">
    <title>Sign Up!</title>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 form">
            <form method="post" action="submit.php" class="form-horizontal">
                <center>
                    <h1 class="header">Be a member!</h1>
                    <h4 class="header"> Sign Up! </h4>
                </center>
                <br>
                <div class="form-group">
                    <label for="id_number" class="col-sm-1 control-label">ID #</label>
                    <div class="col-sm-11">
                    <input  name="id_number" type="text" maxlength="6" class="form-control" id="id_number" placeholder="ID Number" required>
                    </div>
                </div>  
                <div class="form-group">
                    <label for="first_name" class="col-sm-1 control-label">Name</label>
                    <div class="col-sm-5">
                    <input name="name" type="text" class="form-control" id="name" placeholder="LAST NAME, FIRST NAME M.I." required>
                    </div>
                    <label for="nick_name" class="col-sm-2 control-label">Nickname</label>
                    <div class="col-sm-4">
                    <input name="nick_name" type="text" class="form-control" id="nick_name" placeholder="Nickname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="course" class="col-sm-1 control-label">Course</label>
                    <div class="col-sm-5">
                    <input name="course" type="text" class="form-control" id="course" placeholder="Course" required>
                    </div>
                    <label for="year" class="col-sm-1 control-label">Year</label>
                    <div class="col-sm-5">
                    <select name="year" id="year" class="form-control">
                        <option value="1">1st Year</option>
                        <option value="2">2nd Year</option>
                        <option value="3">3rd Year</option>
                        <option value="4">4th Year</option>
                        <option value="5">5th Year</option>
                    </select>
                    </div>
                </div>
                    <div class="form-group">
                    <label for="mobile" class="col-sm-1 control-label">Mobile</label>
                    <div class="col-sm-11">
                    <input name="mobile" type="text" class="form-control" id="mobile" maxlength="10"placeholder="Mobile Number" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-1 control-label">Email</label>
                    <div class="col-sm-11">
                    <input name="email" type="email" class="form-control" id="email" placeholder="Email" required>
                    </div>
                </div>  
                <div class="form-group">
                    <label for="bday" class="col-sm-1 control-label">Birthday</label>
                    <div class="col-sm-11">
                    <input name="bday" type="date" class="form-control" id="bday"required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="radio">
                        <label class="col-sm-3 col-sm-offset-4 radio-inline">
                        <input type="radio" name="type" id="non-scholar" value="0">Non-Scholar
                        </label>
                        <label class="col-sm-3 col-sm-offset-4 radio-inline">
                        <input type="radio" name="type" id="scholar" value="1">Scholar
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <button name="submit_btn" class="col-sm-2 col-sm-offset-5 btn btn-success" type="submit">Join!</button>
                <div>
                <br><br>
                <h4><label class="label label-danger col-sm-4 col-sm-offset-4 warning" id="warning"></label></h4>
            </form>

        </div>
    </div>
</div>
</body>
</html>
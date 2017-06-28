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
        <h4><label class="label label-danger col-sm-4 col-sm-offset-4 warning" id="warning"></label></h4>
        <div class="col-md-6 col-md-offset-3 form">
            <form method="post" action="submit.php" class="form-horizontal">
                <br>
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-4">
                    <center><label for="id_number" class="control-label">ID Number</label></center>
                    <input  name="id_number" type="text" maxlength="6" class="form-control" id="id_number" placeholder="171234" required>
                    </div>
                </div>  
                <div class="form-group">
                    <div class="col-sm-5 col-sm-offset-1">
                    <center><label for="first_name" class="control-label">Full Name</label></center>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Loyola, Ignacio A." required>
                    </div>
                    <div class="col-sm-5">
                    <center><label for="nick_name" class="control-label">Nickname</label></center>
                    <input name="nick_name" type="text" class="form-control" id="nick_name" placeholder="Iggy" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-5 col-sm-offset-1">
                    <center><label for="course" class="control-label">Course</label></center>
                    <input name="course" type="text" class="form-control" id="course" placeholder="BS MIS" required>
                    </div>
                    <div class="col-sm-5">
                    <center><label for="year" class="control-label">Year</label></center>
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
                    <div class="col-sm-10 col-sm-offset-1">
                    <center><label for="mobile" class="control-label">Mobile</label></center>
                    <input name="mobile" type="text" class="form-control" id="mobile" maxlength="10"placeholder="912345678" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-1">
                    <center><label for="email" class="control-label">Email</label></center>
                    <input name="email" type="email" class="form-control" id="email" placeholder="example@obf.ateneo.edu" required>
                    </div>
                </div>  
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-1">
                    <center><label for="bday" class="control-label">Birthday</label></center>
                    <input name="bday" type="date" class="form-control" id="bday"required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="radio">
                        <center>
                            <label class="radio-inline">
                            <input type="radio" name="type" id="non-scholar" value="0">Non-Scholar
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="type" id="scholar" value="1">Scholar
                            </label>
                        </center>
                    </div>
                </div>
                <div class="form-group">
                    <button name="submit_btn" class="col-sm-2 col-sm-offset-5 btn btn-success" type="submit">Join!</button>
                <div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
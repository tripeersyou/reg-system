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
    <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
    <link rel="stylesheet" href="css/event.css">
    <title>Event Title</title>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="container">
    <form method="post">
        <h2 style="text-align:center;padding:5px;">Event Registration</h2>
        <br>
        <input type="text" style="text-align:center" maxlength="6" placeholder="ID Number" class="form-control" data-toggle="modal" name="id_number">
    </form>
</div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><center>Patronus</center></h4>
      </div>
      <div class="modal-body">
        <?php
            if(isset($_POST['id_number'])){
                $idnumber = $_POST['id_number'];
                $query = "SELECT first_name FROM members WHERE id = '$idnumber'";
                $query_run = mysqli_query($con,$query);
                if(mysqli_num_rows($query_run) > 0){
                    while($row = mysqli_fetch_assoc($query_run)){
                        echo "<script type='text/javascript'>
                        $(document).ready(function(){
                            $('#myModal').modal('show');
                        });
                        </script>";
                        echo "<center>Welcome! ". $row['first_name']."!</center>";
                    }
                }else{
                    echo "<script type='text/javascript'>
                        $(document).ready(function(){
                            $('#myModal').modal('show');
                        });
                        </script>";
                    echo '<center>No one was found.</center>';
                }
                mysqli_free_result($query_run);
                mysqli_close($con);
            }
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>
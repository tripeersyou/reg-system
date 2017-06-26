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
    <link href="https://fonts.googleapis.com/css?family=Orienta" rel="stylesheet">
    <!--<link rel="stylesheet" href="css/event.css">-->
    <title>SQL and AJAX</title>
</head>
<body>
<?php
    $query = "SELECT * FROM members";
    $result = mysqli_query($con,$query);
    $members = array();
    while($row = mysqli_fetch_assoc($result)){
        $members[] = $row;
    }
    $members = json_encode($members);
?>
    <div class="sample">
        ID Number: <input class="form-control" type="text" name="id_number" id="id_number" onchange='search(<?php echo $members ?>)'>
        <br>
        First Name: <input class="form-control" type="text" name="first_name" id="first_name">
        <br>
        Last Name: <input class="form-control" type="text" name="last_name" id="last_name">                
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>function search(json){
    var members = json;
    var id = document.getElementById("id_number");
    var first_name = document.getElementById("first_name");
    var last_name = document.getElementById("last_name");
    console.log(id.value)
    for (var i = 0; members.length; i++){
        if(id.value == members[i].id){
            first_name.value = members[i].first_name;
            last_name.value = members[i].last_name;
        }
    }
}</script>
<style>
.sample{
    position:absolute;
    top:50%;
    left:50%;
    transform: translate(-50%,-50%);   
}</style>
</body>
</html>

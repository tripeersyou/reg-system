<?php
    include 'db_connect.php';
    if($_POST){
        $id_number = $_POST['id_number'];
        $first_name = utf8_encode($_POST['first_name']);
        $last_name = utf8_encode($_POST['last_name']);
        $nickname = utf8_encode($_POST['nick_name']);
        $year = $_POST['year'];
        $course = $_POST['course'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $birthday = $_POST['bday'];
        $scholar = $_POST['type'];
        if($scholar == "scholar"){
            $db->query("INSERT INTO members VALUES ('$id_number','$first_name','$nickname','$last_name','$course','$mobile','$email','$year','$birthday', TRUE)");        
        } else {
            $db->query("INSERT INTO members VALUES ('$id_number','$first_name','$nickname','$last_name','$course','$mobile','$email','$year','$birthday', FALSE)"); 
        }
        $db->close();
        header("Location: index.php");
    }




?>
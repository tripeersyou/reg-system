<?php
    include 'db_connect.php';
    if($_POST){
        $id_number = $_POST['id_number'];
        $name = utf8_encode($_POST['name']);
        $nickname = utf8_encode($_POST['nick_name']);
        $year = $_POST['year'];
        $course = $_POST['course'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $birthday = $_POST['bday'];
        $scholar = $_POST['type'];
        if($scholar == "1"){
            $db->query("INSERT INTO members VALUES ('$id_number','$name','$nickname','$course','$mobile','$email','$year','$birthday', TRUE)"); 
            // echo '<script>alert(Success!);</script>';       
        } else {
            $db->query("INSERT INTO members VALUES ('$id_number','$name','$nickname','$course','$mobile','$email','$year','$birthday', FALSE)"); 
            // echo '<script>alert(Success!);</script>';
        }
        $db->close();
        header("Location: index.php");
    }
?>
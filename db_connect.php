<?php
    $db = new mysqli("localhost","root","","registration_db");
    if($db->connect_errno){
        echo "Failed to connect".$db->connect_error;
    }
?>
<?php 
    include 'db_connect.php';
    $id = (isset($_GET['id'])) ? htmlspecialchars($_GET['id']) : null;
    // $id = "150363";

    $count = $db->query("SELECT * FROM members WHERE id = '$id'");
    if($count->num_rows){
        $array=['name'=>'Already Registered'];
        $db->close();
        echo json_encode($array);
    } else {
        $result = $db->query("SELECT * from students WHERE id_number = '$id'");
        $row = $result->fetch_assoc();
        $db->close();
        echo json_encode($row);
    }
?>
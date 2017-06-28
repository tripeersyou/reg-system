<?php 
    include 'db_connect.php';
    $id = (isset($_GET['id'])) ? htmlspecialchars($_GET['id']) : null;

    $result = $db->query("SELECT * from members WHERE id= '$id'");
    $result = $db->query("SELECT * FROM members WHERE id = '$id'");
    $row = $result->fetch_assoc();
    $db->close();

    echo json_encode($row);
?>
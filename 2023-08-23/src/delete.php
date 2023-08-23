<?php
    include './components/header.html';
    include 'components/config.php';    

    $id = $_GET["id"];
    
    $sql = "UPDATE board SET del=1 WHERE id=$id";
    $result = $conn->query($sql);
    echo("<script>location.replace('index.php');</script>"); 
?>
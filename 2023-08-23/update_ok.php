<?php
    include './components/header.html';

    $id = $_GET["id"]; 

    $title = $_POST["title"];
    $author = $_POST["author"];
    $description = $_POST["description"];

    include './components/config.php';
    $sql = "UPDATE board SET title = '$title', author ='$author', description = '$description' WHERE id=$id";
    $result = $conn->query($sql);

    echo("<script>location.replace('page.php?id={$id}');</script>"); 
?>
<?php
    include './components/header.html';

    $title = $_POST["title"];
    $author = $_POST["author"];
    $views = 0;
    $description = $_POST["description"];

    include './components/config.php';
    $sql = "INSERT INTO board (title, author, views, description) VALUES ( '$title', '$author',  $views,  '$description')";
    $result = $conn->query($sql);
    echo("<script>location.replace('index.php');</script>"); 
?>
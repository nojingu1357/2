<?php 
    include 'components/header.html';
    echo "<a href='index.php'>Main</a>";
    
    include 'components/config.php';    

    $parameter = $_GET["id"];

    $sql = "SELECT * FROM board WHERE id=$parameter";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    // echo gettype($result);
    echo "
        <body>
            <div class='title_box'>
                <p class='title'>{$row['title']}</p>
            </div>
            <div class='author_box'>
                <p class='author'>{$row['author']}</p>
            </div>
            <div class='date_box'>
                <p class='date'>{$row['date']}</p>
            </div>
            <div class='views_box'>
                <p class='views'>{$row['views']}</p>
            </div>
            <div class='description_box'>
                <p class='description'>{$row['description']}</p>
            </div>
        </body>      
    ";
    echo "<a href='update.php?id={$row['id']}' calss='update'>update</a>";
    echo "</br>";
    echo "<a href='delete.php?id={$row['id']}' calss='delete'>delete</a>";
?>
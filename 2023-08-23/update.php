<?php 
    include 'components/header.html';
    echo "<a href='index.php'>Main</a>";
    include 'components/config.php';   

    $parameter = $_GET["id"];
    $sql = "SELECT * FROM board WHERE id=$parameter";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    echo "
        <body>
            <form action='update_ok.php?id={$parameter}' method='POST'>
                <div class='title_box'>
                    <input name='title' class='title' value={$row['title']}></input>
                </div>
                <div class='author_box'>
                    <input name='author' class='author' value={$row['author']}></input>
                <div class='description_box'>
                    <textarea name='description' class='description'>{$row['description']}</textarea>
                </div>
                <button type='submit' class='des_btn'>update</button>
            </form>
        </body>      
    ";

?>
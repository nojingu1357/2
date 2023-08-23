<?php include './components/header.html';
    echo "<a href='index.php'>Main</a>";
?>

<body>
    <form action="create_ok.php" method="POST">
        <div class="author_box">
            <label for="author"></label>
            <input name="author" id="author" type="text" placeholder="author" maxlength="15">
        </div>
        <div class="title_box">
            <label for="title"></label>
            <input name="title" id="title" type="text" placeholder="title" maxlength="40">
        </div>

        <div class="description_box">
            <textarea name="description"></textarea>
        </div>
        <button type="submit" class="des_btn">submit</button>
    </form>
</body>


<?php include './components/footer.php'?>
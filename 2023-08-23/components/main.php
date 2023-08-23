<body>
    <table class="table">
        <thead>
            <th class='ID'>고유번호</th>
            <th class='TITLE'>제목</th>
            <th class="AUTHOR">글쓴이</th>
            <th class="DATE">작성일</th>
            <th class="VIEWS">조회수</th>
        </thead>
        <tbody>
            <?php

            include 'config.php';

            // 데이터베이스 쿼리 실행 및 결과 출력
            $sql = "SELECT id, title, author, date, views, del FROM board";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    if($row["del"]<=0){
                        $id = $row["id"];
                        echo "
                            <tr id='list'>
                                <td class='ID'>{$id}</td>
                                <td> <a href='page.php?id={$id}' class='TITLE' >{$row['title']}</a></td>
                                <td class='AUTHOR'>{$row['author']}</td>
                                <td class='DATE'>{$row['date']}</td>
                                <td class='VIEWS'>{$row['views']}</td>
                            </tr>
                        ";
                    }
                }
            } else {
                echo "게시글이 없습니다";
            }

            // 데이터베이스 연결 닫기
            $conn->close();
            ?>
        </tbody>
    </table>
</body>
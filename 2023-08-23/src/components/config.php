<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "notice";

// MySQL 데이터베이스에 연결
$conn = new mysqli($servername, $username, $password, $dbname);
// $conn -> set_charset("uft-8");

// 연결 확인
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
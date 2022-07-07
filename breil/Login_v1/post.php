<?php
include('dbcon.php');
include('session.php');
$content = $_POST['content'];
$conn->query("INSERT INTO post (content,date_posted,member_id) VALUES('$content',NOW(),'$session_id')");
header('location:home.php');
?>
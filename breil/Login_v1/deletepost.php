<?php
include('dbcon.php');
$get_id = $_GET['id'];
$conn->query("DELETE FROM post WHERE post_id='$get_id'");
header('location:home.php');
?>
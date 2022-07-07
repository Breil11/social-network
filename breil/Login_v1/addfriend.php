<?php include('dbcon.php'); ?>
<?php include('session.php'); ?>
<?php
    $my_friend_id = $_POST['my_friend_id'];
    $conn ->query("INSERT INTO friends(my_id,my_friend_id) VALUES('$session_id','$my_friend_id')");
    header('location:amis.php');
?>
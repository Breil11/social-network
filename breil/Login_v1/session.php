<?php
session_start();
if (!isset($_SESSION['id'])){
    header('location:index.php');
}
$session_id = $_SESSION['id'];
$session_query = $conn->prepare("SELECT * FROM members WHERE member_id = ?");
$session_query->execute(array($session_id));
$user_row = $session_query->fetch();

$username = $user_row['nom']." ".$user_row['prenom'];
$image = $user_row['image'];
?>
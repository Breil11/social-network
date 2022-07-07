<?php
include('dbcon.php');
$email = $_POST['email'];
$password = $_POST['pass'];

$request = $conn->prepare("SELECT * FROM members WHERE email = ? AND password= ?");
$request->execute(array($email, $password));
$count = $request->rowcount();

if ($count > 0){
    $dataUser = $request->fetch();
    session_start();
    $_SESSION['id'] = $dataUser['member_id'];
    header('location:home.php');
}else{
    header('location:index.php');

}
?>
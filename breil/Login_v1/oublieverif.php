<?php
include('dbcon.php');
$member_id = $_POST['member_id'];
$email = $_POST['email'];
$newpass1 = $_POST['newpass1'];
$newpass2 = $_POST['newpass2'];

$request = $conn->prepare("SELECT * FROM members WHERE email = ?");
$request->execute(array($email));
$count = $request->rowcount();

if ($count > 0){
    $dataUser = $request->fetch();
    if(isset($_POST['valider'])){
        if($newpass1 == $newpass2){
        $modif = $conn->query("UPDATE members SET password = '$newpass1'
         WHERE member_id = '$member_id'");
        session_start();
        $_SESSION['id'] = $dataUser['member_id'];
        header('location:index.php');
    }
        else{
            echo"les mots de passe ne sont pas identiques";
            header('location:oublie.php');
        }
    }
else{
    echo "L'email existe déja sous un autre compte";
    header('location:index.php');
}
}
?>

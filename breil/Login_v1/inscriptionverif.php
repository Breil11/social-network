<?php
include('dbcon.php');
if(isset($_POST['inscription'])) {
    $nom = $conn->quote($_POST['nom']);
    $prenom = $conn->quote($_POST['prenom']);
    $email = $conn->quote($_POST['email']);
    $password = $conn->quote($_POST['pass']);

    $reqemail = $conn->query("SELECT * FROM members WHERE email= $email");
    $datasUser = $reqemail->fetch();
    $mailexist = $reqemail->rowCount();
    if ($mailexist == 0) {

        $request2 = $conn->query("INSERT INTO members( nom, prenom, address, email, age, sexe, username, password, image, birthdate, numero, status, bio)
            VALUES($nom, $prenom,'vide',$email , 00, 'vide','vide','vide','vide','vide','vide','vide','vide')");
        echo "Votre compte a bien été créé";
        header('location: index.php');

    } else {
        echo "L'adresse email existe déja";
        header('location: inscription.php');
    }
}
?>

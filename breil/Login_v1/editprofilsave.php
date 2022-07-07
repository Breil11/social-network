<?php
include('dbcon.php');
$member_id = $_POST['member_id'];
$username = $_POST['username'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$sexe = $_POST['sexe'];
$address = $_POST['address'];
$birthdate = $_POST['birthdate'];
$bio = $_POST['bio'];
$status = $_POST['status'];
$numero = $_POST['numero'];



if(isset($_POST['save'])){
    $modif = $conn->query("UPDATE members SET username = '$username',nom = '$nom',prenom='$prenom',sexe='$sexe',address='$address',
birthdate='$birthdate',numero='$numero',status='$status',bio='$bio' WHERE member_id = '$member_id'
");
}

?>
<script>
    window.location = 'profil.php<?php echo '?id='.$member_id; ?>';
</script>
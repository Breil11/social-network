<!DOCTYPE html>
<div class="row">
    <div class="col-md-2">
        <hr>
        <img class="pp" src="<?php echo $image; ?>" height="140" width="160">
        <hr>
        <a class="btn btn-success" href="change_pic.php">Changer de photo de profil</a>
    </div>
    <div class="col-md-10">
        <hr>
        <div class="pull-right"><a href="edit_profile.php" class="btn btn-info"><i class="icon-pencil"></i> Edit</a></div>
        <h2><u>Informations personnelles</u></h2>


        <?php
        $query = $conn->query("select * from members where member_id = '$session_id'");
        $row = $query->fetch();
        $id = $row['member_id'];
        ?>
        <hr>
        <p>Name: <?php echo $row['nom']." ".$row['prenom']; ?><span class="margin-p"> </span>Sexe: <?php echo $row['sexe']; ?></p>
        <hr>
        <p>Address: <?php echo $row['address']; ?></p>
        <hr>
        <p>Gender: <?php echo $row['sexe']; ?></p>
        <hr>
        <p>Birthdate: <?php echo $row['birthdate']; ?></p>
        <hr>
        <p>Contact No: <?php echo $row['numero']; ?></p>
        <hr>
        <p>Status: <?php echo $row['status']; ?></p>
        <hr>
    </div>

</div>
</html>
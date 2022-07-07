<!DOCTYPE html>
<body>
<div class="row">
    <div class="col-md-2">
        <hr>
        <img class="pp" src="<?php echo $image; ?>" height="140" width="160">
        <hr>
        <a class="btn btn-success" href="changepic.php">Changer de photo de profi</a>
    </div>
    <div class="col-md-5">
        <?php
        $query = $conn->query("select * from members where member_id = '$session_id'");
        $row = $query->fetch();
        $id = $row['member_id'];
        ?>
        <p style="font-size: 50px;">  <?php echo $row['nom']." ".$row['prenom']; ?><span class="margin-p"> </span>
        <hr>
        <p style="font-size: 19px;"><?php echo $row['bio']; ?></p>

    </div>

</div>

</body>
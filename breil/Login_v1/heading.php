<!DOCTYPE html>
<body>
<div class="row">
    <div class="col-md-2">
        <hr>
        <img class="pp" src="<?php echo $image; ?>" height="140" width="160">
        <hr>
        <a class="btn btn-success" href="changepic.php">Change Profile Picture</a>
    </div>
    <div class="col-md-5">
        <?php
        $query = $conn->query("select * from members where member_id = '$session_id'");
        $row = $query->fetch();
        $id = $row['member_id'];
        ?>
        <p style="font-size: 50px;">  <?php echo $row['nom']." ".$row['prenom']; ?><span class="margin-p"> </span>
        <hr>
        <p>Sexe: <?php echo $row['sexe']; ?></p>
        <hr>
        <p>Address: <?php echo $row['address']; ?></p>
        <hr>
    </div>
    <div class="col-md-5">
        <form method="post" action="post.php">
            <textarea name="content" placeholder="Partager une story"></textarea>
            <br>
            <hr>
            <button class="btn btn-success">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z"/>
                </svg>
                Partager </button>
        </form>
    </div>
</div>

</body>
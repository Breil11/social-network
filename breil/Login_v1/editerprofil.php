<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

</head>
<?php include('header.php'); ?>
<?php include('session.php'); ?>
<body>
<?php include('navbar.php'); ?>
<div id="masthead">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <hr>
                <img class="pp" src="<?php echo $image; ?>" height="140" width="160">
                <hr>
                <button class="btn btn-success">Change Profile Picture</button>
            </div>
            <div class="col-md-10">
                <?php
                $query = $conn->query("select * from members where member_id = '$session_id'");
                $row = $query->fetch();
                $id = $row['member_id'];
                ?>
                <hr>
                <form method="post" action="editprofilsave.php">
                    <input type="hidden" name="member_id" value="<?php echo $id; ?>">
                    <input type="text" name="username" style="color: #c7254e" value="<?php echo $row['username']; ?>">
                    <hr>
                    Firstname: <input type="text" name="nom" style="color: #c7254e" value="<?php echo $row['nom']; ?>">
                    <hr>
                    Lastname:<input type="text" name="prenom"  style="color: #c7254e" value="<?php echo $row['prenom']; ?>">
                    <hr>
                    Gender:
                    <select style="color: #c7254e" name="sexe">
                        <option><?php echo $row['sexe']; ?></option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                    <hr>
                    Birthdate:<input name="birthdate" type="text" style="color: #c7254e" value="<?php echo $row['birthdate']; ?>">
                    <hr>
                    Address:<input name="address" type="text" style="color: #c7254e" value="<?php echo $row['address']; ?>">
                    <hr>
                    Status:<input name="status" type="text" style="color: #c7254e" value="<?php echo $row['status']; ?>">
                    <hr>
                    Mobile:<input name="numero" type="text" style="color: #c7254e" value="<?php echo $row['numero']; ?>">
                    <hr>
                    Bio:<input name="bio" type="text" style="color: #c7254e" value="<?php echo $row['bio']; ?>">
                    <br>
                        <button name="save" class="btn edit">Save</button>

                    <br>
                    <form>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="top-spacer"> </div>
            </div>
        </div>
    </div>
</div>



<?php include('footer.php'); ?>

</body>
</html>
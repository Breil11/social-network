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
        <?php include('photoshead.php'); ?>
        <h4><u>Voici la liste de vos amis<u></u></h4>
    </div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <div class="row">
                        <br>
                        <?php
                        $query = $conn->query("select members.member_id , members.nom , members.prenom , members.image , friends.friends_id   from members  , friends
	where friends.my_friend_id = '$session_id' and members.member_id = friends.my_id
	OR friends.my_id = '$session_id' and members.member_id = friends.my_friend_id
	");
                        while($row = $query->fetch()){
                            $friend_name = $row['nom']." ".$row['prenom'];
                            $friend_image = $row['image'];
                            $id = $row['friends_id'];
                            ?><div class="row">
                            <div class="col-md-2 text-center">
                                <img  src="<?php echo $friend_image; ?>" style="width:110px;height:110px" class="img-circle"></a>
                            </div>
                            <div class="col-md-10">
                                <div class="pull-right"><a href="deletefriend.php<?php echo '?id='.$id; ?>" class="btn btn-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                        </svg>
                                        Rétirer l'amis </a></div>
                                <div class="alert"><?php echo $friend_name; ?></div>
                            </div>
                            </div>
                            <hr>
                            <br><br>
                        <?php } ?>
                    </div>
                    <hr>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include('footer.php'); ?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

</head>
<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $search = $_POST['search']; ?>
<body>
<?php include('navbar.php'); ?>
<div id="masthead">
    <div class="container">
        <?php include('heading.php'); ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="top-spacer"> </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <div class="row">
                        <br>
                        <?php

                        $query = $conn->query("select  * from members where nom LIKE '%$search%' or prenom  LIKE '%$search%'");
                        $count = $query->rowcount();
                        if ($count > 0){
                            while($row = $query->fetch()){
                                $posted_by = $row['nom']." ".$row['prenom'];
                                $posted_image = $row['image'];
                                $friend_id = $row['member_id'];
                                ?>
                                <div class="col-md-2 col-sm-3 text-center">
                                    <img  src="<?php echo $posted_image; ?>" style="width:100px;height:100px" class="img-circle"></a>
                                </div>
                                <div class="col-md-10 col-sm-9">
                                    <div class="alert"><?php echo $posted_by; ?></div>
                                    <div class="row">
                                        <div class="col-xs-9">
                                            <form method="post" action="addfriend.php">
                                                <div class="col-xs-3">
                                                    <input type="hidden" name="my_friend_id" value="<?php echo $friend_id; ?>">
                                                    <?php $query1 = $conn->query("SELECT * FROM friends WHERE my_friend_id = '$friend_id'");
                                                    $count1 = $query1->rowcount();
                                                    if ($count1 > 0){ echo 'Vous etes déja amis'; }else{
                                                        ?>
                                                        <button  class="btn btn-info">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                                                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                                                            </svg>
                                                            Ajouter comme ami</button>
                                                    <?php } ?>
                                                </div>
                                                </h4></div>
                                        </form>
                                    </div>
                                    <br><br>
                                </div>
                            <?php } }else{ ?> &nbsp;&nbsp;&nbsp;&nbsp; Aucun resultat trouvé  <?php } ?>
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
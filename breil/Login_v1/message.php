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

                        <div class="col-md-6 col-sm-3 text-center">
                            <form method="post" id="send_message" action="sendmessage.php">
                                <div class="control-group">
                                    <label>Choisir un ami</label>
                                    <div class="controls">
                                        <select name="friend_id" class="combo" required>
                                            <option></option>
                                            <?php
                                            $query = $conn->query("SELECT members.member_id , members.nom , members.prenom , members.image , friends.friends_id   FROM members  , friends
	WHERE friends.my_friend_id = '$session_id' AND members.member_id = friends.my_id
	OR friends.my_id = '$session_id' AND members.member_id = friends.my_friend_id
	");
                                            while($row = $query->fetch()){
                                                $friend_name = $row['nom']." ".$row['lprenom'];
                                                $friend_image = $row['image'];
                                                $id = $row['member_id'];
                                                ?>
                                                <option value="<?php echo $id; ?>"><?php echo $friend_name; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>


                                <div class="control-group">
                                    <label>Ecrire le message:</label>
                                    <div class="controls">
                                        <textarea name="my_message" class="my_message" required></textarea>
                                    </div>
                                </div>
                                <hr>
                                <div class="control-group">
                                    <div class="controls">
                                        <button  class="btn btn-success">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                                                <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
                                            </svg>
                                            Envoyer le message </button>

                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="col-md-6 col-sm-9">
                            <strong style="color: #c7254e; font-size: 30px;">Boite de reception</strong>
                            <hr>
                            <br>
                            <?php
                            $query = $conn->query("SELECT * FROM message
				LEFT JOIN members ON message.sender_id = members.member_id WHERE reciever_id = '$session_id' ");
                            while($row = $query->fetch()){
                                $id = $row['message_id'];

                                ?>
                                <div class="mes">
                                    <div class="message"> <strong><?php echo $row['content']; ?></strong>
                                        <hr>
                                        <div class="pull-left">Envoyé le: <strong><?php echo $row['date_sended']; ?></strong></div>
                                        <div class="pull-right">par: <strong> <?php echo $row['nom']." ".$row['prenom']; ?></strong></div>

                                        <hr>
                                        <br>
                                        <a href="deletemessage.php<?php echo '?id='.$id; ?>" class="btn btn-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                            </svg>
                                            Supprimer</a>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>

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
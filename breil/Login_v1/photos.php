<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

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

                    <h2 id="po">Mes photos</h2>
                    <div class="pull-right">
                        <form id="photos"   method="POST" enctype="multipart/form-data">

                            <label class="control-label" for="input01">Image:</label>

                            <input type="file" name="image" class="font" required>




                            <button type="submit" name="submit" class="btn btn-success">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-upload-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 0a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 4.095 0 5.555 0 7.318 0 9.366 1.708 11 3.781 11H7.5V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11h4.188C14.502 11 16 9.57 16 7.773c0-1.636-1.242-2.969-2.834-3.194C12.923 1.999 10.69 0 8 0zm-.5 14.5V11h1v3.5a.5.5 0 0 1-1 0z"/>
                                </svg>
                                Ajouter une phtos</button>

                        </form>
                        <?php
                        if (isset($_POST['submit'])) {

                            $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                            $image_name = addslashes($_FILES['image']['name']);
                            $image_size = getimagesize($_FILES['image']['tmp_name']);

                            move_uploaded_file($_FILES["image"]["tmp_name"], "images/" . $_FILES["image"]["name"]);
                            $location = "images/" . $_FILES["image"]["name"];
                            $conn->query("insert into photos (location,member_id) values ('$location','$session_id')");
                            ?>
                            <script>
                                window.location = 'photos.php';
                            </script>
                            <?php
                        }
                        ?>
                    </div>

                    <div class="row">
                        <hr>
                        <hr>
                        <?php
                        $query = $conn->query("SELECT * FROM photos WHERE member_id='$session_id'");
                        while($row = $query->fetch()){
                            $id = $row['photos_id'];
                            ?>
                            <div class="col-md-2 col-sm-3 text-center">
                                <img class="photo" src="<?php echo $row['location']; ?>" width="160" height="150">
                                <hr>
                                <a class="btn btn-danger" href="deletephotos.php<?php echo '?id='.$id; ?>"><i class="icon-remove"></i> Supprimer</a>
                            </div>
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
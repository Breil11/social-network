<?php include('header.php'); ?>
<body>
<?php include('navbar.php'); ?>
<div id="masthead">
    <div class="container">
        <?php include('heading2.php'); ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
    </div>
</div>
<div class="container" style="margin-top: 50px">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <div class="row">
                        <br>
                        <?php
                        $query = $conn->query("select * from members where member_id = '$session_id'");
                        $row = $query->fetch();
                        $id = $row['member_id'];
                            ?>
                            <div class="col-md-2 col-sm-3 text-center">
                                <hr>
                                <br>
                                <p>Nom: </p>
                                <br>
                                <hr>
                                <br>
                                <p>Prenom: </p>
                                <hr>
                                <br>
                                <p>Sexe: </p>
                                <hr>
                                <br>
                                <p>Birthdate: </p>
                                <br>
                                <hr>
                                <br>
                                <p>Contact No: </p>
                                <hr>
                                <p>Status: </p>
                                <br>
                                <hr>
                                <br>
                                <p>Biographie: </p>
                                <hr>
                                <br>
                            </div>
                        <div class="col-md-10 col-sm-9">
                            <hr>
                            <div class="alert"><?php echo $row['nom']; ?></div>
                            <hr>
                            <div class="alert"><?php echo $row['prenom']; ?></div>
                            <hr>
                            <div class="alert"><?php echo $row['sexe']; ?></div>
                            <hr>
                            <div class="alert"><?php echo $row['birthdate']; ?></div>
                            <hr>
                            <div class="alert"><?php echo $row['numero']; ?></div>
                            <hr>
                            <div class="alert"><?php echo $row['status']; ?></div>
                            <hr>
                            <div class="alert"><?php echo $row['bio']; ?></div>
                            <hr>
                            <div class="row">
                                <div class="col-xs-9">

                                    <a class="btn btn-success" href="editerprofil.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                        </svg>
                                        Editer mon profil</a>

                            </div>
                            <br><br>



                    </div>
                    <hr>
                </div>
            </div>

        </div>
    </div>
</div>


</body>
</html>
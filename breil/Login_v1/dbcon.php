<?php
try {
    $conn = new PDO('mysql:host=localhost;dbname=dbreseau;charset=utf8', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(Exception $e){
    die('error: '. $e->getMessage());
}
?>
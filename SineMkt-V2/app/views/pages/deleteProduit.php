<?php
include APPROOT . '/views/inc/header.php';
?>




<?php
      $pdo = new PDO("mysql:host=localhost;dbname=sinemkt", 'root','123456');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $id = $_GET['id'];
    echo $id;
    $del = "DELETE FROM produits WHERE id = '$id'";
    $exe = $pdo->prepare($del);
    $exe->execute();

    header('Location: ./produit.php');

?>




<?php
include APPROOT . '/views/inc/footer.php';
?>
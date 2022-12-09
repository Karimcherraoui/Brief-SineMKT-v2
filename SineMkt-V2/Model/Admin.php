<?php
$pdo = new PDO("mysql:host=localhost;port=3307;dbname=brief", 'root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$showAdmin = 'SELECT * FROM admin ';
$sh = $pdo->prepare($showAdmin);
$sh->execute();

$admin = $sh->fetchAll(PDO::FETCH_ASSOC);
?>
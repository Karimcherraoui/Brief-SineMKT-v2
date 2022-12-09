<?php
include '../db/db.php';
// session_start();
if (!isset($_SESSION['user'])) {
    if (isset($_POST['user'])) {
        $temp = DB::connect();
        $name = $_POST['user'];
        $password = $_POST['pass'];
        $query = "SELECT * FROM `admin` WHERE username = '$name' AND password = '$password'";
        $stet = $temp->prepare($query);
        $stet->execute();
        $user = $stet->fetchAll(PDO::FETCH_ASSOC);

        if (!$user) {
            header("Location: Home.php?error='invalid username/password'");
        } else {
            $_SESSION['user'] = $name;
        }
    }
}
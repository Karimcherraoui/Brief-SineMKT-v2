<?php
include APPROOT . '\views\inc\header.php';
?>


<?php
                 $pdo = new PDO("mysql:host=localhost;port=3307;dbname=sinemkt", 'root','');
                  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                if(isset($_POST['clubName'])){
                $name = $_POST['clubName'];
                $desc = $_POST['clubDesc'];
                $mission = $_POST['clubMiss'];
                $img = $_POST['img'];
                $catgr = $_POST['clubCatg'];

                $updt= "UPDATE `clubs`
                 SET `Name` = '$name', `Description` = '$desc' , `Mission` = '$mission' , `image` = '$img' , `categorie` = '$catgr'  
                 WHERE id = '$id';";

                $exe = $pdo->prepare($updt);
                $exe->execute();

                header('Location: ./gestionClub.php');
                }
            ?>



<?php
include APPROOT . '\views\inc\footer.php';
?>
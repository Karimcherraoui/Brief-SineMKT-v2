<?php
include APPROOT . '/views/inc/header.php';
?>
<?php

$pdo = new PDO("mysql:host=localhost;dbname=sinemkt", 'root','123456');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$id = $_POST['id'];
$show = "SELECT * FROM produits WHERE id = '$id'";
$sh=$pdo->prepare($show);
$sh->execute();

$product = $sh->fetch(PDO::FETCH_ASSOC);

$name = $product['name'];
$prix = $product['prix'];
$img = $product['image'];
$qte = $product['qteStock'];



/*
$pdo = new PDO("mysql:host=localhost;dbname=sinemkt", 'root','123456');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$id = $_POST['id'];
$show = "SELECT * FROM produits WHERE id = '$id'";
$sh=$pdo->prepare($show);
$sh->execute();

$produits = $sh->fetchAll(PDO::FETCH_ASSOC);


if (isset($_POST['produitname'])) {
    $name = $_POST['produitname'];
    $prix = $_POST['produitprix'];
    $img = $_POST['img'];
    $qte = $_POST['quantiteproduit'];

    $update = "UPDATE `produits `SET `Name` = '$name', `prix` = '$prix' , `img` = '$img' , `qteStock` = '$qte'  
                    WHERE id = {$id}";
    $exe = $pdo->prepare($update);
    $exe->execute();

    echo '<script type="text/JavaScript"> 
alert("Product ajouté par sucess");
</script>';

    header('Location: ./produit.php');
}*/

?>

<section class="mt-2" style="margin: 150px 400px;">
    <h2 class="text-center mt-2" style="color:orange ; margin-bottom:50px">Modifier Produit</h2>


    <div class="forms" action="#" method="post">
        <form method="post" class="text-center" enctype='multipart/form-data'>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label for="name">Nom de produit </label>
            <input type="text" class="form-control" style="width: 50%; margin: 0 auto;" name="produitname"
                placeholder="Nom du produit" value="<?php echo $name; ?>"><br><br>

            <label for="name">Prix de produit </label>
            <input type="number" class="form-control" style="width: 50%; margin: 0 auto;" name="prix" placeholder="Prix"
                value="<?php echo $prix; ?>"><br><br>
            <!-- <label for="name">Image URL </label> -->
            <!-- <input type="text" class="form-control" style="width: 50%; margin: 0 auto;" id="img" name="img"
                placeholder="image URL" value=""><br><br> -->

            <input type="file" class="form-control" style="width: 50%; margin: 0 auto;" name="img" id="img"
                value="<?php echo $img; ?>"><br><br>

            <label for="name">Qantité </label>
            <input type="text" class="form-control" style="width: 50%; margin: 0 auto;" name="quantiteproduit"
                placeholder="Qantité" value="<?php echo $qte; ?>"><br><br>
            <button type="submit" class="btn btn-success" style="display: block; margin: 0 auto;">Ajouter</button>
        </form>



    </div>

</section>


<?php
include APPROOT . '/views/inc/footer.php';
?>
<?php
include APPROOT . '\views\inc\header.php';
?>


<section class="mt-2" style="margin: 150px 400px;">
    <h2 class="text-center mt-2" style="color:orange ; margin-bottom:50px">Ajouter Produit</h2>


    <div class="forms" action="#" method="post">
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
            <input type="text" class="text-center form-control" name="produitname" placeholder="Nom du produit"><br><br>
            <input type="text" class="text-center form-control" name="produitprix" placeholder="Prix"><br><br>
            <input type="text" class="text-center form-control" id="img" name="img" placeholder="image URL"><br><br>
            <input type="text" class="text-center form-control" name="quantiteproduit" placeholder="Qantité"><br><br>
            <button type="submit" style="margin-left: 120px;" class="btn btn-success col-md-6 text-center">Ajouter</button>
        </form>
    </div>

</section>
<?php
/*
$pdo = new PDO("mysql:host=localhost;port=3307;dbname=sinemkt", 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$id = $_POST['id'];


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

<?php
include APPROOT . '\views\inc\footer.php';
?>
<?php
$pdo = new PDO("mysql:host=localhost;dbname=sinemkt", 'root', '123456');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$show = 'SELECT * FROM produits ';
$sh = $pdo->prepare($show);
$sh->execute();

$produits = $sh->fetchAll(PDO::FETCH_ASSOC);
?>

<?php
include APPROOT . '/views/inc/header.php';
?>
<!--/.sofa-collection-->
<div class="new-arrivals-content">
    <div class="col-md-12 text-center me-5">
        <br><br><br>
        <!-- <a href = "http://localhost/New-sinemkt/Pages/ajoutProduit"></a><button type="button"  class="btn btn-primary">Ajouter Produit</button></a> -->
        <form action="http://localhost/New-sinemkt/Pages/ajoutProduit" method="get">
            <button type="submit" class="btn btn-primary">Ajouter Produit</button>
        </form>
        <br>
        <br>
    </div>
    <div class="row">
        <?php foreach ($produits as $produit) : ?>
        <div class="col-md-3 col-sm-4">
            <div class="single-new-arrival">
                <div class="single-new-arrival-bg">
                    <img src="http://localhost/New-sinemkt/Public/upload/<?php echo $produit['image']; ?>" alt="#">
                    <div class="single-new-arrival-bg-overlay"></div>
                    <div class="sale bg-1">
                        <p>sale</p>
                    </div>
                    <div class="new-arrival-cart">
                        <p>
                            <span class="lnr lnr-cart"></span>
                            <a href="#">add <span>to </span> cart</a>
                        </p>
                        <p class="arrival-review pull-right">
                            <span class="lnr lnr-heart"></span>
                            <span class="lnr lnr-frame-expand"></span>
                        </p>
                    </div>
                </div>
                <form action="http://localhost/New-sinemkt/Pages/deleteProduit" method="POST" style="display:inline">
                    <input type="hidden" name="id" value="<?php echo $produit['id']; ?>">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
                <form action="http://localhost/New-sinemkt/Pages/modifierProduit" method="POST" style="display:inline">
                    <input type="hidden" name="id" value="<?php echo $produit['id']; ?>">
                    <button type="submit" class="btn btn-success">Modifier</button>
                </form>
                <h4><a href="#"><?php echo $produit['name']; ?></a></h4>
                <p class="arrival-product-price"><?php echo $produit['prix']; ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <?php
    include APPROOT . '/views/inc/footer.php';
    ?>
<?php include APPROOT . '\views\inc\header.php';?>


<section class = "mt-2" style="margin: 150px 400px;" >
    <h2 class="text-center mt-2" style = "color:orange ; margin-bottom:50px">Ajouter Produit</h2>

    
    <div class="forms" action="./produit" method="post">
        <form method="post">
            <input type="text" class = "text-center form-control" name="produitname" placeholder="Nom du produit"><br><br>
            <input type="text" class = "text-center form-control" name="produitprix" placeholder="Prix"><br><br>
            <input type="text"  class = "text-center form-control" id="img" name="img" placeholder="image URL"><br><br>
            <input type="text" class = "text-center form-control" name="quantiteproduit" placeholder="Qantité"><br><br>
            <button type="submit" style = "margin-left: 120px;" class="btn btn-success col-md-6 text-center">Ajouter</button>
        </form>
    </div>
    
</section>


<?php include APPROOT . '\views\inc\footer.php'; ?>


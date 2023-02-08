<?php include APPROOT . '/views/inc/header.php';?>


<section class="mt-2" style="margin: 150px 400px;">
    <h2 class="text-center mt-2" style="color:orange ; margin-bottom:50px">Ajouter Produit</h2>


    <div>
        <form method="post" enctype='multipart/form-data'>
            <input type="text" class="text-center form-control" name="produitname" placeholder="Nom du produit"><br><br>
            <input type="text" class="text-center form-control" name="produitprix" placeholder="Prix"><br><br>
            <input type="file" class="form-control" name="img" id="img">
            <br>
            <input type="text" class="text-center form-control" name="quantiteproduit" placeholder="Qantité"><br><br>
            <button type="submit" name="upload" style="margin-left: 300px;"
                class="btn btn-success col-md-6 text-center">Ajouter</button>
        </form>
    </div>

</section>


<?php include APPROOT . '/views/inc/footer.php'; ?>
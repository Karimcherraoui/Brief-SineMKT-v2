<?php
$pdo = new PDO("mysql:host=localhost;dbname=sinemkt", 'root','123456');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$show = 'SELECT * FROM produits ';
$sh = $pdo->prepare($show);
$sh->execute();

$produits = $sh->fetchAll(PDO::FETCH_ASSOC);
?>




<?php
include APPROOT . '/views/inc/header.php';

?>
<!--/.welcome-hero-->
<!--welcome-hero end -->
<!--new-arrivals start -->
<section id="new-arrivals" class="new-arrivals">
    <div class="container">
        <div class="section-header">
            <h2>new arrivals</h2>
        </div>
        <!--/.section-header-->
    </div>
    <!--/.sofa-collection-->
    <div class="sofa-collection collectionbg2">
        <div class="container">
            <div class="sofa-collection-txt">
                <h2>unlimited dainning table collection</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <div class="sofa-collection-price">
                    <h4>strting from <span>$ 299</span></h4>
                </div>
                <button class="btn-cart welcome-add-cart sofa-collection-btn" onclick="window.location.href='#'">
                    view more
                </button>
            </div>
        </div>
    </div>
    <!--/.sofa-collection-->
    <div class="new-arrivals-content">
        <div class="row">
            <?php foreach($produits as $produit) : ?>
            <div class="col-md-3 col-sm-4">
                <div class="single-new-arrival">
                    <div class="single-new-arrival-bg">
                        <img src="<?php echo $produit['image'];?>" alt="#">
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
                    <h4><a href="#"><?php echo $produit['name'];?></a></h4>
                    <p class="arrival-product-price"><?php echo $produit['prix'];?></p>
                </div>
            </div>
            <?php endforeach;?>
            <!-- <div class="col-md-3 col-sm-4">
                    <div class="single-new-arrival">
                        <div class="single-new-arrival-bg">
                            <img src="http://localhost/New-sinemkt/Public/images/collection/arrivals2.png" alt="new-arrivals images">
                            <div class="single-new-arrival-bg-overlay"></div>
                            <div class="sale bg-2">
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
                        <h4><a href="#">single armchair</a></h4>
                        <p class="arrival-product-price">$80.00</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="single-new-arrival">
                        <div class="single-new-arrival-bg">
                            <img src="http://localhost/New-sinemkt/Public/images/collection/arrivals3.png" alt="new-arrivals images">
                            <div class="single-new-arrival-bg-overlay"></div>
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
                        <h4><a href="#">wooden armchair</a></h4>
                        <p class="arrival-product-price">$40.00</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="single-new-arrival">
                        <div class="single-new-arrival-bg">
                            <img src="http://localhost/New-sinemkt/Public/images/collection/arrivals4.png" alt="new-arrivals images">
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
                        <h4><a href="#">stylish chair</a></h4>
                        <p class="arrival-product-price">$100.00</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="single-new-arrival">
                        <div class="single-new-arrival-bg">
                            <img src="http://localhost/New-sinemkt/Public/images/collection/arrivals5.png" alt="new-arrivals images">
                            <div class="single-new-arrival-bg-overlay"></div>
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
                        <h4><a href="#">modern chair</a></h4>
                        <p class="arrival-product-price">$120.00</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="single-new-arrival">
                        <div class="single-new-arrival-bg">
                            <img src="http://localhost/New-sinemkt/Public/images/collection/arrivals6.png" alt="new-arrivals images">
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
                        <h4><a href="#">mapple wood dinning table</a></h4>
                        <p class="arrival-product-price">$140.00</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="single-new-arrival">
                        <div class="single-new-arrival-bg">
                            <img src="http://localhost/New-sinemkt/Public/images/collection/arrivals7.png" alt="new-arrivals images">
                            <div class="single-new-arrival-bg-overlay"></div>
                            <div class="sale bg-2">
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
                        <h4><a href="#">arm chair</a></h4>
                        <p class="arrival-product-price">$90.00</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="single-new-arrival">
                        <div class="single-new-arrival-bg">
                            <img src="http://localhost/New-sinemkt/Public/images/collection/arrivals8.png" alt="new-arrivals images">
                            <div class="single-new-arrival-bg-overlay"></div>
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
                        <h4><a href="#">wooden bed</a></h4>
                        <p class="arrival-product-price">$140.00</p>
                    </div>
                </div> -->
        </div>
    </div>
    </div>
    <!--/.container-->
</section>
<!--/.new-arrivals-->
<!--new-arrivals end -->

<?php
include APPROOT . '/views/inc/footer.php';
?>
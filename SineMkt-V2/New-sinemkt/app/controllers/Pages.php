<?php

class Pages extends Controller{
public function __construct(){
                $this->postmodel = $this->model('Post');
}

public function index(){
        $this->view('pages/Home');

}

public function contact(){

        $this->view('pages/contact');

}

public function features(){

        $this->view('pages/features');

}
public function GestionProduct(){

        $this->view('pages/GestionProduct');

}
public function latestBlog(){

        $this->view('pages/latestBlog');

}
public function newArrivals(){

        $this->view('pages/newArrivals');

}
public function Produit(){

        $this->view('pages/produit');

}
public function modifierProduit(){

        $this->view('pages/modifierProduit');

}
public function deleteProduit(){

        if($_SERVER["REQUEST_METHOD"]=="POST"){
                $pdo = new PDO("mysql:host=localhost;port=3307;dbname=sinemkt", 'root','');
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $id = $_POST['id'];
                echo $id;
                $del = "DELETE FROM produits WHERE id = {$id}";
                $exe = $pdo->prepare($del);
                $exe->execute();

                header('Location: http://localhost/new-sinemkt/pages/produit');
        }
        else{
                $this->view('pages/deleteProduit');
        }

}

public function ajoutProduit(){

        $this->view('pages/ajoutProduit');

}

}
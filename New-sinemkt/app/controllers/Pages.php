<?php

class Pages extends Controller
{
    public function __construct()
    {
        $this->postmodel = $this->model('Post');
    }

    public function index()
    {
        $this->view('pages/Home');
    }

    public function contact()
    {

        $this->view('pages/contact');
    }

    public function features()
    {

        $this->view('pages/features');
    }
    public function GestionProduct()
    {

        $this->view('pages/GestionProduct');
    }
    public function latestBlog()
    {

        $this->view('pages/latestBlog');
    }
    public function newArrivals()
    {

        $this->view('pages/newArrivals');
    }
    public function Produit()
    {
        $this->view('pages/produit');
    }
    public function modifierProduit()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $pdo = new PDO("mysql:host=localhost;port=3307;dbname=sinemkt", 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $id = $_POST['id'];
            if (isset($_POST['produitname']) && $_POST['id']) {
                $name = $_POST['produitname'];
                $prix = $_POST['produitprix'];
                $img = $_POST['img'];
                $qte = $_POST['quantiteproduit'];

                $update = "UPDATE `produits` SET `Name` = '$name', `prix` = '$prix' , `image` = '$img' , `qteStock` = '$qte'  
                    WHERE id = {$id} ";

                $exe = $pdo->prepare($update);
                $exe->execute();

                echo '<script type="text/JavaScript"> 
                alert("Product ajouté par sucess");
                </script>';

                header('Location: ./produit');
            } else {
                $this->view('pages/modifierProduit');
            }
        } else {
            $this->view('pages/modifierProduit');
        }
    }
    public function deleteProduit()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $pdo = new PDO("mysql:host=localhost;port=3307;dbname=sinemkt", 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $id = $_POST['id'];
            echo $id;
            $del = "DELETE FROM produits WHERE id = {$id}";
            $exe = $pdo->prepare($del);
            $exe->execute();

            header('Location: http://localhost/new-sinemkt/pages/produit');
        } else {
            $this->view('pages/deleteProduit');
        }
    }

    public function ajoutProduit()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $pdo = new PDO("mysql:host=localhost;port=3307;dbname=sinemkt", 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if (isset($_POST['produitname'])) {
                $name = $_POST['produitname'];
                $prix = $_POST['produitprix'];
                $img = $_POST['img'];
                $qte = $_POST['quantiteproduit'];

                $ins = "INSERT INTO `produits` (`Name`, `prix`, `image`, `qteStock`) VALUES ('$name','$prix','$img','$qte')";
                $exe = $pdo->prepare($ins);
                $exe->execute();

                echo '<script type="text/JavaScript"> alert("Product ajouté par sucess"); </script>';

                header('Location: http://localhost/new-sinemkt/pages/produit');
            }
        } else {

            $this->view('pages/ajoutProduit');
        }
    }
}

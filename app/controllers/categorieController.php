<?php
require_once '../models/categories.php';

class CategoriesController {
    private $categorie;

    public function __construct() {
        $this->categorie = new Categories();
    }

    public function addCategorie() {
        if (isset($_POST['submit']) and !empty($_POST['nom_cat'])) {
            $cat = $_POST['nom_cat'];
            $this->categorie->setNomCategorie($cat);
            if ($this->categorie->insertCategorie()) {
                header('location: ../views/categories.php');
                exit();
            }
        }
    }

    public function afficherCategorie() {
        $result = $this->categorie->selectCategories();
        return $result;
    }

    public function deleteCategorie() {
        if (isset($_GET['id_d'])) {
            $idCategorieToDelete = $_GET['id_d'];
            $this->categorie->setIdCategorie($idCategorieToDelete);
            $this->categorie->deleteCategorie(); 
        
    }}

    public function updateCategorie() {
            if (isset($_GET['id_u'])) {
                $idCategorieToUpdate = $_GET['id_u'];
                $NewNameCategorie=$_GET["nom_cat_modif"];
                $this->categorie->setIdCategorie($idCategorieToUpdate);
                $this->categorie->setNomCategorie($NewNameCategorie);


                if ($this->categorie->updateCategorie()) {
                    header('location: ../views/categories.php');
                    exit();
                }
            }
        }
    }

$Categories = new CategoriesController();

if (isset($_POST['submit'])) {
    $Categories->addCategorie();
}

$resultcat = $Categories->afficherCategorie();

if (isset($_GET['id_d'])) {

    $Categories->deleteCategorie();
   
    header("Location: /WikisBrief/app/views/categories.php");
  
}

if (isset($_GET['id_u'])) {
    $Categories->updateCategorie();
    header("Location: /WikisBrief/app/views/categories.php");
}

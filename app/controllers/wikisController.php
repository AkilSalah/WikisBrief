<?php
if (session_status() != 2) {
    session_start();
}
require_once '../models/wikis.php';
require_once '../models/User.php';
require_once '../models/Admin.php';
class WikisController {
    private $wikis;
    private $userWikis;

    public function __construct(){
        $this->wikis = new Wikis();
        $this->userWikis = new User();
        

    }

    public function addWiki() {
        if (
            isset($_POST['submitt']) &&
            !empty($_POST['nomW']) &&
            !empty($_FILES['image'])&&
            isset($_POST['options']) &&
            !empty($_POST['categoriesW']) &&
            !empty($_POST['descriptionW'])
        ) {
            $image_name = $_FILES['image']['name'];
            $image_tmp = $_FILES['image']['tmp_name'];
            $image_path = '../../public/images/'.$image_name;
            move_uploaded_file($image_tmp, $image_path);
            $nom = $_POST['nomW'];
            $selectedTags = $_POST["options"];
            $categories = $_POST['categoriesW'];
            $description = $_POST['descriptionW'];
            $statut = 'noArchived';
    
            $this->wikis->setTitreWiki($nom);
            $this->wikis->setContentWiki($description);
            $this->wikis->setStatusWiki($statut);
            $this->wikis->setImageWiki( $image_path);
            $this->wikis->setWikiCategorie($categories);
            $this->wikis->setWikiTags($selectedTags);
    
            if (isset($_SESSION['idAuteur'])) {
                $this->wikis->setWikiAuteur($_SESSION['idAuteur']);
            }
            $lastId = $this->wikis->insertWiki();

            
            foreach ($selectedTags as $tag){
                $this->wikis->insertWikiTags($lastId,$tag);
                header('location: ../views/auteur.php');

            }
            
        }
    }

    public function deleteWiki (){
        if (isset($_GET['id_d'])){
          $id_wiki = $_GET['id_d'];
                $this->wikis->setIdWiki($id_wiki);
                $this->wikis->deleteWikis();
        }
    }

    public function updateWiki(){
        if (isset($_POST['modifier'])){
            $id_W = $_POST['modifier'];
    
            if (!empty($_FILES['image'])) {
                $image_name = $_FILES['image']['name'];
                $image_tmp = $_FILES['image']['tmp_name'];
                $image_path = '../../public/images/'.$image_name;
                move_uploaded_file($image_tmp, $image_path);
                
                $this->wikis->setIdWiki($id_W);
                $this->wikis->setImageWiki($image_path);
                $this->wikis->setTitreWiki($_POST['nom']);
                $this->wikis->setWikiCategorie($_POST['categories']);
                $this->wikis->setWikiTags($_POST['options']); 
                $this->wikis->setContentWiki($_POST['description']);
                
                if ($this->wikis->updateWikis()) {
                    header('location: ../views/auteur.php');
                    exit();
                }
            }
        }
    }
    
    public function afficheWikisAuteur() {
        if(isset($_SESSION['AuteurEmail'])) {
        $this->userWikis->setEmailUser($_SESSION['AuteurEmail']);
         $result = $this->userWikis->selectWikis();
        return $result;   
        }
    }

    public function affiche3Wikis(){
        $treeWiki = $this->wikis->selectLastWikis();
        return $treeWiki;
    }
    

    public function search(){
        if (isset($_GET['searchText'])){
            $searchValue = $_GET['searchText'];
    
            $this->wikis->setTitreWiki($searchValue);
            $this->wikis->setWikiCategorie($searchValue);
            $this->wikis->setWikiTags($searchValue);
    
            $searchResults = $this->wikis->search();
            return $searchResults;
        }
    }
    public function wikisCategorie(){
        if (isset($_GET['id_cat'])){
            $cat = $_GET['id_cat'];
            $this->wikis->setWikiCategorie($cat);
            $wikisFilter =$this->wikis->wikisByCatagorie();
            return $wikisFilter;
        }
    }

    public function singleWikis(){
        if(isset($_GET['single'])){
         $single=$_GET['single'];
         $this->wikis->setIdWiki($single);   
        $wikis = $this->wikis->singleWiki();
        return $wikis;
    }
}
    
} 
    $wikisController = new WikisController();

    if (isset($_POST['submitt'])) {
        $wikisController->addWiki();

    }
    $result = $wikisController->afficheWikisAuteur();

    if(isset($_GET['id_d'])) {
        $wikisController->deleteWiki();
        header("Location: /WikisBrief/app/views/auteur.php");
    }
    if(isset($_POST['modifier'])){
        $wikisController->updateWiki();
        header("Location: /WikisBrief/app/views/auteur.php");
    }

    if (isset($_GET['searchText'])){
      $search =  $wikisController->search();
    }
    
    
    if(isset($_GET['id_cat'])){
        $all = $wikisController->wikisCategorie();
    }else{
        $all = $wikisController->affiche3Wikis();
    }

    if (isset($_GET['single'])) {
        $singles = $wikisController->singleWikis();
    }
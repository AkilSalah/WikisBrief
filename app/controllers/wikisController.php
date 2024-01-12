<?php 
require_once '../models/Admin.php';
require_once '../models/wikis.php';
require_once '../models/User.php';

session_start();


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
            $jsonTags = json_encode($selectedTags);
            $categories = $_POST['categoriesW'];
            $description = $_POST['descriptionW'];
            $statut = 'noArchived';
    
            $this->wikis->setTitreWiki($nom);
            $this->wikis->setContentWiki($description);
            $this->wikis->setStatusWiki($statut);
            $this->wikis->setImageWiki( $image_path);
            $this->wikis->setWikiCategorie($categories);
            $this->wikis->setWikiTags($jsonTags);
    
            if (isset($_SESSION['idAuteur'])) {
                $this->wikis->setWikiAuteur($_SESSION['idAuteur']);
            }
            $lastId = $this->wikis->insertWiki();

            
            foreach ($selectedTags as $tag){
                $this->wikis->insertWikiTags($lastId,$tag);
                header('location: ../views/auteur.php');

            }
            // die();
            // if ($this->wikis->insertWiki()) {
            //     header('location: ../views/auteur.php');
            //     exit();
            // } else {
            //     echo "Erreur lors de l'insertion du wiki.";
            // }
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
        if (isset($_GET['idWikiUpdate'])){
        $id_W = $_GET['idWikiUpdate'];
        $this->wikis->setIdWiki($id_W);
        $this->wikis->setImageWiki($_GET['image'] );
        $this->wikis->setTitreWiki($_GET['nom'] );
        $this->wikis->setWikiCategorie($_GET['categories'] );
        $this->wikis->setWikiTags($_GET['categories'] );
        $this->wikis->setContentWiki($_GET['description'] );

        if ($this->wikis->updateWikis()) {
            header('location: ../views/auteur.php');
            exit();
        }
    }
    }

    
    



    

    public function afficheWikisAuteur() {
        if(isset($_SESSION['AuteurEmail'] )) {
        $this->userWikis->setEmailUser($_SESSION['AuteurEmail']);
         $result = $this->userWikis->selectWikis();
        return $result;   
        }
    }

    public function affiche3Wikis(){
        $treeWiki = $this->wikis->selectLastWikis();
        return $treeWiki;
    }
    public function afficheAllWikis(){
        $wikis = $this->wikis->allWikis();
        return $wikis;
    }

    public function archive() {
        if (isset($_POST['archive'])) {
            // $this->wikis->archiveWiki();
        }
    }
} 
    $wikisController = new WikisController();

    if (isset($_POST['submitt'])) {
        $wikisController->addWiki();

    }
    $result = $wikisController->afficheWikisAuteur();

    $tree = $wikisController->affiche3Wikis();
    $all = $wikisController->afficheAllWikis();

    if (isset($_GET['idArchive'])) {

        $wikisController->archive();
    }

    if(isset($_GET['id_d'])) {
        $wikisController->deleteWiki();
        header("Location: /WikisBrief/app/views/auteur.php");
    }

    if(isset($_GET['modifier'])){
        $wikisController->updateWiki();
        header("Location: /WikisBrief/app/views/auteur.php");
    }



?>
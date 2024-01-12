<?php
require_once '../models/Admin.php';
session_start();

class AdminController {
    private $adminModel;

    public function __construct() {
        $this->adminModel = new AdminModel();
    }

    public function getAdminModel()  {
        if (isset($_POST['submit']) && !empty($_POST['Email']) && !empty($_POST['Password'])) {
            $email = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_EMAIL);
            $pass = filter_input(INPUT_POST, 'Password', FILTER_SANITIZE_STRING);
            $this->adminModel->setEmailAdmin($email);

            if ($this->adminModel->adminLogin()) {
                $_SESSION['UserEmail'] = $email;
                header('location: ../views/adminDash.php');
                exit();
            } else {
                $errorMessage = "Identifiants incorrects";
            }
        }
    }

    public function admin() {
        if (!empty($_SESSION['UserEmail'])) {
            $email = $_SESSION['UserEmail'];
            $this->adminModel->setEmailAdmin($email);
            $result = $this->adminModel->getAdmin();
            return $result;
        } else {
            return null;
        }
    }

    public function categories(){
        $result = $this->adminModel->getCategories();
        return $result;
    }
    public function auteurs(){
        $result = $this->adminModel->getAuteurs();
        return $result;
    }
    public function tags(){
        $result = $this->adminModel->getTags();
        return $result;
    }
    public function wikisS(){
        $result = $this->adminModel->getWikiStatic();
        return $result;
    }
    public function afficherWikis(){
        $result = $this->adminModel->selectWikis();
        return $result;
    }

    public function archiverWiki(){
        if(isset($_GET['idArchive'])){
            $idWikiA = $_GET['idArchive'];
            $this->adminModel->archiverWiki($idWikiA);

        }
    }

    public function deArchiver (){
        if (isset($_GET['idNoArchive'] )){
            $idWikid = $_GET['idNoArchive'];
            
            $this->adminModel->desarchiverWiki($idWikid); 

        }
    }

    
}

$adminController = new AdminController();

if (isset($_POST['submit'])) {
    $adminController->getAdminModel();
}

$wikis = $adminController->wikisS();
$cats = $adminController->categories();
$tags = $adminController->tags();
$auteur =$adminController->auteurs();

$allWikis = $adminController->afficherWikis();

$admin = $adminController->admin();

if(isset($_GET['idArchive'])){
    $adminController->archiverWiki();
    header("Location: /WikisBrief/app/views/wikiAdmin.php");
}
if(isset($_GET['idNoArchive'])){
    $adminController->deArchiver();
    header("Location: /WikisBrief/app/views/wikiAdmin.php");
}

?>

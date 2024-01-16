<?php
if (session_status() != 2) {
    session_start();
}
require_once '../models/Admin.php';
class AdminController {
    private $adminModel;

    public function __construct() {
        $this->adminModel = new AdminModel();
    }

    public function getAdminModel()  {
        if (isset($_POST['admin-login']) && !empty($_POST['Email']) && !empty($_POST['Password'])) {
            $email = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_EMAIL);
            $pass = filter_input(INPUT_POST, 'Password', FILTER_SANITIZE_SPECIAL_CHARS);
            $this->adminModel->setEmailAdmin($email);

            if ($this->adminModel->adminLogin()) {
                $_SESSION['AdminEmail'] = $email;
                header('location: ../views/adminDash.php');
                exit();
            } else {
                echo "Identifiants incorrects";
            }
        }
    }

    public function admin() {
        if (!empty($_SESSION['AdminEmail'])) {
            $email = $_SESSION['AdminEmail'];
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
            header("Location: /WikisBrief/app/views/wikiAdmin.php");
        } elseif (isset($_GET['idNoArchive'])) {
            $idWikid = $_GET['idNoArchive'];
            
            $this->adminModel->desarchiverWiki($idWikid); 
            header("Location: /WikisBrief/app/views/wikiAdmin.php");

        }
    }
    

    
}

$adminController = new AdminController();

if (isset($_POST['admin-login'])) {
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

$adminController->archiverWiki();

<?php 
require_once ('../models/User.php');

class UserController{
    private  $userModel;
    public function __construct(){
        $this->userModel = new User();
    }
    public function addUser(){
        
        if(isset($_POST['submit'])){
            if(!empty($_POST['Nom']) && !empty($_POST['Prenom']) && !empty($_POST['Email']) && !empty($_POST['password'])){
                $Nom = $_POST['Nom'];
                $Prenom = $_POST['Prenom'];
                $Email = $_POST['Email'];
                $Password = $_POST['password'];
            }
            $this->userModel->__setNom($Nom);
            $this->userModel->__setPrenom($Prenom);
            $this->userModel->setEmailUser($Email);
            $this->userModel->__setPassword($Password);

        }
        $this->userModel->insertUser();
        header('Location:../views/login.php');
    }
    public function loginAuteur() {
        if (isset($_POST['submit']) && !empty($_POST['Email']) && !empty($_POST['Password'])) {
            $email = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_EMAIL);
            $pass = filter_input(INPUT_POST, 'Password', FILTER_SANITIZE_STRING);
            $this->userModel->setEmailUser($email);

            if ($this->userModel->auteurlogin()) {
                $_SESSION['AuteurEmail'] = $email;
                header('location: ../views/auteur.php');
                exit();
            } else {
                 "Identifiants incorrects";
            }
        }
    }
    public function auteur() {
        if (!empty($_SESSION['AuteurEmail'])) {
            $email = $_SESSION['AuteurEmail'];
            $this->userModel->setEmailUser($email);
            
            $auteur = $this->userModel->getAuteur();
    
            if ($auteur) {
                $_SESSION['idAuteur'] = $auteur['id_utilisateur'];
    
                return $auteur;
            } else {
                return null;
            }
        } else {
            return null;
        }
    }
    

    

}
$auteur = new UserController();
if(isset($_POST['submit'])){
     $auteur->addUser();
}
if(isset($_POST['submit'])){
    $auteur->loginAuteur();
}

$auteur = $auteur->auteur();


?>
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
    }
    

}
$user = new UserController();
if(isset($_POST['submit']))
    $user->addUser();

?>
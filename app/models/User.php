<?php 
class User{
    private $id_user;
    private $email_user;
    private $password_user;
    private $nom_user;
    private $prenom_user ;
    private $role_user;

public function __construct(){

}

public function __getNom($prp){
    return $this->$prp;
}
public function __setNom($nom_user){
    $this->nom_user = $nom_user;
}
public function __setPassword($password_user){
    $this->password_user = $password_user;
}
public function __getPassword(){
    return $this->password_user;
}
public function __setPrenom($prenom_user){
    $this->prenom_user = $prenom_user;
}
public function __getPrenom(){
    return $this->prenom_user;
}
public function getIdUser() {
    return $this->id_user;
}

public function setIdUser($id_user) {
    $this->id_user = $id_user;
}

// Getters and Setters for email_user
public function getEmailUser() {
    return $this->email_user;
}

public function setEmailUser($email_user) {
    $this->email_user = $email_user;
}

public function getRoleUser() {
    return $this->role_user;
}

public function setRoleUser($role_user) {
    $this->role_user = $role_user;
}

public function insertUser(){
    $sql = db::connect()->prepare
    ("INSERT INTO users (nom ,prenom,email,password,role)
     values(:nom,:prenom,:email,:password,:Role)");
      $sql->bindParam(':nom', $this->nom_user);
      $sql->bindParam(':prenom', $this->email_user);
      $sql->bindParam(':email', $this->password_user);
      $sql->bindParam(':password', $this->prenom_user);
      $sql->bindParam(':Role', $this->role_user);
      $sql->execute();
}








}







?>
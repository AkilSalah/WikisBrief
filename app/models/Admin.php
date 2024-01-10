<?php 
require_once '../config/db.php';
class adminModel{
    private $email_admin;
    private $password_admin;
    private $role_admin = "admin";   

public function __construct(){

}
public function __setPassword($password_admin){
    $this->password_admin = $password_admin;
}
public function __getPassword(){
    return $this->password_admin;
}


public function getEmailAdmin() {
    return $this->email_admin;
}

public function setEmailAdmin($email_admin) {
    $this->email_admin = $email_admin;
}

public function getRoleAdmin() {
    return $this->role_admin;
}

public function setRoleAdmin($role_admin) {
    $this->role_admin = $role_admin;
}

public function adminLogin() {
    $role = $this->getRoleAdmin();
    $email = $this->getEmailAdmin();
    $sql = db::connect()->prepare("SELECT * FROM users WHERE email = :email AND role = :role");
    $sql->bindParam(':role', $role);
    $sql->bindParam(':email', $email);
    $sql->execute();

    $user = $sql->fetch(PDO::FETCH_ASSOC);
    return $user;
}

public function getCategories(){
    $sql = db::connect()->prepare("SELECT count(*) FROM categories");
    $sql->execute();
    $categories=$sql->fetchAll(PDO::FETCH_ASSOC);
    return $categories;
}
public function getAuteurs(){
    $sql = db::connect()->prepare("SELECT count(*) FROM users where role = 'auteur' ");
    $sql->execute();
    $auteurs=$sql->fetchAll(PDO::FETCH_ASSOC);
    return $auteurs;
}
public function getTags(){
    $sql = db::connect()->prepare("SELECT count(*) FROM tags");
    $sql->execute();
    $tags=$sql->fetchAll(PDO::FETCH_ASSOC);
    return $tags; 
}
public function getWikis(){
    $sql = db::connect()->prepare("SELECT count(*) FROM wikis");
    $sql->execute();
    $wikis=$sql->fetchAll(PDO::FETCH_ASSOC);
    return $wikis;
}







}

$admin = new adminModel();

var_dump($admin->getTags());











?>
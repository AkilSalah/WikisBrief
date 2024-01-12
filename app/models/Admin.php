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
    $sql = db::connect()->prepare("SELECT * FROM users WHERE email = :email AND role = :role" );
    $sql->bindParam(':role', $role);
    $sql->bindParam(':email', $email);
    $sql->execute();

    $user = $sql->fetch(PDO::FETCH_ASSOC);
    return $user;
}

public function getAdmin(){
    $role = $this->getRoleAdmin();
    $email = $this->getEmailAdmin();
    $sql = db::connect()->prepare("SELECT * FROM users where role = :role and email =:email  ");
    $sql->bindParam(':role', $role);
    $sql->bindParam(':email',$email);
    $sql->execute();
    $admin = $sql->fetch();
    return $admin;
}

public function getCategories(){
    $sql = db::connect()->prepare("SELECT count(*) FROM categories");
    $sql->execute();
    $categories=$sql->fetch();
    return $categories;
}
public function getAuteurs(){
    $sql = db::connect()->prepare("SELECT count(*) FROM users where role = 'auteur' ");
    $sql->execute();
    $auteurs=$sql->fetch();
    return $auteurs;
}
public function getTags(){
    $sql = db::connect()->prepare("SELECT count(*) FROM tags");
    $sql->execute();
    $tags=$sql->fetch();
    return $tags; 
}
public function getWikiStatic(){
    $sql = db::connect()->prepare("SELECT count(*) FROM wikis");
    $sql->execute();
    $wikis=$sql->fetch();
    return $wikis;
}

public function selectWikis(){
    $sql = db::connect()->prepare("SELECT * from wikis join users on users.id_utilisateur = wikis.id_user");
    $sql->execute();
    $wikis=$sql->fetchAll();
    return $wikis;
}

public function archiverWiki($id_wiki){
    $sql = db::connect()->prepare("UPDATE wikis set statut = 'archived' where id_wiki = :id_wiki ");
    $sql->bindParam(':id_wiki',$id_wiki );
    $sql->execute();
}

public function desarchiverWiki($id_wiki){
    $sql = db::connect()->prepare("UPDATE wikis set statut = 'noArchived' where id_wiki = :id_wiki ");
    $sql->bindParam(':id_wiki', $id_wiki);
    $sql->execute();
}








}













?>
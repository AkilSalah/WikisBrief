<?php 
require_once '../config/db.php';
class TagModel {
    private $id_tag;
    private $nome_tag;

    public function __construct(){

    }
    public function getIdTag(){
        return $this->id_tag;
    }
    public function getNomeTag(){
        return $this->nome_tag;
    }
    public function setNomeTag($nome_tag){
        $this->nome_tag = $nome_tag;
    }
    public function setIdTag($id_tag){
        $this->id_tag = $id_tag;
    }
 
    public function insertTag(){
        $nom_tag = $this->getNomeTag();
        $pdo = db::connect(); 
        $sql = $pdo->prepare("INSERT INTO tags (nom_tag) VALUES (:nom_tag)");
        $sql->bindParam(':nom_tag' ,$nom_tag);
        $sql->execute();
    }

    public function updateTag(){
        $id_tag = $this->getIdTag();
        $nom_tag = $this->getNomeTag();
        $sql = db::connect()->prepare("UPDATE tags SET nom_tag = :nom_tag where id_tag = :id_tag");
        $sql->bindParam(':nom_tag',$nom_tag);
        $sql->bindParam('id_tag',$id_tag);
        $sql->execute();
    }

    public function deleteTag(){
        $id_tag = $this->getIdTag();
        $sql = db::connect()->prepare("DELETE FROM tags WHERE id_tag = :id_tag ");
        $sql->bindParam(':id_tag',$id_tag);
        $sql->execute();
    }

    public function selectTags(){
        $sql = db::connect()->prepare("SELECT * FROM tags ");
        $sql->execute();
        $tags = $sql->fetchAll();
        return $tags;
    }


}


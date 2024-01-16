<?php
require_once '../config/db.php';

class Categories
{
    private $id_categorie;
    private $nom_categorie;

    public function __construct()
    {
    }
 
    public function getIdCategorie()
    {
        return $this->id_categorie;
    }

    
    public function setIdCategorie($id_categorie)
    {
        $this->id_categorie = $id_categorie;

    }

  
    public function getNomCategorie()
    {
        return $this->nom_categorie;
    }

    public function setNomCategorie($nom_categorie)
    {
        $this->nom_categorie = $nom_categorie;

    }
    public function insertCategorie()
    {
        $nom_categorie = $this->getNomCategorie();
        $sql = db::connect()->prepare("INSERT INTO categories (nom_categorie) VALUES (:nom_categorie)");
        $sql->bindParam(':nom_categorie', $nom_categorie);
        $sql->execute();
    }
    

    public function updateCategorie()
    {
        $id_categorie = $this->getIdCategorie();
        $nom_categorie = $this->getNomCategorie();
        $sql = db::connect()->prepare("UPDATE categories SET nom_categorie = :nom_categorie WHERE id_categories = :id_categories");
        $sql->bindParam(':id_categories', $id_categorie);
        $sql->bindParam(':nom_categorie', $nom_categorie);
        $sql->execute();
    }
    public function deleteCategorie()
    {
        $id_categorie = $this->getIdCategorie(); 
        $sql = db::connect()->prepare("DELETE FROM categories where id_categories = :id_categories");
        $sql->bindParam(':id_categories', $id_categorie);
        $sql->execute();
    } 

    public function selectCategories()
    {
        $sql = db::connect()->prepare("SELECT * FROM categories");
        $sql->execute();
        $categories = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $categories;
    }
    public function selectCategoriesByID(){
        $id_categorie=$this->getIdCategorie(); 
        $sql = db::connect()->prepare("SELECT FROM categories WHERE id_categories = :id_categories ");
        $sql->bindParam(':id_categories', $id_categorie);
        $sql->execute();
        $cat = $sql->fetch(PDO::FETCH_ASSOC);
        return $cat;
    }



}

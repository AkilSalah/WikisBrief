<?php
require_once '../config/db.php';

class Wikis {
    private $id_wiki;
    private $titre_wiki;
    private $content_wiki;
    private $image_wiki;
    private $status_wiki;
    private $wiki_categorie;
    private $wiki_auteur;
    private $id_tags;

    public function __construct(){

    }

    public function getIdWiki() {
        return $this->id_wiki;
    }

    public function getTitreWiki() {
        return $this->titre_wiki;
    }

    public function getContentWiki() {
        return $this->content_wiki;
    }

    public function getImageWiki() {
        return $this->image_wiki;
    }

    public function getStatusWiki() {
        return $this->status_wiki;
    }

    public function setIdWiki($id_wiki) {
        $this->id_wiki = $id_wiki;
    }

    public function setTitreWiki($titre_wiki) {
        $this->titre_wiki = $titre_wiki;
    }

    public function setContentWiki($content_wiki) {
        $this->content_wiki = $content_wiki;
    }

    public function setImageWiki($image_wiki) {
        $this->image_wiki = $image_wiki;
    }

    public function setStatusWiki($status_wiki) {
        $this->status_wiki = $status_wiki;
    }
    public function getWikiCategorie(){
        return $this->wiki_categorie;
    }

    public function setWikiCategorie($wiki_categorie) {
        $this->wiki_categorie=$wiki_categorie;
    }

    public function getWikiAuteur(){
        return $this->wiki_auteur;
    }

    public function setWikiAuteur($wiki_auteur) {
        $this->wiki_auteur =$wiki_auteur;
    }

    public function getWikiTags(){
        return $this->id_tags;
    }
    public function setWikiTags($wikiTags){
        $this->id_tags=$wikiTags;
    }

    

    public function insertWiki() {
            $connection = db::connect();
    
            $sql = $connection->prepare("INSERT INTO wikis (wiki_titre, wiki_content, wiki_image, statut, id_user, id_categorie)
            VALUES (:wiki_titre, :wiki_content, :wiki_image, :statut, :id_user, :id_categorie)");
    
            $sql->bindParam(':wiki_titre', $this->titre_wiki);
            $sql->bindParam(':wiki_content', $this->content_wiki);
            $sql->bindParam(':wiki_image', $this->image_wiki);
            $sql->bindParam(':statut', $this->status_wiki);
            $sql->bindParam(':id_user', $this->wiki_auteur);
            $sql->bindParam(':id_categorie', $this->wiki_categorie);
    
            $result = $sql->execute();
    
            if (!$result) {
                throw new Exception("Erreur lors de l'insertion du wiki.");
            }
    
            $lastInsertId = $connection->lastInsertId();
    
            return $lastInsertId;
    
    }
    
    
    public function insertWikiTags($id_wiki, $id_Tag) {
            $connection = db::connect();
                    $sql = $connection->prepare("INSERT INTO wikis_tags (id_wiki, id_tag) VALUES (:id_wiki, :id_tag)");
                $sql->bindParam(':id_wiki', $id_wiki);
                $sql->bindParam(':id_tag', $id_Tag);
                if (!$sql->execute()) {
                    throw new Exception("Erreur lors de l'insertion du tag $id_Tag.");
                }
            return true;
    
       
    }

    public function deleteWikis() {
            $connection = db::connect();
        
            $sql = $connection->prepare("DELETE FROM wikis_tags WHERE id_wiki = :id_wiki");
            $sql->bindParam(':id_wiki', $this->id_wiki);
            $sql->execute();
    
            
    
            $sql2 = $connection->prepare("DELETE FROM wikis WHERE id_wiki = :id_wiki");
            $sql2->bindParam(':id_wiki', $this->id_wiki);
            $sql2->execute();
    
            echo "Wiki et tags supprimés avec succès.";
    
            return true;
        } 

        public function updateWikis(){
            $connection = db::connect();
        
            $sql = $connection->prepare("UPDATE wikis SET wiki_titre = :wiki_titre, wiki_content = :wiki_content, wiki_image = :wiki_image, id_categorie = :id_categorie WHERE id_wiki = :id_wiki");
        
            $sql->bindParam(':id_wiki', $this->id_wiki);
            $sql->bindParam(':wiki_titre', $this->titre_wiki);
            $sql->bindParam(':wiki_content', $this->content_wiki);
            $sql->bindParam(':wiki_image', $this->image_wiki);
            $sql->bindParam(':id_categorie', $this->wiki_categorie);
        
            $sql->execute();
        
            $sql2 = $connection->prepare("UPDATE wikis_tags SET id_tag = :id_tag WHERE id_wiki = :wiki_id");
            $sql2->bindParam(':id_tag', $this->id_tags);
            $sql2->bindParam(':wiki_id', $this->id_wiki);
        
            $sql2->execute();
        
            
        }
        



    

        public function selectLastWikis(){
        $sql = db::connect()->prepare("SELECT * FROM wikis join users on wikis.id_user = users.id_utilisateur ORDER BY id_wiki DESC LIMIT 3");
        $sql->execute();
        $lastWikis = $sql->fetchAll();
        return $lastWikis;
    }

    public function allWikis(){
        $sql = db::connect()->prepare("SELECT * FROM wikis join users on wikis.id_user = users.id_utilisateur ORDER BY id_wiki DESC ");
        $sql->execute();
        $allWikis = $sql->fetchAll();
        return $allWikis;
    }



    }
    
    

    
    
    
    
    
    
    

    

?>

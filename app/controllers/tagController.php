<?php 

require_once '../models/tags.php';
class TagController {
    private $tags;

    public function __construct(){
        $this->tags = new TagModel();
    }

    public function getTags(){
        $result = $this->tags->selectTags();
        return $result;
    }
    public function addTag(){
        if (isset($_POST['submit']) and !empty($_POST['tag'])) {
            $tag = $_POST['tag'];
            $this->tags->setNomeTag($tag);
            if ($this->tags->insertTag()) {

                exit();
            }
        }
    }

    public function deleteTag(){
        if (isset($_GET['id_d'])){
            $idTagD = $_GET['id_d'];
            $this->tags->setIdTag($idTagD);
            $this->tags->deleteTag();
        }
    }
    public function updateTag(){
        if(isset($_GET['id_u'])){
            $idTagM = $_GET['id_u'];
            $nomTagM = $_GET['nom_tag_modif'];
            $this->tags->setIdTag($idTagM);
            $this->tags->setNomeTag($nomTagM);
            if($this->tags->updateTag()){
                header('location: ../views/tags.php');
                exit();
            }
            
        }
    }



}

$tagController = new TagController();
$resultt = $tagController->getTags();

if(isset($_POST['submit']) ){
    $tagController->addTag();
    header("Location: /WikisBrief/app/views/tags.php" );

}

if (isset($_GET['id_d'])) {

    $tagController->deleteTag();
   
    header("Location: /WikisBrief/app/views/tags.php" );
  
}

if(isset($_GET['id_u'])){

    $tagController->updateTag();

    header('location: /WikisBrief/app/views/tags.php ');

}

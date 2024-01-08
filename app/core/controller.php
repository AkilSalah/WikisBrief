<?php 
class Controller{

   public function model($model){
    require_once '../app/models/' .$model . '.php';
    return new $model();
} 
public function view($views,$data){
    require_once '../app/views/' . $views . '.php';
}
    

}

?>
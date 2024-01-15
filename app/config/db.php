<?php
class db {
    static public function connect(){
        $db = new PDO("mysql:host=localhost;dbname=wikis", "root", ""); 
        $db->exec("set names utf8");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        return $db;
    }
}

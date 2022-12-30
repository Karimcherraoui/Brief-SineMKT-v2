<?php

class Post {
    private $db;
     
    public function __construct(){
        $this->db = new Database;
    }
    /*
    public function  getPosts () {
    
    $this->db->query("SELECT * from posts");

    $results = $this->db->resultSet();
    
    }
*/
}
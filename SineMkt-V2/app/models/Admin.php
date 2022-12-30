<?php 
class admin {
    private $db;

    public function __construct(){
        $this->db = new Database;

    }

    //find user by email
    public function findUserByUsername($username){
        $this->db->query('SELECT * FROM admin WHERE username = $username');
        $this->db->bind('username', $username);

        $row = $this->db->single();


        // check row 
        if($this->db->rowCount() > 0 ){
            return true;
        }else{
            return false;

        }
        
    }
}


?>
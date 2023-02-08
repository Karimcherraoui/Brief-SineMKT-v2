<?php
class Admin
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // login user

    public function login($username, $password)
    {
        $this->db->query("SELECT * FROM admin WHERE username = :username");
        $this->db->bind(':username', $username);
        $row = $this->db->single();
        return $row;
    }


    // find user by username 
    public function findUserByUsername($username)
    {
        $this->db->query("SELECT * FROM admin WHERE username = :username ");
        $this->db->bind(':username', $username);

        $row = $this->db->single();

        // check row 
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function findUserByPassword($password)
    {
        $this->db->query("SELECT * FROM admin WHERE password = :password");
        $this->db->bind(':password', $password);
        $row = $this->db->single();
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}

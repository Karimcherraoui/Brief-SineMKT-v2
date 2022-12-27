<?php 

/*
 * PDO database class
 * connect to database
 * create prepared statement
 * bind values
 * return rows and results
 */

 class Database {
    private $host = DB_Host;
    private $user = DB_User;
    private $password = DB_Pass;
    private $dbname = DB_Name;

    private $dbh;

    private $stmt;
    private $error;

    public function __construct(){
        // set DSN
        $dsn = 'mysql:host=' . $this-> host . ';dbname=' . $this-> dbname.';port='.DB_port;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        try{
            $this->dbh = new PDO($dsn, $this->user, $this->password, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
                }
    }
 }
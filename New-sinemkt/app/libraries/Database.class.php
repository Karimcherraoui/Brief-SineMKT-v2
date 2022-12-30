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
    //prepare statement with quey
    
    public function query($sql){
        $this->stmt = $this->dbh->prepare($sql);
        
        
    }
    
    
    // bind values
    public function bind($param, $value, $type = null){
        if(is_null($type)){
            switch(true){
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;

            }
        }
        $type = PDO::PARAM_STR;
    }

    // execute statement
    public function execute(){
        return $this->stmt->execute();

    }
    // get result set as array af object
    public function resultSet(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    } 
    // get single record as object 
    public function single(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);

    }

    //get row count 

    public function rowCount(){
            return $this->stmt->rowCount();
    
        }

 }
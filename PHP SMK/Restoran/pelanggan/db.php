<?php 

class Db {
    // properti
    public $host = "127.0.0.1";
    private $user = "root";
    private $password = "";
    private $database = "cnrestoran";

    public function __construct()
    {
        echo "construct";
    }


    // method
    public function selectdata() 
    {
        echo 'select data';
    }
    public function getDatabase()
    {
        return $this->database;
    }
    public function tampil()
    {
        $this->selectdata();
    }

    public static function insert()  
    {
        echo "static function";
    }
}
    db::insert();

    $db = new Db;

    $db->selectdata();

    echo "<br>";

    echo $db->host;

    echo "<br>";
    
    echo $db->getDatabase();

    $db->tampil();

?>

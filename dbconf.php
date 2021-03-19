<?
class DBC 
{
    private $dbHost= "localhost";
    private $dbName= "test_encomage_db";
    private $dbUser= "root";
    private $dbPass= "root";
    protected function connect(){
        $conn = new mysqli($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        return $conn;
    }

 

}

?>
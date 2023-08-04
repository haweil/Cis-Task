<?php
//16 
class Dbh {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "oopphp";
    private $port = "3307";

    public function connect()
    {
        try {
            $dsn = 'mysql:host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->dbname;
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}
?>
<?php  
//17 
class test extends Dbh {
    public function getuser()
    {
        $sql = 'SELECT *FROM users'; 
        $stmt = $this->connect()->query($sql);
        while ($row =$stmt->fetch())
        {
            echo $row ['lastname']. "<br>";
        }
    }   
    public function getusersmt($firtsname,$lastname)
    {
        $sql = 'SELECT *FROM users WHERE firstname = ? AND lastname = ?'; 
        $stmt = $this->connect()->prepare($sql);
        $stmt ->execute([$firtsname ,$lastname]);
        $names = $stmt->fetchAll();
        foreach ($names as $name)
        {
            echo $name ['dateofbirth']. "<br>";
        }
    }   
}
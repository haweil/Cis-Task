<?php  

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

    public function setusersmt($firtsname,$lastname,$dob)
    {
        $sql = 'INSERT INTO users (firstname,lastname,dateofbirth) VALUES(?,?,?)'; 
        $stmt = $this->connect()->prepare($sql);
        $stmt ->execute([$firtsname ,$lastname,$dob]);
      
    }   
}
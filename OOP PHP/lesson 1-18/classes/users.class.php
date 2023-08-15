<?php
class users extends dbh
{
    public function getusers($name)
    {
        $sql ="SELECT * FROM users WHERE firstname = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);
        $result=$stmt->fetchAll();
        return $result;
    }
    public function setusers($firtsname,$lastname,$dob)
    {
        $sql = 'INSERT INTO users (firstname,lastname,dateofbirth) VALUES(?,?,?)'; 
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firtsname,$lastname,$dob]);
    }
}
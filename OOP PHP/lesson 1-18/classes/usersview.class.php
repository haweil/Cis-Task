<?php 
class UsersView extends users
 {
    public function showuser($name)
    {
        $result=$this->getusers($name);
        echo " Fullname :". $result[0]["firstname"]." ".$result[0]["lastname"]."<br>";
        echo "Date of birth :" . $result[0]["dateofbirth"];
    }
}
?>
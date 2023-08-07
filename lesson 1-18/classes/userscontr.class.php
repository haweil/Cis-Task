<?php 

class UsersContr extends users{
    public function createuser($firtsname,$lastname,$dob)
    {
        $this->setusers($firtsname,$lastname,$dob);
    }
}
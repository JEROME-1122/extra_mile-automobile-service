<?php


class LoginCntrl extends Login{
    private $username;
    private $password;

    public function __construct($username,$password){
    $this->username =  $username;
    $this->password = $password;
    }
    
    public function loginUser(){
        if($this->emptyInput() === false){
            header('location:../login.php?error=emptyinput');
            exit();
        }
        if($this->getUser($this->username,$this->password)){
            header('location:../logoutindex.php');
            exit();
        }
    }

    private function emptyInput(){
        $result;
        if(empty($this->username) || empty($this->password)){
          $result = false;
        }
        else
        {
         $result = true;
        }
        return $result;
    }
}


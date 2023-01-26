<?php

class Signup extends Dbh {

    protected function setUser($uid , $pwd ,$email){
        $stmt = $this->connect()->prepare('INSERT INTO user(users_uid,users_pwd,users_email) VALUES(?,?,?)');
        $hashedpwd = password_hash($pwd,PASSWORD_DEFAULT);
    
        if(!$stmt->execute([$uid,$hashedpwd,$email])){
        $stmt= null;
        header('location:../signin.php?error=stmterr');
        exit(); 
        }
    
        $resultCheck;
    
        if($stmt->rowCount>0){
         $resultCheck = false;
        }else{
         $resultCheck = true;
        }
        return $resultCheck;
        }


    protected function checkuser($uid , $email){
    $stmt = $this->connect()->prepare('SELECT users_uid FROM user WHERE users_uid=? OR users_email=?');

    if(!$stmt->execute([$uid,$email])){
    $stmt= null;
    header('location:../signin.php?error=stmterr');
    exit();
    }

    $resultCheck;

    if($stmt->rowCount()>0){
     $resultCheck = false;
    }else{
     $resultCheck = true;
    }
    return $resultCheck;
    }
}
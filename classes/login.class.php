<?php

class Login extends Dbh {

    protected function getUser($uid , $pwd ){
        $stmt = $this->connect()->prepare('SELECT users_pwd FROM user WHERE users_uid=? OR users_email=?');
    
    
        if(!$stmt->execute([$uid,$uid])){
        $stmt= null;
        header('location:../login.php?error=stmterr');
        exit(); 
        }
    
      if($stmt->rowCount()==0){
        $stmt = null;
        header('location:../login.php?error=useridnotfnd');
        exit();
      }
    
      $pwdhashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
      $checkpwd  = password_verify($pwd,$pwdhashed[0]['users_pwd']);
      
      if($checkpwd === false){
        $stmt= null;
        header('location:../login.php?error=passwordnotmatch');
        exit(); 
      }else if($checkpwd == true)
      {
        $stmt = $this->connect()->prepare('SELECT * FROM user WHERE users_uid=? OR users_email=? AND users_pwd=?');
        if(!$stmt->execute([$uid,$uid,$pwd])){
            $stmt= null;
            header('location:../login.php?error=stmterrin33');
            exit(); 
            }
            if($stmt->rowCount() == 0){
                $stmt= null;
                header('location:../login.php?error=usernotfound');
                exit(); 
                }
            return true;

      }
        }
     
}
<?php

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $pwd      = $_POST['pwd'];
    $con_pwd  = $_POST['confirmPwd'];
    $email    = $_POST['email'];

    include_once 'classes/db.class.php';
    include_once 'classes/signup.class.php';
    include_once 'classes/signup_cntrl.class.php';

    $signup = new SignupCntrl($username , $pwd , $con_pwd , $email);
    $signup->signupUser();
    
    header('location:../logoutindex.php');
}
?>
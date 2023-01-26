<?php

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $pwd      = $_POST['pwd'];

    include_once 'classes/db.class.php';
    include_once 'classes/login.class.php';
    include_once 'classes/login_cntrl.class.php';

    $login = new LoginCntrl($username , $pwd);
    $login->loginUser();
    
    header('location:../logoutindex.php');
}
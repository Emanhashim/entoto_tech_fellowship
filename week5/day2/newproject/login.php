<?php

//capture and show me code
include_once 'dblogin.php';
if(isset($_POST['user']) and isset($_POST['pass'])){
    //to show what is filled for the user like js alert msg
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    
    $db=new dblogin();
    $result=$db->userlogin($_POST['user'], $_POST['pass']);
    
    if($result=='1'){
        echo 'u r in';
        
    }else{
        echo 'incorrect username and password';
    }
    
    
//    echo $user;
//    echo $pass;
}

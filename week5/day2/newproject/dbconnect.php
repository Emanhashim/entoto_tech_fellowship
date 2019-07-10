<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dbconnect
 *
 * @author EMAN HASHIM
 */
class dbconnect {
    //put your code here
    private $conn;
    //constractor to call in other pages likewise n also i can call it from anywhere
    function __construct() {
        
}

function connect(){
  $host='localhost';
  $user='root';
  $pass='';
  $dbname='php1';
  //here am loading connection
  $this->conn=new mysqli($host,$user,$pass, $dbname);
          return $this->conn;
  
}
}

<?php
include_once 'dblogin.php';
if (isset($_POST['FullName']) and isset($_POST['Age']) and isset($_POST['Phone'])and isset($_POST['Email'])){
$Fullname=$_POST['FullName'];
$Age=$_POST['Age'];
$Phone=$_POST['Phone'];
$Email=$_POST['Email'];

$db=new dblogin();
$result=$db->signup($Fullname, $Age, $Phone, $Email);
if($result=='1'){
    echo 'suceess inserted';
}else{
    echo'error';
}
//
//echo $Fullname;
//echo $Age;
//echo $Phone;
//echo $Email;

}

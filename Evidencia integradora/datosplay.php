<?php
if(isset($_POST['sumbit'])){
header("location:ticket1.php");
}
session_start();
$_SESSION['CANTIDAD1']= $_REQUEST["cantidad1"];
if(isset($_REQUEST['discos'])){
$_SESSION['PRECIO1']=13500;
}
	
?>
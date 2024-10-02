<?php
if(isset($_POST['sumbit'])){
header("location:ticket2.php");
}
session_start();
$_SESSION['CANTIDAD2']= $_REQUEST["cantidad2"];
if(isset($_REQUEST['xbox'])){
$_SESSION['PRECIO2']=14000;
}
	
?>
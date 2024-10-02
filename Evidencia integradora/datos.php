<?php
if(isset($_POST['sumbit'])){
header("location:ticket.php");
}
session_start();
$_SESSION['CANTIDAD']= $_REQUEST["cantidad3"];
if(isset($_REQUEST['nswitch'])){
$_SESSION['PRECIO']=13000;
}
	
?>
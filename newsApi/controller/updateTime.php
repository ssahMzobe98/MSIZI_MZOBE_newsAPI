<?php
session_start();
if(isset($_SESSION['id'])){
	include_once("pdo.php");
	$API_tr=new mzobeNewsApi();
	$API_tr->autoload();
}
else{
	session_destroy();
	header("Location:../?error=Warning: Illigal Attempt!!");exit();
}
?>
<?php
session_start();
if(isset($_SESSION['id'])){

	include_once("../controller/pdo.php");
	include_once("../controller/mzoebeNews.php");
}
else{
	session_destroy();
	header("Location:../?error=Warning: illegal attempt!!");exit();

}

?>
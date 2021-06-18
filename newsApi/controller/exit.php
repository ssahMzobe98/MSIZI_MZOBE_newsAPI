<?php
session_start();
if(isset($_SESSION['id'])){
	include_once("pdo.php");
	$_=$_SESSION['id'];
	if($conn->query("update user set isloggedin='0' where username='$_'")){
		if($conn->query("insert into loginattempt(username,status,time_attempt) values('".$_."','-1',NOW())")){
			unset($_);
			session_destroy();
			header("Location:../?success=logout successful");exit();

		}
		else{
			echo "failed to inset : error: ".$conn->error;exit();
		}
	}
	else{
		echo"Failed to logout!!";exit();
	}
}
else{
	session_destroy();
	header("location:../?Warning: Illegal Attempt!!");exit();
}

?>
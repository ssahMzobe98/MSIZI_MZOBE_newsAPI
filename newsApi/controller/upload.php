<?php
session_start();
if(isset($_SESSION['id'])){
	include_once('pdo.php');
	$response="null";
	if(isset($_GET['api'])){
		$country=$_POST['country'];
		$oop=new mzobeNewsApi();
		$response=$oop->getMzobeNews($country);
	}
	else{
		$itm_id=$_POST['id'];
		if(empty($itm_id)){
			$response="cannot update empty article_id";
		}
		else{
			$_=mysqli_fetch_array($conn->query("select view_count from newsdb where item_id='$itm_id'"))['view_count'];
			$_++;
			if($conn->query("update newsdb set view_count='$_' where item_id='$itm_id'")){
				$response="success";
			}
			else{
				$response="failed";
			}
			
		}
	}
	
	echo json_encode($response);
	$conn->close();
}
else{
	session_destroy();
	header("Location:../?error=Warning: Illigal Attempt!!");exit();
}
?>
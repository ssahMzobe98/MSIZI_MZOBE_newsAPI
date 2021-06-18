<?php
// validating the sign up form
// only access if statement if condition is true
if(isset($_POST['signup'])){
	// including pdo file to access db_connection 
	// to store/save data to the correct DB
	include_once("../controller/pdo.php");
	$_=mysqli_escape_string($conn,$_POST['email']);
	$_0=mysqli_escape_string($conn,$_POST['fname']);
	$_01=mysqli_escape_string($conn,$_POST['lname']);
	$_1=hash('sha256',mysqli_escape_string($conn,$_POST['pass']));//Password ecnryption using sha256, I COULD HAVE CREATED MY OWN, BUT I THOUGHT MAYBE YOU WOULD PREFER EXISTING/BUILTIN HASH FUNCTION.
	$s=0;
$a=0;
	//i could have created my own encyphering method.
	// SELECTING QUERY FROM DATA BASE 
	$_11="select username from user where username=? Limit 1";
	$stmt = $conn->prepare($_11);
	$stmt->bind_param("s", $_11);
	$stmt->execute();
	$stmt->bind_result($_11);
	$stmt->store_result();
	$rnum = $stmt->num_rows;
	if($rnum==1){
		// CHECKING IF USERNAME EXISTS
		header("Location:../signup.php?error=username already taken");exit();
	}
	else{

		if($conn->query("insert into user(username,firstname,lastname,password,isadmin,isloggedin,about,time_reg)values('$_','$_0','$_01','$_1','$s','$a','$a',NOW())")){
			header("Location:../?success=Account Created successfuly");exit();
		}
		else{
			header("Location:../signup.php?error=".$conn->error);exit();
		}
	}
}
// validating the sign up form
// only access if statement if condition is true
elseif(isset($_POST['login'])){
	// including pdo file to access db_connection 
	// to store/save data to the correct DB
	include_once("../controller/pdo.php");
	$_=mysqli_escape_string($conn,$_POST['email']);

	$_1=hash('sha256',mysqli_escape_string($conn,$_POST['pass']));

	$_11="select username AND password from user where username=? AND password=? Limit 1";
	$stmt = $conn->prepare($_11);
	$stmt->bind_param("ss", $_,$_1);
	$stmt->execute();
	$stmt->bind_result($_);
	$stmt->store_result();
	$rnum = $stmt->num_rows;
	if($rnum==1){
		session_start();
		$_SESSION['id']=$_;
		if($conn->query("update user set isloggedin='1' where username='$_'")){
			if($conn->query("insert into loginattempt(username,status,time_attempt) values('".$_."','1',NOW())")){
				header("Location:../view");exit();
			}
			else{
				$error=$conn->error;
			}
			
		}
		else{
			$error=$conn->error;
		}
		session_destroy();
		header("Location:../?error=".$error);exit();

	}
	else{
		if($conn->query("insert into loginattempt(username,status,time_attempt) values('".$_."','0',NOW())")){
			header("Location:../?error=username/password incorrect&p=1");exit();
		}
		header("Location:../?error=username/password incorrect");exit();
	}
}
?>
?>
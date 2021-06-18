<?php
if(isset($_SESSION['id'])){
	$map=new mzobeNewsApi();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mzobe News 24/7</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='dns-prefetch' href='//fonts.googleapis.com' />
	<link rel='dns-prefetch' href='//s.w.org' />
	<link rel="alternate" type="application/rss+xml" title="Mzobe News &raquo; Feed" href="#/feed/" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/indexa.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>
<style>

</style>
<body>
<center>
<header>
	<div class="header">

		<div class="nav2 left flex">
			<a href="./">
				<div class="nav"><i  class="fa fa-hacker-news" style="font-size:50px;float:left;color:red;" aria-hidden="true"></i></div>
			</a>

			<div class="time flex" id="displayCurrentTime"></div>
		</div>
		<div class="nav3 right" style="<?php if(isset($_GET['nav']) && $_GET['nav']=="top_stories"){echo "background-color: navy;border: 1px solid #f3f3f3;";}?>">
			<a href="./?nav=top_stories">
				<div class="nav"><h6 style="color:#f3f3f3;">Top Stories</h6></div>
			</a>
		</div>
		<div class="nav3 right" style="<?php if(!isset($_GET['nav'])){echo "background-color: navy;border: 1px solid #f3f3f3;";}?>" >
			<a href="./">
				<div class="nav"><h6 style="color:#f3f3f3;">Today's News</h6></div>
			</a>
		</div>
		<div class="nav1 right" style="<?php if(isset($_GET['nav']) && $_GET['nav']=="yesterday"){echo "background-color: navy;border: 1px solid #f3f3f3;";}?>">
			<a href="./?nav=yesterday">
				<div class="nav"><h6 style="color:#f3f3f3;">yesterday</h6></div>
			</a>
		</div>
		<div class="nav1 right" style="<?php if(isset($_GET['nav']) && $_GET['nav']=="2_days_ago"){echo "background-color: navy;border: 1px solid #f3f3f3;";}?>">
			<a href="./?nav=2_days_ago">
				<div class="nav"><h6 style="color:#f3f3f3;"></i>2 days ago</h6></div>
			</a>
		</div>
		<div class="nav1 right" style="<?php if(isset($_GET['nav']) && $_GET['nav']=="3_days_ago"){echo "background-color: navy;border: 1px solid #f3f3f3;";}?>">
			<a href="./?nav=3_days_ago">
				<div class="nav"><h6 style="color:#f3f3f3;">+3 days ago</h6></div>
			</a>
		</div>
		<div class="nav1 right">
			<a href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
				<div class="nav"><h6 style="color:#f3f3f3;"></i>About Me</h6></div>
			</a>
		</div>
		<div class="nav1 right">
			<a href="../controller/exit.php">
				<div class="nav"><h6 style="color:#f3f3f3;">Logout</h6></div>
			</a>
		</div>
		

	</div>


</header>
<script>
	$(document).ready(function(){
		$.ajaxSetup({cache:false});
		window.setInterval(function(){
			$("#displayCurrentTime").load("../controller/updateTime.php");
		},100);
	});
</script>
<style>
	.modal{
		align-content: left;
		justify-content: left;
		text-align: left;
	}
	.modal .modal-dialog{
		align-content: left;
		justify-content: left;
		text-align: left;
	}
	.modal .modal-dialog .modal-content{
		align-content: left;
		justify-content: left;
		text-align: left;
	}
	.attemptHistory{
		height: 20vh;
		overflow-y: auto;
		color: navy;
	}
	
</style>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          <h4 class="modal-title"><center><h3>About</h3></center> <?php $map->getUser($_SESSION['id']);?></h4>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<?php
}
else{
	session_destroy();
	header("Location:../?error=warning: Illegal Attempt!!");exit();
}
?>

<!DOCTYPE html> 
<!--  -->
<html>
<head>
  <title>Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="Mr M.S Mzobe">
	<link rel='dns-prefetch' href='//s0.wp.com' />
	<link rel='dns-prefetch' href='#'/>
	<link rel='dns-prefetch' href='//fonts.googleapis.com' />
	<link rel='dns-prefetch' href='//s.w.org' />
	<link rel="alternate" type="application/rss+xml" title="Samble Site &raquo; Feed" href="#/feed/" />
	<link rel="alternate" type="application/rss+xml" title="Samble Site &raquo; Comments Feed" href="#/feed/" />
	<link rel="stylesheet" type="text/css" href="css/index11.css">
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
<style></style>
</head>
<body>
<center>
	<div class="content">
		<div class="arr">
			<div class="sub-body">
				<h2 class="login">Hacker News Login</h2>
			</div>
			<form action="model/validation.php" method="post">
				
				<div class="media-content">
						<i  class="fa fa-hacker-news" style="font-size:58px;color:orangered;" aria-hidden="true"></i>
				</div>
				<br>
				<hr style="color:#f3f3f3;">
				<div class="media-content"><label>Email Address/username</label></div>
				<div class="media-content"><input title="Enter Email Address" type="email" name="email" placeholder="Enter Email/username" required></div>
				<div class="media-content"><label>Password</label></div>
				<div class="media-content"><input title="Enter Password" type="password" name="pass" placeholder="Enter Password" required></div>
				<br>
				<div class="media-content">
					<div class="button"><button type="submit" name="login" class="btn-subm">Login</button></div>
				</div>
            </form>
			<div class="error"><?php if(isset($_GET["error"])){echo $_GET['error'];}?></div>
			<div class="success"><?php if(isset($_GET["success"])){echo $_GET['success'];}?></div>
			<div class="late flex">
				<div class="late-aff"> <a href="password.php"><div class="left">Forgot Password</div></a> </div>
				<div class="late-aff"> <a href="signup.php"><div class="right">Sign Up</div></a> </div>
			</div>

		</div>
	</div>
</center>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ghi Chú</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<?php
	if ($user)
	{
		echo '
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-header">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>						
					</div> 
					<div class="collapse navbar-collapse" id="nav-header">
					    <ul class="nav navbar-nav navbar-left">  	
						<li>
						<a href="index.php">
						<span class="glyphicon glyphicon-user"></span> Home
						</a>
						</li>
						<li>
						<a href="index.php?ac=uploads_note">
							<span class="glyphicon glyphicon-arrow-up"></span> Tải ghi chú lên
						</a>
						</li>	
					      	<li>
					      		<a href="index.php?ac=create_note">
					      			<span class="glyphicon glyphicon-plus"></span> Ghi chú mới
					      		</a>
					      	</li>
							  </ul>
							  <ul class="nav navbar-nav navbar-right">  
					      	<li>
							  <li>
							  <a href="index.php?ac=change_password">
								  <span class="glyphicon glyphicon-retweet"></span> Đổi mật khẩu
							 </a>
						 </li>
					        <li>
					         	<a href="signout.php">
					         		<span class="glyphicon glyphicon-log-in"></span> Thoát
					    		</a>
					    	</li>
					    </ul>
					</div>
				</div>
			</nav>
		';
	}
	?>
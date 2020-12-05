<?php
	if(isset($_POST["Submit1"]))
	{
		if (($_POST["username"] == "admin") && ($_POST["password"] == "123")) {
			header("Location:adminPage.php");
		} else 
			echo "Incorrect login or password!";
	}
?>

<html>
<head>
	<title>PLACES</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<span class="logo">PLACES</span>
	</div>
	
	<nav class="navbar navbar-expand-lg navbar-light ">
		<div class="container">
			<div class="collapse navbar-collapse justify-content-center">
				<ul class="nav navbar-nav navbar-center">
				
					<li class="nav-item active">
						<a href="index.php" class="nav-link">HOME</a>
					</li>
					<li class="nav-item">
						<a href="places.php" class="nav-link">PLACES</a>
					</li>
					<li class="nav-item">
						<a href="gallery.php" class="nav-link">GALLERY</a>
					</li>
					<li class="nav-item">
						<a href="admin.php" class="nav-link">ADMIN</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div class="container">
	
	
	
	<div class="separator100px"></div>
	<h3>Login as Admin</h3>
	<form id="login" method="post">
			<table>
				<tr>
					<td><input type="username" name="username" placeholder="admin" style="padding:10px;"><td><br>
				</tr>
				<tr>
					<td><input type="password" name="password" placeholder="password" style="padding:10px;"><td>
				</tr>
				<tr>
					<td><input type="submit" value="LOGIN" name="Submit1" style="padding:10px;"><td>
				</tr>
			</table>
		</form>
	</div>
	<div class="separator100px"></div>

		
		
	
	
<footer>
	<div class="container">
		<div class="row">

			<div class="col-sm-3">
				<div class="float-right">
					<h2>PLACES</h2>
				</div>
			</div>
			
			<div class="col-sm-6">
				<div class="float-left" style="line-height: 2;">
					<p>is a collection of landmarks from all over the country that you can explore and visit. The project allows you to choose the date of an available trip and go on an unforgettable journey. This site allows everyone, without exception, to experience all the beauties of the country in which we live - Kazakhstan.</p>
				</div>
				
			</div>
			
			<div class="col-sm-3">
				<div class="float-left">
					<ul style="line-height: 2;">
						<li><a class="footerLinks" href="index.php">HOME</a></li>
						<li><a href="places.php">PLACES</a></li>
						<li><a href="gallery.php">GALLERY</a></li>
						<li><a href="admin.php">ADMIN</a></li>
					</ul>
				</div>
				
			</div>
		</div>
	</div>
</footer>
<script src="script.js"></script>
</body>
</html>
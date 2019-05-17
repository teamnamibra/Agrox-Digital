<?php
	include 'dbh/db.php';
    include 'dbh/db_functions.php';
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Login</title>

   

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap1.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/logincss.css">
<script src="js/fontawesome-all.js"></script>

</head>
<body>


	<!-- user-form -->
	<div class="container d-flex flex-column justify-content-center">
		<form action="login.php" method="POST" role="form">
			<legend style="font-family: cursive;" id="loginTitle">Login</legend>
		
			<!-- username -->
			<div class="form-group">
				<div class="awesome">
					<label for="#user_name"></label>
					<i class="fa fa-user"></i>
					<input type="text" class="form-control" id="user_name" name="username" placeholder="username">
				</div>
			</div>

			<!-- user password -->
			<div class="awesome">
				<i class="fa fa-lock"></i>
				<input type="password" name="password" id="input" class="form-control" placeholder="password">
			</div>
			
			
			<!-- checkbox of remembrance -->
			<div class="checkbox">
				<label>
					<input type="checkbox" name="remember" value="remember">
					Remember password
				</label>
			</div>

			<div class="linkup">
				<a href="#">Forgotten password?</a>
				<a href="user_signup.php" style="float: right;">New Account</a>
			</div>
			
			<br>
			
			<button type="submit" name="login" class="btn btn-primary btn-block">Sign in</button>
		</form><br>

		<?php
			if(isset($_GET['error'])){
				$error = $_GET['error'];
				if($error == 'empty'){
					echo '<p class="text-center" style="font-weight:600px;">All fields are required</p>';
				}
				elseif($error == 'username'){
					echo '<p class="text-center" style="font-weight:600px;">User not found</p>';
				}
				elseif($error == 'password'){
					echo '<p class="text-center" style="font-weight:600px;">Invalid password</p>';
				}
			}

		?>

		

	</div>





<script src="js/jquery-3.3.1.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>
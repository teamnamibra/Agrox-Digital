<?php
	$page_title = 'AgroX | Home';
	include 'dbh/db.php';
	include 'dbh/db_functions.php';
	

	
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>AgroX</title>
  <link rel="icon" type="image/png" href="img/logo2.png">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">

  <style>
	  html{
		  background-image:url("img/veg4.jpg");
		  background-repeat:no-repeat;
		  background-size:cover;
	  }

	  
  </style>

</head>
<body class="mx-5">
  


    <div class="container my-5">
        <div class="signup">
	
            <form action="signup.php" method="POST" role="form" class="px-2 py-4">

                <legend id="Title">Sign up</legend>
				<hr style="background-color:#17a2b8">
				
				  <?php
				  	if(isset($_GET['success'])){
						echo '<p style="color:green;" class="text-center">Sign up successful. <strong><a href="user_login.php">Click to Login</a></strong></p>';
					}

					if(isset($_GET['error'])){
						echo '<p style="color:red;" class="text-center">An error occured.</p>';
					}
				  ?>
                

                <!-- this div keeps lname and fname in the same line -->
            <div class="row">
                    <!-- fname -->
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <!-- first col -->
                    <div class="form-group">
                    <i class="fa fa-user"></i>
                    <input type="text" class="form-control" id="user_name" name="fname" placeholder="First name">
                    </div>
                </div>
                

                <!-- lname -->
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <!-- second col -->
                    <div class="form-group">
                    <i class="fa fa-user"></i>
                    <input type="text" class="form-control" id="user_name" name="lname" placeholder="Last name">
                    </div>
                </div>
                
                    
            </div>
                <br>

                <!-- username -->
                <div id="user_fullname">
                    <i class="fa fa-user"></i>
                    <input type="text" name="username" id="inputUsername" class="form-control" placeholder="Username">
                </div>	
                <br>


                <!-- password -->
                <div id="user_password">
                    <i class="fa fa-lock"></i>
                    <input type="password" name="password" id="inputPass" class="form-control"  required="required" title="" placeholder="Password">	
                </div>
                <br>

                <div id="user_password">
                    <i class="fa fa-lock"></i>
                    <input type="password" name="confirm_password" id="inputPass" class="form-control"  required="required" title="" placeholder="Confirm Password">	
				</div><br>
				
				<div class="form-group">
                    <i class="fa fa-user"></i>					
					<select name="status" id="" class="form-control">
						<option value="">Select category...</option>
						<option value="farmer">Farmer</option>
						<option value="agent">Agent</option>
					</select>
				</div>
                    

                    <!-- email -->
                <div id="userMail">
                    <i class="fa fa-envelope"></i>
                    <input type="email" name="email"  id="inputMail" class="form-control" value="" required="required" title="" placeholder="Email">
                </div><br>
                
            
                <button type="submit" class="btn btn-success btn-block text-center btn-block" name="signup">Sign up</button>
            </form>
        </div>

    </div>

  



  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>


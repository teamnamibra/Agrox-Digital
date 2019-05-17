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
  <title>About</title>
  <link rel="icon" type="image/png" href="img/logo2.png">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
  <!-- navigation bar starts here -->
  <nav class="navbar navbar-dark bg-success navbar-expand-lg py-0 sticky-top">
    <div class="container">
      <a href="#" class="navbar-brand">AgroX</a>
      <div class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </div>
      <div class="navbar-collapse collapse" id="navbarCollapse">
        <!-- Left navigation links -->
        <ul class="navbar-nav">
          <li class="nav-item px-2 <?php if($page_title == 'AgroX | Home'){echo 'active';} ?>">
            <a href="index.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item px-2 <?php if($page_title == 'AgroX | About'){echo 'active';} ?>">
            <a href="" class="nav-link">About us</a>
          </li>
          <li class="nav-item px-2 <?php if($page_title == 'AgroX | Team'){echo 'active';} ?>">
            <a href="team.php" class="nav-link">Our Team</a>
          </li>
          <li class="nav-item px-2 <?php if($page_title == 'AgroX | Contact'){echo 'active';} ?>">
            <a href="" class="nav-link">Contact us</a>
          </li>
        </ul>
        <!-- Left navigation ends links -->

        <!-- right navigation links -->
        <ul class="navbar-nav ml-auto">
          <!-- account options -->
          <li class="nav-item px-2 active dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="#profileDrop"><span class="fa fa-user"></span> Account</a>
            <div class="dropdown-menu" id="profileDrop">
              <a href="user_login.php" class="dropdown-item"><span class="fa fa-sign-in"></span> Log in</a>
              <a href="user_signup.php" class="dropdown-item"><span class="fa fa-user-circle"></span> Sign up</a>
            </div>
          </li>
        </ul>
        <!-- right navigation links -->
      </div>
    </div>
  </nav>
  <!-- Nav ends here -->





  <div class="container">
      <div class="row">
          <div class="col text-center">
              <div class="main-content mt-5" id="main">
                <p class="lead">
                            AgroX was established in 2019 by Namibra Inc. to assist smallholder farmers to attain the resources and requirement in expanding their farms. The focus is on giving the right information to the famers about the current market standard and fairness between the buyers and the famers.

                </p>
                <p>
                            <h2>THE PROBLEM</h2>
                            Farmers are forced to sell at a lower price to retailers due to the lack of scalability and access to information about the market. A bag of pepper today can be sold at a lower price and tomorrow at a higher price because the farmers are handicapped by the retailers. 


                </p>

                <p>
                            <h2>OUR SOLUTION</h2>
                            
                            Our system provide a secure transaction platform between retailers and buyers, and also gives information on weather forecast, current market standards, best farming practices and pest control. Xinfo and Xpay are basically the solution for solving these particular problems.

                </p>
              </div>
          </div>
      </div>
  </div>

<?php include 'footer.php'; ?>



  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>


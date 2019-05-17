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
            <a href="about.php" class="nav-link">About us</a>
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



    <!-- Image Carousel starts here -->
      <div class="carousel slide" data-ride="carousel" id="imgCarousel" data-interval="3000" data-pause="false">


        <!-- Carousel indicators start here -->
          <ol class="carousel-indicators">
              <li data-target="#imgCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#imgCarousel" data-slide-to="1"></li>
              <li data-target="#imgCarousel" data-slide-to="2"></li>
          </ol>
        <!-- Carousel indicators end here -->

          <!-- Container for pictures -->
          <div class="carousel-inner" role="listbox">

              <div class="carousel-item active">
                  <img src="img/veg1.jpg" alt="" class="img-fluid d-block" style="width:100%; height:550px;">
                  <div class="carousel-caption d-none d-md-block">
                    <div class="container">
                      <h3 class="display-2">AgroX</h3>
                      <p class="lead">
                          We connect farmers to buyers and buyers to farmers all over Ghana.
                          The lack of an access to a structured market results in smallholder farmers being forced to sell to middlemen who buy at ridiculously exploitative prices. The lack of access to finance also means farmers are never able to move from being smallholders to middle level or even commercial farmers. 

                        </p>
                        <a href="#main" class="btn btn-lg btn-outline-light">Read more</a>
                    </div>
                      
                  </div>
              </div>

              <div class="carousel-item">
                  <img src="img/veg2.jpg" alt="" class="img-fluid d-block" style="width:100%; height: 550px;;">
                  <div class="carousel-caption d-none d-md-block">
                    <div class="container">
                      <h3 class="display-2">Mission &amp; Vision</h3>
                      <p class="lead">
                          Onboarding smallholder farmers onto the AgroX platform. Agents visit communities where smallholder farmers who deal in sorghum, rice, maize, millet and soybean are registered onto the AgroX platform to trade. Agents also work with farmer based organizations (FBOs) to carry out trading activities.
                        </p>
                        <a href="#main" class="btn btn-lg btn-outline-light">Read More</a>
                    </div>
                      
                  </div>
              </div>

              <div class="carousel-item">
                  <img src="img/veg4.jpg" alt="" class="img-fluid d-block" style="width:100%; height: 550px;">
                  <div class="carousel-caption d-none d-md-block">
                    <div class="container">
                      <h3 class="display-2">Meet Farmers</h3>
                      <p class="lead">
                          Gathering market information and statistical data. Agents are assigned to major trading markets across the country to collate data on market pricing for various commodities. This information is relayed to smallholder farmers via Voice technologies in languages they read and understand. 

                        </p>
                        <a href="#main" class="btn btn-lg btn-outline-light">Read More</a>
                    </div>
                      
                  </div>
              </div>
              

          </div>

          <!-- Carousel controls start here -->
          <a href="#imgCarousel" class="carousel-control-prev" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
          </a>
          <a href="#imgCarousel" class="carousel-control-next" data-slide="next">
              <span class="carousel-control-next-icon"></span>
          </a>
          <!-- Carousel controls end here -->


      </div>
      <!-- Image Carousel ends here -->




  <div class="container">
      <div class="row">
          <div class="col text-center">
              <div class="main-content mt-5" id="main">
                <p class="lead">AgroTrade is a comprehensive supply chain platform that has smallholder farmers on one end and large off-takers on the other end so they can trade directly. This ensures farmers are paid very fair prices for their commodities and also allows them to sell in bulk since the off-takers are typically very large companies ranging from breweries to feed manufacturers. 
                </p>
                <p>
                  AgroInfo & AgroPay, our financial inclusion platform provides any smallholder farmer who has traded on AgroX with a financial ('bank') statement they can use to get access to finance. Some financial institutions focused on smallholder farmers financing have used AgroPay to better understand which farmers are risk-free to access loans. We have within a short time been able to increase the income of farmers within our network by almost 25%. 

                </p>

                <p>
                  Onboarding smallholder farmers onto the AgroX platform. Agents visit communities where smallholder farmers who deal in sorghum, rice, maize, millet and soybean are registered onto the AgroX platform to trade. Agents also work with farmer based organizations (FBOs) to carry out trading activities. 

                </p>
              </div>
          </div>
      </div>
  </div>

<!-- Footer Start Here -->


<link rel="stylesheet" href="./css/footerbootstrap.css">
<link rel="stylesheet" href="./css/animate.css">
<link rel="stylesheet" href="./css/icomoon.css">
<link rel="stylesheet" href="./css/superfish.css">
<link rel="stylesheet" href="./css/magnific-popup.css">
<link rel="stylesheet" href="./css/footerstyle.css">








<footer>
      <div id="footer" styl="width:auto;">
        <div class="container">
          <div class="row row-bottom-padded-md">
            <div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
                        <h3>Company</h3>
              <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Our Team</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">Career</a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
                        <h3>Services</h3>
              <ul>
                <li><a href="#">Web Development</a></li>
                <li><a href="#">Design Strategy</a></li>
                <li><a href="#">UI/UX Planning</a></li>
                <li><a href="#">Photographer</a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
              <h3>Our Apps</h3>
              <ul>
                <li><a href="#">Mobile Application</a></li>
                <li><a href="#">Online Payment</a></li>
                <li><a href="#">Time Monitoring</a></li>
                <li><a href="#">Andriod Payment Gateway</a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
              <h3>Downloads</h3>
              <ul>
                <li><a href="#">Apple Store</a></li>
                <li><a href="#">Google Play</a></li>
                <li><a href="#">Windows Store</a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
                        <h3>Connect</h3>
              <ul>
                <li><a href="#"><i class="icon-twitter2"></i> Twitter</a></li>
                <li><a href="#"><i class="icon-facebook2"></i> Facebook</a></li>
                <li><a href="#"><i class="icon-google2"></i> Google</a></li>
                <li><a href="#"><i class="icon-linkedin2"></i> Linkedin</a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
              <!-- <h3>Connect</h3>
              <ul>
                <li><a href="#"><i class="icon-twitter2"></i> Twitter</a></li>
                <li><a href="#"><i class="icon-facebook2"></i> Facebook</a></li>
                <li><a href="#"><i class="icon-google2"></i> Google</a></li>
                <li><a href="#"><i class="icon-linkedin2"></i> Linkedin</a></li>
              </ul> -->
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
              <p class="fh5co-social-icons">
                <a href="#"><i class="icon-twitter2"></i></a>
                <a href="#"><i class="icon-facebook2"></i></a>
                <a href="#"><i class="icon-instagram"></i></a>
                <a href="#"><i class="icon-dribbble2"></i></a>
                <a href="#"><i class="icon-youtube"></i></a>
              </p>
              <p>Copyright &copy; 20<?php echo(date('y'));?> <a href="#">Agrox</a>. All Rights Reserved.
            </div>
          </div>
        </div>
      </div>
    </footer>



  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>


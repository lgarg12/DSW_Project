<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Login</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
<?php
$conn =mysqli_connect("localhost","root","tiger","MedicineDB");
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $Email=$_POST['email'];
  $username=$_POST['Uname'];
  $password=$_POST['pass'];
  mysqli_query($conn,"Insert Into users VALUES('$Email','$username','$password')");
  header('location: /DSW_Project/afterLogin.html');
  exit;
}?>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              Medicine Booking
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item ">
                  <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="about.html"> About <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="gallery.html"> Medicine's </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact us</a>
                </li>
              </ul>

            </div>
            <div class="quote_btn-container ">
              <a href="Login.php">
                Log in
              </a>
              <a href="">
                <img src="#" alt="">
              </a>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>


  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container ">
      <div class="heading_container justify-content-center">
        <h2 class="">
          Sign Up
        </h2>
      </div>

    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <form method="POST" action="signup.php">
          <div>
              <input type="email" placeholder="Email" name="email" required/>
            </div>
            <div>
              <input type="text" placeholder="User Name" name="Uname" required/>
            </div>
            <div>
              <input type="password" placeholder="Password" name="pass" required/>
            </div>
            <div class="d-flex  mt-4 ">
              <button>SignUp</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->


  <!-- info section -->
  <section class="info_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_logo">
            <h5>
              Medicine Booking
            </h5>
            <p>
              Medicine is not only a science; it is also an art. 
			  It does not consist of compounding pills and plasters;
			  it deals with the very processes of life, which must be 
			  understood before they may be guided.
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_links pl-lg-5">
            <h5>
              Useful Link
            </h5>
            <ul>
              <li>
                <a href="index.html">
                  Home
                </a>
              </li>
              <li>
                <a href="about.html">
                  About
                </a>
              </li>
              <li>
                <a href="gallery.html">
                  Medicine's
                </a>
              </li>
              <li>
                <a href="contact.html">
                  Contact Us
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_insta">
            
              Contact
            </h5>
            <div>
              <img src="images/location-white.png" alt="">
              <p>
                we are available all over the country
              </p>
            </div>
            <div>
              <img src="images/telephone-white.png" alt="">
              <p>
                +91 1234567890
              </p>
            </div>
            <div>
              <img src="images/envelope-white.png" alt="">
              <p>
                hahamail@gmail.com
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->

  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <p>
      &copy; <span id="displayYear"></span> All Rights Reserved | Created By <span id="names"> Pulkit Narsaria ,Vaibhav Bansal and Kunal Yadav </span>
    </p>
  </footer>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

</body>

</html>

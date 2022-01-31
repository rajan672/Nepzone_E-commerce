<?php
include('../database-connect.php');

if (!isset($_SESSION)) {
  session_start();
}

$error = NULL;

if (isset($_POST['submit'])) {
  //get form data
  $name = $_POST['name'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $rpass = $_POST['rpass'];

  if (strlen($name) < 5) {
    $error = "your name is too short";
  } elseif ($rpass != $pass) {
    $error .= " your password do not match";
  } else {
    //form is valid

    //sanitize form data
    $name = $conn->real_escape_string($name);
    $mobile = $conn->real_escape_string($mobile);
    $email = $conn->real_escape_string($email);
    $pass = $conn->real_escape_string($pass);
    $rpass = $conn->real_escape_string($rpass);

    //generate Vkey
    $vkey = md5(time() . $name);
    //echo $vkey;

    //increpet my password
    //$pass = md5($pass);
    $insert = $conn->query("INSERT INTO register(name,email,mobile,password,vkey) VALUES('$name' , '$email' , '$mobile' , '$pass' , '$vkey')");

    if ($insert) {
      //echo "success";

      /* include('smtp/PHPMailerAutoload.php');
      $html = " <a href='http://localhost/Nepzone/members/register.php?vkey=$vkey' > Register Account </a> ";
      smtp_mailer('rajan.rs998@gmail.com', 'subject', $html);
      function smtp_mailer($to, $subject, $msg)
      {
        $mail = new PHPMailer();
        $mail->SMTPDebug  = 3;
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587;
        $mail->IsHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Username = "nepzone987@gmail.com";
        $mail->Password = "9804261675";
        $mail->SetFrom("nepzone987@gmail.com");
        $mail->Subject = $subject;
        $mail->Body = $msg;
        $mail->AddAddress($to);
        $mail->SMTPOptions = array('ssl' => array(
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => false
        ));
        if (!$mail->Send()) {
          echo $mail->ErrorInfo;
        } else {
          return 'Sent';
        }
      } */

      //send email
      $to = $email;
      $subject = "Email Verification";
      $message = " <a href='http://localhost/Nepzone/members/verify.php?vkey=$vkey' > Register Account </a> ";

      $header = "From:nepzone987@gmail.com \r\n";
      $header .= "Cc:nepzone987@gmail.com \r\n";
      $header .= "MIME-Version: 1.0\r\n";
      $header .= "Content-type: text/html\r\n";

      mail($to, $subject, $message, $header);
      $msg = '<div class="alert alert-success text-center col-sm-12 mi-5 mt2">Registeration successfull. Now check our email and verify your email id.</div>';
    } else {
      echo $conn->error;
      $msg = '<div class="alert alert-warning text-center col-sm-12 mi-5 mt2">Unable to register.</div>';
    }
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>NepZone || product</title>

  <!-- jquery plugin for magnifying image -->
  <link rel="stylesheet" type="text/css" href="../css/jquery.simpleGallery.css">
  <link rel="stylesheet" type="text/css" href="../css/jquery.simpleLens.css">

  <!-- link style.css file -->
  <link rel="stylesheet" href="../css/style.css">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">

  <!-- Bootstrap -->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <!-- Owl-carousel CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />


  <!-- font awesome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

  <!-- Icons Link -->
  <script defer src="https://friconix.com/cdn/friconix.js"> </script>

  <!-- FAvicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
  <link rel="manifest" href="../favicon/site.webmanifest">
  <link rel="mask-icon" href="../favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">


</head>

<body>

  <!-- Heading section start -->
  <header>

    <!-- Primary Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark header-top">
      <!-- navbar start .navbar -->

      <!-- Logo a tag start -->
      <a class="navbar-brand" href="../index.php">
        <img src="../image/Logo/output-onlinepngtools (2).png" width="110px" height="60px" alt="">
        <!-- img tag for logo -->
      </a>
      <!-- Logo a tag end -->

      <!-- button tag for toggler effect start -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- button tag for toggler effect end -->

      <!-- #navbarNav start -->
      <div class="collapse navbar-collapse text-center" id="navbarNav">

        <!-- navbar elements start -->
        <ul class="navbar-nav m-auto">
          <li class="nav-itemss ">
            <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Offers
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <a class="nav-link" href="../search_filter/offer-deals-search.php">
                  <button class="dropdown-item" type="button">Deals of the day</button>
                </a>
                <a class="nav-link" href="../search_filter/offer-deals-search.php">
                  <button class="dropdown-item" type="button">Special Price</button>
                </a>
              </div>
            </div>
          </li>

          <li class="nav-item">
            <!-- <a class="nav-link" href="./search_filter/mobile-search.php">MOBILES</a> -->
            <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Footwear
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <a class="nav-link" href="../search_filter/mens-shoes-search.php">
                  <button class="dropdown-item" type="button">Men's Footwear</button>
                </a>
                <a class="nav-link" href="../search_filter/womens-shoes-search.php">
                  <button class="dropdown-item" type="button">Women's Footwear</button>
                </a>
              </div>
            </div>
          </li>

          <li class="nav-item">
            <!-- <a class="nav-link" href="search-filter-page.php">FASHION</a> -->
            <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Fashion
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                <a class="nav-link" href="../search_filter/mens-clothes-search.php">
                  <button class="dropdown-item" type="button">Men's Topwear</button>
                </a>
                <a class="nav-link" href="../search_filter/womens-clothes-search.php">
                  <button class="dropdown-item" type="button">Women's Clothes</button>
                </a>
                <a class="nav-link" href="../search_filter/t-shirts-search.php">
                  <button class="dropdown-item" type="button">T-shirts</button>
                </a>
              </div>
            </div>
          </li>

          <li class="nav-item">
            <!-- <a class="nav-link" href="search-filter-page.php">ELECTRONICS</a> -->

            <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Electronics
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu4">
                <a class="nav-link" href="../search_filter/mobile-search.php">
                  <button class="dropdown-item" type="button">Mobiles</button>
                </a>
                <a class="nav-link" href="../search_filter/earphones-search.php">
                  <button class="dropdown-item" type="button">Earphones & Headphones</button>
                </a>
                <a class="nav-link" href="../search_filter/laptop-search.php">
                  <button class="dropdown-item" type="button">Laptops</button>
                </a>
              </div>
            </div>

          </li>

          <li class="nav-item">
            <!-- <a class="nav-link" href="search-filter-page.php">GROCERY</a> -->

            <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Grocery
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu5">
                <a class="nav-link" href="search-filter-page.php">
                  <button class="dropdown-item" type="button">Fruits</button>
                </a>
                <a class="nav-link" href="search-filter-page.php">
                  <button class="dropdown-item" type="button"> Dry Fruits</button>
                </a>
              </div>
            </div>

          </li>
          <li class="nav-item">
            <!-- <a class="nav-link" href="login.php">LOGIN & SIGIN</a> -->

            <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Member
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu6">
                <a class="nav-link" href="./login.php">
                  <button class="dropdown-item" type="button">Login</button>
                </a>
                <a class="nav-link" href="./register.php">
                  <button class="dropdown-item" type="button">Register</button>
                </a>
              </div>
            </div>

          </li>

          <?php
          if (isset($_SESSION['sess_login'])) {
            echo '
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-700 small"> Rajan Sah</span>
                                <img class="img-profile rounded-circle" src="../image/mobiles/1.png" height="25px" width="25px">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in text-danger" aria-labelledby="userDropdown">
                                <a class="dropdown-item text-dark" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item text-dark" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item text-dark" href="cart-page.php">
                                    <span class="badge badge-danger cart-badge">4</span> 
                                    <i class="fa fa-shopping-cart" style="font-size: 1.2em;"></i> Cart
                                </a>
                                <a class="dropdown-item text-dark" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <!-- <div class="dropdown-divider"></div> -->
                                <hr>
                                <a class="dropdown-item text-dark" href="./logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                        <!-- Nav Item - User Information -->
                        ';
          }
          ?>
        </ul>
        <!-- navbar elements end -->

        <!-- Search content start-->
        <form class="d-flex m-auto inside">
          <input class="form-control me-4" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
        <!-- Search content end-->
      </div>
      <!-- #navbarNav start -->
    </nav>
    <!-- !Primary Navigation -->
  </header>
  <!-- Heading section start -->


  <div class="container">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">

        <form id="submitForm" method="POST" action="">
          <div class="form-group">
            <label for="name">Username:</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Name" required="">
            <span></span>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" name="email" placeholder="Enter Email" required="">
          </div>
          <div class="form-group">
            <label for="mobile">Mobile Number:</label>
            <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile number" required="">
          </div>

          <div class="form-group">
            <label for="pass">Password:</label>
            <input type="password" class="form-control" name="pass" placeholder="Enter Password" required="">
          </div>
          <div class="form-group">
            <label for="rpass">Re-Password:</label>
            <input type="password" class="form-control" name="rpass" placeholder="Re-Enter Password" required="">
          </div>
          <div class="form-group">
            <p>Already have account ?<a href="login.php"> Login</a></p>
            <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
            <a href="../index.php" class="btn btn-secondary">Close</a> <br> <br>
          </div>
        </form>

      </div>
    </div>
  </div>

  <?php

  echo $error;
  echo $msg;
  ?>

  <!-- footer section start -->
  <footer>
    <!-- FOOTER Section Start -->
    <section class="footer bg-dark pt-5 pb-4 sticky-bottom" id="footer">

      <div class="container text-white text-center">

        <div class="row">

          <div class=" fott coll-lr-3 col-md-3 col-sm-10 ">
            <h3>NepZone</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam cum fugit, cumque delectus dolorum non?
            </p>
          </div>

          <div class=" fott col-lr-3 col-md-3 col-sm-10 ">
            <h3>Know More</h3>
            <p><a href="" style="color: #fff; text-decoration: none;">About Us</a></p>
            <p><a href="registration.html" style="color: #fff; text-decoration: none;">Contact Us</a> </p>
            <p><a href="about.html" style="color: #fff; text-decoration: none;">Blogs</a> </p>
            <p><a href="contact.html" style="color: #fff; text-decoration: none;">Stories</a> </p>
          </div>

          <div class=" fott col-lr-3 col-md-3 col-sm-10 " style="height: 220px;">
            <h3>Follow Us</h3>
            <ul>
              <li>
                <a href="#"><i class="fi-xnsuxl-facebook icon"></i></a>
              </li>

              <li>
                <a href="#"><i class="fi-xnsuxl-twitter icon"></i></a>
              </li>

              <li>
                <a href="#"><i class="fi-xnsuxl-linkedin icon"></i></a>
              </li>

              <li>
                <a href="#"><i class="fi-xnsuxl-instagram icon"></i></a>
              </li>

            </ul>
          </div>

          <div class=" fott col-lr-3 col-md-3 col-sm-10 ">
            <h3>Contact Info</h3>
            <p><i class="fi-xnsuhl-house-solid mr-3 "></i> New York, NY 2333,US</p>
            <p><i class="fi-xwsuxl-envelope-solid mr-3 "></i> theprovider98@gmail.com</p>
            <p><i class="fi-xnsuxl-phone-solid mr-3"></i> +91 9874845467</p>
            <p><i class="fi-xnsuxl-user-solid mr-3 "></i> +01 998 774 88</p>
          </div>
        </div>

        <div class="row">
          <div class="col-lr-8 col-md-8 col-sm-8 mt-3 ">
            <h5> copyright &#169; 04/24/2021 All reserved by : <strong style="color: #6f57f5; font-family: 'Reggae One', cursive;">NepZone</strong> </h5>
          </div>
          <div class="col-lr-4 col-md-4 col-sm-4 mt-3 ">
            <h5> Design & Developed by : <strong style="color: #6f57f5; font-family: 'Reggae One', cursive;">Rajan SAh</strong> </h5>
          </div>
        </div>

      </div>
    </section>
    <!-- FOOTER Section Close -->
  </footer>
  <!-- footer section end -->

  <!-- javascript -->
  <script src="js/custom.js"></script>
  <script src="js/backend.js"></script>

  <!-- Owl Carousel Js file -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

  <!--  isotope plugin cdn  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>


  <!-- JQuery -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

</body>

</html>
<?php
include('./database-connect.php');
if (!isset($_SESSION)) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>NepZone</title>

  <!-- link style.css file -->
  <link rel="stylesheet" href="css/style.css">

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
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
  <link rel="manifest" href="favicon/site.webmanifest">
  <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">


</head>

<body>

<!-- Heading section start -->
<?php
    if (isset($_SESSION['sess_login'])) {
        echo '
        <header>

          <!-- Primary Navigation -->
          <nav class="navbar navbar-expand-lg navbar-dark header-top">
            <!-- navbar start .navbar -->
      
            <!-- Logo a tag start -->
            <a class="navbar-brand" href="index.php">
              <img src="image/Logo/output-onlinepngtools (2).png" width="110px" height="60px" alt="">
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
                      <a class="nav-link" href="./search_filter/offer-deals-search.php">
                        <button class="dropdown-item" type="button">Deals of the day</button>
                      </a>
                      <a class="nav-link" href="./search_filter/offer-deals-search.php">
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
                      <a class="nav-link" href="./search_filter/mens-shoes-search.php">
                        <button class="dropdown-item" type="button">Mens Footwear</button>
                      </a>
                      <a class="nav-link" href="./search_filter/womens-shoes-search.php">
                        <button class="dropdown-item" type="button">Womens Footwear</button>
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
                      <a class="nav-link" href="./search_filter/mens-clothes-search.php">
                        <button class="dropdown-item" type="button">Mens Topwear</button>
                      </a>
                      <a class="nav-link" href="./search_filter/womens-clothes-search.php">
                        <button class="dropdown-item" type="button">Womens Clothes</button>
                      </a>
                      <a class="nav-link" href="./search_filter/t-shirts-search.php">
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
                      <a class="nav-link" href="./search_filter/mobile-search.php">
                        <button class="dropdown-item" type="button">Mobiles</button>
                      </a>
                      <a class="nav-link" href="./search_filter/earphones-search.php">
                        <button class="dropdown-item" type="button">Earphones & Headphones</button>
                      </a>
                      <a class="nav-link" href="./search_filter/laptop-search.php">
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
                      <a class="nav-link" href="./members/login.php">
                        <button class="dropdown-item" type="button">Login</button>
                      </a>
                      <a class="nav-link" href="./members/register.php">
                        <button class="dropdown-item" type="button">Register</button>
                      </a>
                    </div>
                  </div>
      
                </li>
      
                <li class="nav-item">
                  <a class="nav-link" href="cart-page.php"><span class="badge badge-danger cart-badge">4</span> <i class="fa fa-shopping-cart" style="font-size: 1.2em;"></i> Cart</a>
                </li>
      
      
                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-700 small" >Rajan Sah</span>
                    <img class="img-profile rounded-circle" src="">
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
                    <a class="dropdown-item text-dark" href="#">
                      <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                      Activity Log
                    </a>
                    <!-- <div class="dropdown-divider"></div> -->
                    <hr>
                    <a class="dropdown-item text-dark" href="../members/logout.php" data-toggle="modal" data-target="#logoutModal">
                      <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                      Logout
                    </a>
                  </div>
                </li>
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
        ';
    }else{
      echo '
      <header>

        <!-- Primary Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark header-top">
          <!-- navbar start .navbar -->
    
          <!-- Logo a tag start -->
          <a class="navbar-brand" href="index.php">
            <img src="image/Logo/output-onlinepngtools (2).png" width="110px" height="60px" alt="">
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
                    <a class="nav-link" href="./search_filter/offer-deals-search.php">
                      <button class="dropdown-item" type="button">Deals of the day</button>
                    </a>
                    <a class="nav-link" href="./search_filter/offer-deals-search.php">
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
                    <a class="nav-link" href="./search_filter/mens-shoes-search.php">
                      <button class="dropdown-item" type="button">Mens Footwear</button>
                    </a>
                    <a class="nav-link" href="./search_filter/womens-shoes-search.php">
                      <button class="dropdown-item" type="button">Womens Footwear</button>
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
                    <a class="nav-link" href="./search_filter/mens-clothes-search.php">
                      <button class="dropdown-item" type="button">Mens Topwear</button>
                    </a>
                    <a class="nav-link" href="./search_filter/womens-clothes-search.php">
                      <button class="dropdown-item" type="button">Womens Clothes</button>
                    </a>
                    <a class="nav-link" href="./search_filter/t-shirts-search.php">
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
                    <a class="nav-link" href="./search_filter/mobile-search.php">
                      <button class="dropdown-item" type="button">Mobiles</button>
                    </a>
                    <a class="nav-link" href="./search_filter/earphones-search.php">
                      <button class="dropdown-item" type="button">Earphones & Headphones</button>
                    </a>
                    <a class="nav-link" href="./search_filter/laptop-search.php">
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
                    <a class="nav-link" href="./members/login.php">
                      <button class="dropdown-item" type="button">Login</button>
                    </a>
                    <a class="nav-link" href="./members/register.php">
                      <button class="dropdown-item" type="button">Register</button>
                    </a>
                  </div>
                </div>
    
              </li>
    
              <li class="nav-item">
                <a class="nav-link" href="cart-page.php"><span class="badge badge-danger cart-badge">4</span> <i class="fa fa-shopping-cart" style="font-size: 1.2em;"></i> Cart</a>
              </li>
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
      ';
    }
  ?>


  <!-- Heading section start -->
  
  <!-- Heading section start -->
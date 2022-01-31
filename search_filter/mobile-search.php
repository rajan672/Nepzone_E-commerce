<?php
include('../database-connect.php');
$per_page = 8;
$start = 0;
$current_page = 1;
if (isset($_GET['start'])) {
  $start = $_GET['start'];
  if ($start <= 0) {
    $start = 0;
    $current_page = 1;
  } else {
    $current_page = $start;
    $start--;
    $start = $start * $per_page;
  }
}
$record = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM mobiles"));
$pagi = ceil($record / $per_page);

$sql = "SELECT * FROM mobiles ORDER BY id DESC limit $start,$per_page";
$res = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>NepZone</title>

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
                <a class="nav-link" href="offer-deals-search.php">
                  <button class="dropdown-item" type="button">Deals of the day</button>
                </a>
                <a class="nav-link" href="offer-deals-search.php">
                  <button class="dropdown-item" type="button">Special Price</button>
                </a>
              </div>
            </div>
          </li>

          <li class="nav-item">
            <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Footwear
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <a class="nav-link" href="mens-shoes-search.php">
                  <button class="dropdown-item" type="button">Men's Footwear</button>
                </a>
                <a class="nav-link" href="womens-shoes-search.php">
                  <button class="dropdown-item" type="button">Women's Footwear</button>
                </a>
              </div>
            </div>
          </li>

          <li class="nav-item">
            <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Fashion
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                <a class="nav-link" href="mens-clothes-search.php">
                  <button class="dropdown-item" type="button">Men's Topwear</button>
                </a>
                <a class="nav-link" href="womens-clothes-search.php">
                  <button class="dropdown-item" type="button">Women's Clothes</button>
                </a>
                <a class="nav-link" href="t-shirts-search.php">
                  <button class="dropdown-item" type="button">T-shirts</button>
                </a>
              </div>
            </div>
          </li>

          <li class="nav-item">
            <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Electronics
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu4">
                <a class="nav-link" href="mobile-search.php">
                  <button class="dropdown-item" type="button">Mobiles</button>
                </a>
                <a class="nav-link" href="earphones-search.php">
                  <button class="dropdown-item" type="button">Earphones & Headphones</button>
                </a>
                <a class="nav-link" href="laptop-search.php">
                  <button class="dropdown-item" type="button">Laptops</button>
                </a>
              </div>
            </div>
          </li>

          <li class="nav-item">
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
            <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Member
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu6">
                <a class="nav-link" href="search-filter-page.php">
                  <button class="dropdown-item" type="button">Login</button>
                </a>
                <a class="nav-link" href="search-filter-page.php">
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
  <!-- Heading section start -->






  <!-- Main section start -->
  <div class="container-fluid s-main">
    <div class="row">
      <div class="col-md-3 col-sm-3">
        <aside class="bg-light side">
          <h4>Filters <button type="submit" class="btn btn-primary btn-sm float-right">Search</button> </h4>
          <button class="btn btn-link btn-sm float-right clear-all">Clear All</button>
          <button class="btn btn-sm btn-secondary p-1 m-1 clos">&times; Blue</button>
          <button class="btn btn-sm btn-secondary p-1 m-1 clos">&times; Blue</button>
          <button class="btn btn-sm btn-secondary p-1 m-1 clos">&times; Blue</button>
          <button class="btn btn-sm btn-secondary p-1 m-1 clos">&times; Blue</button>
          <button class="btn btn-sm btn-secondary p-1 m-1 clos">&times; Blue</button>

          <div class="brand-item">
            <a class="btn btn-link btn-block text-left" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
              <h5>CATEGORIES<i class="fa fa-chevron-down float-right"></i></h5>
            </a>
            <div class="collapse show" id="collapseExample1">
              <ul class="navbar-nav flex-column pl-3 mt-3">
                <li class="nav-item">
                  <a href=""> <input type="checkbox">&nbsp; Casual shoes</a>
                </li>
                <li class="nav-item">
                  <a href=""> <input type="checkbox">&nbsp; Sports Shoes</a>
                </li>
                <li class="nav-item">
                  <a href=""> <input type="checkbox">&nbsp; Formal Shoes</a>
                </li>
                <li class="nav-item">
                  <a href=""> <input type="checkbox">&nbsp; Ethnic shoes</a>
                </li>
                <li class="nav-item">
                  <a href=""> <input type="checkbox">&nbsp; Party Shoes</a>
                </li>
                <li class="nav-item">
                  <a href=""> <input type="checkbox">&nbsp; Wedding Shoes</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="brand-item">
            <a class="btn btn-link btn-block text-left" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
              <h5>BRAND<i class="fa fa-chevron-down float-right"></i></h5>
            </a>
            <div class="collapse show" id="collapseExample2">
              <ul class="navbar-nav flex-column pl-3 mt-3">
                <?php
                $sql = "SELECT DISTINCT (mob_brand) FROM mobiles WHERE product_status = '1' ORDER BY id DESC";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                ?>
                    <div>
                      <label><input type="checkbox" class="common_selector brand" value="<?php echo $row['mob_brand']; ?>"> <?php echo $row['mob_brand']; ?></label>
                    </div>
                <?php
                  }
                }
                ?>
              </ul>
            </div>
          </div>

          <div class="brand-item">
            <a class="btn btn-link btn-block text-left" data-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample">
              <h5>Sort By<i class="fa fa-chevron-down float-right"></i></h5>
            </a>
            <div class="collapse show" id="collapseExample6">
              <ul class="navbar-nav flex-column pl-3 mt-3">
                <li class="nav-item">
                  <a href=""> <input type="checkbox">&nbsp; Popularity</a>
                </li>
                <li class="nav-item">
                  <a href=""> <input type="checkbox">&nbsp; Price-Low to High</a>
                </li>
                <li class="nav-item">
                  <a href=""> <input type="checkbox">&nbsp; Price -High to Low</a>
                </li>
                <li class="nav-item">
                  <a href=""> <input type="checkbox">&nbsp; Newest First</a>
                </li>
                <li class="nav-item">
                  <a href=""> <input type="checkbox">&nbsp; Discount</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="brand-item">
            <a class="btn btn-link btn-block text-left" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
              <h5>Size<i class="fa fa-chevron-down float-right"></i></h5>
            </a>
            <div class="collapse show" id="collapseExample3">
              <ul class="navbar-nav flex-column pl-3 mt-3">
                <li class="nav-item">
                  <a href=""> <input type="checkbox">&nbsp; 10</a>
                </li>
                <li class="nav-item">
                  <a href=""> <input type="checkbox">&nbsp; 9.5</a>
                </li>
                <li class="nav-item">
                  <a href=""> <input type="checkbox">&nbsp; 9</a>
                </li>
                <li class="nav-item">
                  <a href=""> <input type="checkbox">&nbsp; 8</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="brand-item">
            <a class="btn btn-link btn-block text-left" data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample">
              <h5>Price<i class="fa fa-chevron-down float-right"></i></h5>
            </a>
            <div class="collapse show" id="collapseExample4">
              <ul class="navbar-nav flex-column pl-3 mt-3">
                <li class="nav-item">
                  <a href=""> <input type="checkbox">&nbsp; Under 5000</a>
                </li>
                <li class="nav-item">
                  <a href=""> <input type="checkbox">&nbsp; Under 2000</a>
                </li>
                <li class="nav-item">
                  <a href=""> <input type="checkbox">&nbsp; Under 1000</a>
                </li>
                <li class="nav-item">
                  <a href=""> <input type="checkbox">&nbsp; Under 500</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="brand-item">
            <a class="btn btn-link btn-block text-left" data-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample">
              <h5>Color<i class="fa fa-chevron-down float-right"></i></h5>
            </a>
            <div class="collapse show" id="collapseExample5">
              <ul class="navbar-nav flex-column pl-3 mt-3">
                <li class="nav-item">
                  <a href=""> <input type="checkbox">&nbsp; Beige</a>
                </li>
                <li class="nav-item">
                  <a href=""> <input type="checkbox">&nbsp; Black</a>
                </li>
                <li class="nav-item">
                  <a href=""> <input type="checkbox">&nbsp; Blue</a>
                </li>
                <li class="nav-item">
                  <a href=""> <input type="checkbox">&nbsp; Brown</a>
                </li>
              </ul>
            </div>
          </div>

        </aside>
      </div>

      <div class="col-md-9 col-sm-9">
        <section class="bg-light all-product">

          <div class="section-1">

            <div class="section-1-top">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Electronics</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Mobiles</li>
                </ol>
              </nav>
            </div>

            <div class="section-1-center">
              <div class="row">
                <!-- For Mobiles -->
                <?php
                if (mysqli_num_rows($res) > 0) {
                  while ($row = mysqli_fetch_assoc($res)) {
                    $mob_id = $row['id'];
                    echo '
                        <div class="col-md-3 col-sm-4 col-6 ' . $row['mob_brand'] . '">
                          <a href="../product-details/mobile-product.php?id=' . $mob_id . '" class="product">
                            <div class="product-top">
                              <i class="fa fa-heart float-right"></i>
                              <img class="img-fluid" src=".' . str_replace('..', '.', $row['mob_image']) . '" alt="">
                            </div>

                            <div class="product-bottom">
                              <div class="product-desc-top">
                                <div class="product-brand text-secondary">' . $row['mob_brand'] . '</div>
                                <div class="product-desc text-dark">' . $row['mob_name'] . '</div>
                                <div class="product-price">
                                  <span><strong> NRP. ' . $row['mob_selling_price'] . ' </strong></span> <br>
                                  <span class="text-secondary"><strike> NRP.' . $row['mob_market_price'] . '  </strike></span> <br>
                                  <span class="text-success"><small> <strong> ' . $row['mob_discount'] . '% Off</strong> </small></span>
                                </div>
                              </div>
                              <div class="product-desc-bottom">
                                <div class="product-desc-extra">
                                  <span class="badge badge-success"> ' . $row['mob_rating'] . ' <i class="fas fa-star"></i></span> <span class="text-secondary"> (' . $row['mob_review'] . ') </span> <br>
                                  <span><strong>Display Size :</strong></span>
                                  <span> ' . $row['mob_size'] . ' inches</span>
                                </div>
                              </div>
                            </div>
                          </a>
                        </div>
                    ';
                  }
                } else {
                  echo '<h3> No Product</h3>';
                }
                ?>


              </div>
            </div>

            <div class="section-1-bottom">
              <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                  <?php
                  for ($i = 1; $i <= $pagi; $i++) {
                    $class = '';
                    if ($current_page == $i) {
                  ?><li class="page-item active"><a class="page-link" href="javascript:void(0)"><?php echo $i ?></a></li><?php
                                                                                                                        } else {
                                                                                                                          ?>
                      <li class="page-item"><a class="page-link" href="?start=<?php echo $i ?>"><?php echo $i ?></a></li>
                    <?php } ?>
                  <?php } ?>
                </ul>
              </nav>
            </div>

          </div>

          <div class="section-2">
            <div class="">
              <strong>Did you find what you need ?</strong>&nbsp; &nbsp; <a href="" class="btn btn-outline-secondary">Yes</a>&nbsp; <a href="" class="btn btn-outline-secondary">No</a>
            </div>
          </div>
        </section>
      </div>

    </div>
  </div>
  <!-- Main section start -->










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
  <script src="../js/custom.js"></script>

  <!-- Owl Carousel Js file -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

  <!--  isotope plugin cdn  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>


  <!-- JQuery -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

</body>

</html>
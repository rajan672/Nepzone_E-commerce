<?php
include('./database-connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>NepZone || cart-page</title>

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



  <!-- Bootstrap 5 CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" />
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>


  <!-- Owl-carousel CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />


  <!-- font awesome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

  <!-- Icons Link -->
  <script defer src="https://friconix.com/cdn/friconix.js"> </script>

  <style>
    @import url("https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap");

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Mulish", sans-serif;
    }

    :root {
      --text-clr: #4f4f4f;
    }

    p {
      color: #6c757d;
    }

    a {
      text-decoration: none;
      color: #4f4f4f;
    }

    a:hover {
      text-decoration: none;
      color: #4f4f4f;
    }

    h2 {
      color: #4f4f4f;
      font-size: 1.5rem;
    }

    .main_cart {
      background: #fff;
    }

    .card {
      border: none;
    }

    .product_img img {
      min-width: 200px;
      max-height: 200px;
    }

    .product_name {
      color: black;
      font-size: 1.4rem;
      text-transform: capitalize;
      font-weight: 500;
    }

    .card-title p {
      font-size: 0.9rem;
      font-weight: 500;
    }

    .remove_wish p {
      font-size: 0.7rem;
      margin-bottom: 0;
    }

    .price_money h3 {
      font-size: 1rem;
      font-weight: 600;
    }

    .set_quantity {
      position: relative;
    }

    .set_quantity::after {
      content: "(Note, 1 piece)";
      width: auto;
      height: auto;
      text-align: center;
      position: absolute;
      bottom: -20px;
      right: 1.5rem;
      font-size: 0.8rem;
    }

    .page-link {
      line-height: 16px;
      width: 45px;
      font-size: 1rem;
      display: flex;
      justify-content: center;
      align-items: center;
      color: #495057 !important;
    }

    .page-item input {
      line-height: 22px;
      padding: 3px;
      font-size: 15px;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    .page-link:hover {
      text-decoration: none;
      color: #495057;
      outline: none !important;
    }

    .page-link:focus {
      box-shadow: none;
    }

    .price_indiv p {
      font-size: 1.1rem;
    }

    .fa-heart:hover {
      color: red;
    }

    .card-body a {
      text-decoration: none;
      color: #4f4f4f;
    }
  </style>

</head>

<body>

  <!-- Heading section start -->
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
                  <button class="dropdown-item" type="button">Men's Footwear</button>
                </a>
                <a class="nav-link" href="./search_filter/womens-shoes-search.php">
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
                <a class="nav-link" href="./search_filter/mens-clothes-search.php">
                  <button class="dropdown-item" type="button">Men's Topwear</button>
                </a>
                <a class="nav-link" href="./search_filter/womens-clothes-search.php">
                  <button class="dropdown-item" type="button">Women's Clothes</button>
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
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10 col-11 mx-auto">
        <h2 class="py-4 font-weight-bold">Cart (2 items)</h2>
        <div class="row mt-5 gx-3">
          <!-- left side div -->
          <div class="col-md-12 col-lg-8 col-11 mx-auto main_cart mb-lg-0 mb-5 shadow">

            <div class="card p-4">
              <div class="row">
              <?php
                if (isset($_GET['id'])) {
                    $ep_id = $_GET['id'];
                    $sql = "SELECT * FROM earphones WHERE id = '$ep_id'";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                }
                ?>
                <!-- cart images div -->
                <div class="col-md-5 col-11 mx-auto bg-light d-flex justify-content-center align-items-center shadow product_img">
                  <img src="image/shirt/2-dress-shirt-png-image.png" class="img-fluid" alt="cart img">
                </div>
                <!-- cart product details -->
                <div class="col-md-7 col-11 mx-auto px-4 mt-2">
                  <div class="row">
                    <!-- product name  -->
                    <div class="col-6 card-title">
                      <h1 class="mb-4 product_name"> <?php echo $row['ep_name'] ?>  </h1>
                      <p class="mb-2">SHIRT - BLUE</p>
                      <p class="mb-2">COLOR: BLUE</p>
                      <p class="mb-3">SIZE: M</p>
                    </div>
                    <!-- quantity inc dec -->
                    <div class="col-6">
                      <ul class="pagination justify-content-end set_quantity">
                        <li class="page-item">
                          <button class="page-link" onclick="decreaseNumber('textbox','itemval')">
                            <i class="fas fa-minus"></i> </button>
                        </li>
                        <li class="page-item"><input type="text" name="" class="page-link" value="0" id="textbox">
                        </li>
                        <li class="page-item">
                          <button class="page-link" onclick="increaseNumber('textbox','itemval')"> <i class="fas fa-plus"></i></button>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- //remover move and price -->
                  <div class="row">
                    <div class="col-8 d-flex justify-content-between remove_wish">
                      <p class="removed btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> REMOVE</p>
                      <p class="btn btn-primary btn-sm"><i class="fas fa-heart"></i>ADD WISH LIST </p>
                    </div>
                    <div class="col-4 d-flex justify-content-end price_money">
                      <h3>$<span id="itemval">0.00 </span></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr />

            <!-- 2nd cart product -->
            <div class="card p-4">
              <div class="row">
                <!-- cart images div -->
                <div class="col-md-5 col-11 mx-auto bg-light d-flex justify-content-center align-items-center shadow product_img">
                  <img src="image/electonices/4-headphones-png-image-thumb.png" class="img-fluid" alt="cart img">
                </div>
                <!-- cart product details -->
                <div class="col-md-7 col-11 mx-auto px-4 mt-2">
                  <div class="row">
                    <!-- product name  -->
                    <div class="col-6 card-title">
                      <h1 class="mb-4 product_name">Green Zara Shirt</h1>
                      <p class="mb-2">SHIRT - Green</p>
                      <p class="mb-2">COLOR: Green</p>
                      <p class="mb-3">SIZE: M</p>
                    </div>
                    <!-- quantity inc dec -->
                    <div class="col-6">
                      <ul class="pagination justify-content-end set_quantity">
                        <li class="page-item">
                          <button class="page-link " onclick="decreaseNumber('textbox1','itemval1')"> <i class="fas fa-minus"></i> </button>
                        </li>
                        <li class="page-item"><input type="text" name="" class="page-link" value="0" id="textbox1">
                        </li>
                        <li class="page-item">
                          <button class="page-link" onclick="increaseNumber('textbox1','itemval1')"> <i class="fas fa-plus"></i></button>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- //remover move and price -->
                  <div class="row">
                    <div class="col-8 d-flex justify-content-between remove_wish">
                      <p class="removed btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> REMOVE</p>
                      <p class="btn btn-primary btn-sm"><i class="fas fa-heart"></i>ADD WISH LIST </p>
                    </div>
                    <div class="col-4 d-flex justify-content-end price_money">
                      <h3>$<span id="itemval1">0.00 </span> </h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <!-- right side div -->
          <div class="col-md-12 col-lg-4 col-11 mx-auto mt-lg-0 mt-md-5">
            <div class="right_side p-3 shadow bg-white">
              <h2 class="product_name mb-5">The Total Amount Of</h2>
              <div class="price_indiv d-flex justify-content-between">
                <p>Product amount</p>
                <p>$<span id="product_total_amt">0.00</span></p>
              </div>
              <div class="price_indiv d-flex justify-content-between">
                <p>Shipping Charge</p>
                <p>$<span id="shipping_charge">50.0</span></p>
              </div>
              <hr />
              <div class="total-amt d-flex justify-content-between font-weight-bold">
                <p>The total amount of (including VAT)</p>
                <p>$<span id="total_cart_amt">0.00</span></p>
              </div>
              <button class="btn btn-primary text-uppercase">Checkout</button>
            </div>
            <!-- discount code part -->
            <div class="discount_code mt-3 shadow">
              <div class="card">
                <div class="card-body">
                  <a class="d-flex justify-content-between" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Add a discount code (optional)
                    <span><i class="fas fa-chevron-down pt-1"></i></span>
                  </a>
                  <div class="collapse" id="collapseExample">
                    <div class="mt-3">
                      <input type="text" name="" id="discount_code1" class="form-control font-weight-bold" placeholder="Enter the discount code">
                      <small id="error_trw" class="text-dark mt-3">code is NepZone</small>
                    </div>
                    <button class="btn btn-primary btn-sm mt-3" onclick="discount_code()">Apply</button>
                  </div>
                </div>
              </div>
            </div>




            <!-- discount code ends -->
            <div class="mt-3 shadow p-3 bg-white">
              <div class="pt-4">
                <h5 class="mb-4">Expected delivery date</h5>
                <p>July 27th 2020 - July 29th 2020</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php
  include('./partation-file/recently-viewed.php');
  ?>

  <?php
  include('./partation-file/similar-product.php');
  ?>



  <!-- footer section start -->
  <footer>
    <!-- FOOTER Section Start -->
    <section class="footer bg-dark text-white pt-5 pb-4 sticky-bottom" id="footer">

      <div class="container text-white text-center">

        <div class="row">

          <div class=" fott coll-lr-3 col-md-3 col-sm-10 ">
            <h3>NepZone</h3>
            <p class="text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam cum fugit, cumque delectus dolorum non?
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
            <p class="text-white"><i class="fi-xnsuhl-house-solid mr-3 "></i> New York, NY 2333,US</p>
            <p class="text-white"><i class="fi-xwsuxl-envelope-solid mr-3 "></i> theprovider98@gmail.com</p>
            <p class="text-white"><i class="fi-xnsuxl-phone-solid mr-3"></i> +91 9874845467</p>
            <p class="text-white"><i class="fi-xnsuxl-user-solid mr-3 "></i> +01 998 774 88</p>
          </div>
        </div>

        <div class="row">
          <div class="col-lr-8 col-md-8 col-sm-8 mt-3 ">
            <h5> copyright &#169; 04/24/2021 All reserved by : <strong style="color: #6f57f5; font-family: 'Reggae One', cursive;">NepZone</strong> </h5>
          </div>
          <div class="col-lr-4 col-md-4 col-sm-4 mt-3 ">
            <h5> Design & Developed by : <strong style="color: #6f57f5; font-family: 'Reggae One', cursive;">RAjan SAh</strong> </h5>
          </div>
        </div>

      </div>
    </section>
    <!-- FOOTER Section Close -->
  </footer>
  <!-- footer section end -->

  <!-- javascript -->
  <script src="js/custom.js"></script>
  <script>
    var product_total_amt = document.getElementById("product_total_amt");
    var shipping_charge = document.getElementById("shipping_charge");
    var total_cart_amt = document.getElementById("total_cart_amt");
    var discountCode = document.getElementById("discount_code1");
    const decreaseNumber = (incdec, itemprice) => {
      var itemval = document.getElementById(incdec);
      var itemprice = document.getElementById(itemprice);
      console.log(itemprice.innerHTML);
      // console.log(itemval.value);
      if (itemval.value <= 0) {
        itemval.value = 0;
        alert("Negative quantity not allowed");
      } else {
        itemval.value = parseInt(itemval.value) - 1;
        itemval.style.background = "#fff";
        itemval.style.color = "#000";
        itemprice.innerHTML = parseInt(itemprice.innerHTML) - 15;
        product_total_amt.innerHTML = parseInt(product_total_amt.innerHTML) - 15;
        total_cart_amt.innerHTML =
          parseInt(product_total_amt.innerHTML) +
          parseInt(shipping_charge.innerHTML);
      }
    };
    const increaseNumber = (incdec, itemprice) => {
      var itemval = document.getElementById(incdec);
      var itemprice = document.getElementById(itemprice);
      // console.log(itemval.value);
      if (itemval.value >= 5) {
        itemval.value = 5;
        alert("max 5 allowed");
        itemval.style.background = "red";
        itemval.style.color = "#fff";
      } else {
        itemval.value = parseInt(itemval.value) + 1;
        itemprice.innerHTML = parseInt(itemprice.innerHTML) + 15;
        product_total_amt.innerHTML = parseInt(product_total_amt.innerHTML) + 15;
        total_cart_amt.innerHTML =
          parseInt(product_total_amt.innerHTML) +
          parseInt(shipping_charge.innerHTML);
      }
    };

    //Vinod Bahadur Thapa
    const discount_code = () => {
      let totalamtcurr = parseInt(total_cart_amt.innerHTML);
      let error_trw = document.getElementById("error_trw");
      if (discountCode.value === "thapa") {
        let newtotalamt = totalamtcurr - 15;
        total_cart_amt.innerHTML = newtotalamt;
        error_trw.innerHTML = "Hurray! code is valid";
      } else {
        error_trw.innerHTML = "Try Again! Valid code is thapa";
      }
    };



    $(document).on('click', '.removed', function() {
      $(this).closest('.card').remove();
    });
  </script>

  <!-- Owl Carousel Js file -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

  <!--  isotope plugin cdn  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>


  <!-- JQuery -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

</body>

</html>
<?php
include('../database-connect.php');
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
    <!-- Heading section start -->

    <?php
    if (isset($_GET['id'])) {
        $t_id = $_GET['id'];
        $sql = "SELECT * FROM t_shirts WHERE id = '$t_id'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    }
    ?>

    <!-- Main section start -->
    <div class="container-fluid s-main">
        <div class="row bg-light mb-3 shadow-sm first-row">
            <div class="col-md-5">
                <!-- <article class="">
                    <div class="row">
                        <div class="simpleLens-gallery-container" id="demo-1">
                            <div class="col-md-2 p-0 m-0 float-left">

                                <div class="simpleLens-thumbnails-container">
                                    <a href="#" class="simpleLens-thumbnail-wrapper" data-lens-image="../demo/large/benvado_elisa_bianco.jpg" data-big-image="../demo/medium/benvado_elisa_bianco.jpg">
                                        <img src="../demo/thumbnail/benvado_elisa_bianco.jpg">
                                    </a>

                                    <a href="#" class="simpleLens-thumbnail-wrapper" data-lens-image="../demo/large/camper_21926_red.jpg" data-big-image="../demo/medium/camper_21926_red.jpg">
                                        <img src="../demo/thumbnail/camper_21926_red.jpg">
                                    </a>

                                    <a href="#" class="simpleLens-thumbnail-wrapper" data-lens-image="../demo/large/flylondon_most_red.jpg" data-big-image="../demo/medium/flylondon_most_red.jpg">
                                        <img src="../demo/thumbnail/flylondon_most_red.jpg">
                                    </a>

                                    <a href="#" class="simpleLens-thumbnail-wrapper" data-lens-image="../demo/large/camper_21926_red.jpg" data-big-image="../demo/medium/camper_21926_red.jpg">
                                        <img src="../demo/thumbnail/camper_21926_red.jpg">
                                    </a>

                                    <a href="#" class="simpleLens-thumbnail-wrapper" data-lens-image="../demo/large/flylondon_most_red.jpg" data-big-image="../demo/medium/flylondon_most_red.jpg">
                                        <img src="../demo/thumbnail/flylondon_most_red.jpg">
                                    </a>
                                </div>

                            </div>

                            <div class="col-md-10 p-0 m-0 float-right">

                                <i class="fa fa-heart float-right m-2 heart-i"></i>
                                <div class="simpleLens-container">
                                    <div class="simpleLens-big-image-container">
                                        <a class="simpleLens-lens-image" data-lens-image="../demo/large/benvado_elisa_bianco.jpg">
                                            <img src="../demo/medium/benvado_elisa_bianco.jpg" class="simpleLens-big-image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </article> -->

                <div class="row">
                    <div class="col-md-10 p-0 m-0 float-right">

                        <i class="fa fa-heart float-right m-2 heart-i"></i>
                        <div class="simpleLens-container">
                            <div class="simpleLens-big-image-container">
                                <a class="simpleLens-lens-image" data-lens-image="">
                                    <img src=" .<?php echo str_replace('..', '.', $row['t_image'])  ?> " class="simpleLens-big-image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <a href="" class="btn btn-warning btn-lg text-light btn-block"><i class="fa fa-shopping-cart"></i> Add To Cart</a>
                    </div>
                    <div class="col-md-6">
                        <a href="" class="btn btn-danger btn-lg text-light btn-block"><i class="fas fa-shopping-bag"></i> Buy Now</a>
                    </div>
                </div>

            </div>

            <div class="col-md-7">

                <div class="section-1-top clearfix">
                    <nav aria-label="breadcrumb" class="float-left">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Fashions</a></li>
                            <li class="breadcrumb-item active" aria-current="page">T-shirts</li>
                        </ol>
                    </nav>

                    <a href="" class="float-right"> <i class="fa fa-share"></i> Share</a>
                </div>


                <h5 class="font-baloo font-size-20"> <?php echo $row['t_name'] ?> </h5>
                <small>by <?php echo $row['t_brand'] ?></small>
                <div class="d-flex">
                    <div class="rating text-primary font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <a href="#" class="px-2 font-rale font-size-14"> <?php echo $row['t_rating']  ?> </a>
                </div>
                <hr class="m-0">
                <!---product price -->
                <table class="my-3">
                    <tr class="font-rale font-size-14">
                        <td>M.R.P:</td>
                        <td><strike><?php echo $row['t_market_price']  ?></strike></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>Deal Price:</td>
                        <td class="font-size-20 text-danger">NRP.<span> <?php echo $row['t_selling_price'] ?> </span><small class="text-dark font-size-12">&nbsp;&nbsp;Inclusive of all taxes</small></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>You Save:</td>
                        <td><span class="font-size-16 text-danger">NRP. <?php echo $row['t_yousave_price'] ?></span></td>
                    </tr>
                </table>
                <!---    !product price       -->

                <!--    #policy -->
                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-retweet border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">10 Days <br> Replacement</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-truck  border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">Daily Tuition <br>Deliverd</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-check-double border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">1 Year <br>Warranty</a>
                        </div>
                    </div>
                </div>
                <!-- !policy -->
                <hr>
                <!-- order-details -->
                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                    <small>Delivery by : Mar 29 - Apr 1</small>
                    <small>Sold by <a href="#">Daily Electronics </a>(4.5 out of 5 | 18,198 ratings)</small>
                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 424201</small>
                </div>
                <!-- !order-details -->

                <div class="row">
                    <div class="col-6">
                        <!-- color -->
                        <div class="color my-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-baloo">Color:</h6>
                                <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>
                            </div>
                        </div>
                        <!-- !color -->
                    </div>
                </div>

                <!-- size -->
                <div class="size my-3">
                    <h6 class="font-baloo">Size :</h6>
                    <div class="d-flex justify-content-between w-75">
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">4GB RAM</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">6GB RAM</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">8GB RAM</button>
                        </div>
                    </div>
                </div>
                <!-- !size -->

            </div>
        </div>

        <div class="col-12">
            <h6 class="font-rubik">Product Description</h6>
            <hr>
            <p class="font-rale font-size-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit, delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus, accusantium velit numquam a aliquam vitae vel?</p>
            <p class="font-rale font-size-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit, delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus, accusantium velit numquam a aliquam vitae vel?</p>
        </div>

        <div class="row">
            <section id="fashion" class="container-fluid main">
                <div class="container">
                    <h4 class="font-rubik font-size-20">Similar products</h4>
                    <hr>
                    <!-- owl carousel -->
                    <div class="owl-carousel owl-theme">

                        <div class="item py-2">
                            <div class="product font-rale">
                                <a href="#"><img src="image/jens/3-women's-jeans-png-image.png" alt="product1" class="main-2-img"></a>
                                <div class="text-center">
                                    <h5>APPLE iPhone 11 (Black, 64 GB)</h5>
                                    <span class="badge badge-success">4.3 <i class="fas fa-star"></i></span> <span class="text-secondary">(234)</span>
                                    <div class="price py-2">
                                        <s>$200</s>
                                        <strong>$152</strong>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item py-2">
                            <div class="product font-rale">
                                <a href="#"><img src="image/jens/4-jeans-png-image.png" alt="product1" class="main-2-img"></a>
                                <div class="text-center">
                                    <h5>APPLE iPhone 11 (Black, 64 GB)</h5>
                                    <span class="badge badge-success">4.3 <i class="fas fa-star"></i></span> <span class="text-secondary">(234)</span>
                                    <div class="price py-2">
                                        <s>$200</s>
                                        <strong>$152</strong>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item py-2">
                            <div class="product font-rale">
                                <a href="#"><img src="image/jens/6-jeans-png-image.png" alt="product1" class="main-2-img"></a>
                                <div class="text-center">
                                    <h5>APPLE iPhone 11 (Black, 64 GB)</h5>
                                    <span class="badge badge-success">4.3 <i class="fas fa-star"></i></span> <span class="text-secondary">(234)</span>
                                    <div class="price py-2">
                                        <s>$200</s>
                                        <strong>$152</strong>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item py-2">
                            <div class="product font-rale">
                                <a href="#"><img src="image/suit/1-suit-png-image.png" alt="product1" class="main-2-img"></a>
                                <div class="text-center">
                                    <h5>APPLE iPhone 11 (Black, 64 GB)</h5>
                                    <span class="badge badge-success">4.3 <i class="fas fa-star"></i></span> <span class="text-secondary">(234)</span>
                                    <div class="price py-2">
                                        <s>$200</s>
                                        <strong>$152</strong>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item py-2">
                            <div class="product font-rale">
                                <a href="#"><img src="image/suit/2-suit-png-image.png" alt="product1" class="main-2-img"></a>
                                <div class="text-center">
                                    <h5>APPLE iPhone 11 (Black, 64 GB)</h5>
                                    <span class="badge badge-success">4.3 <i class="fas fa-star"></i></span> <span class="text-secondary">(234)</span>
                                    <div class="price py-2">
                                        <s>$200</s>
                                        <strong>$152</strong>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item py-2">
                            <div class="product font-rale">
                                <div class="d-flex flex-column">
                                    <a href="#"><img src="image/suit/5-suit-png-image.png" class="main-2-img" alt="pro1"></a>
                                    <div class="text-center">
                                        <h5>APPLE iPhone 11 (Black, 64 GB)</h5>
                                        <span class="badge badge-success">4.3 <i class="fas fa-star"></i></span> <span class="text-secondary">(234)</span>
                                        <div class="price py-2">
                                            <s>$200</s>
                                            <strong>$152</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item py-2">
                            <div class="product font-rale">
                                <div class="d-flex flex-column">
                                    <a href="#"><img src="image/suit/8-suit-png-image.png" class="main-2-img" alt="pro1"></a>
                                    <div class="text-center">
                                        <h5>APPLE iPhone 11 (Black, 64 GB)</h5>
                                        <span class="badge badge-success">4.3 <i class="fas fa-star"></i></span> <span class="text-secondary">(234)</span>
                                        <div class="price py-2">
                                            <s>$200</s>
                                            <strong>$152</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item py-2">
                            <div class="product font-rale">
                                <div class="d-flex flex-column">
                                    <a href="#"><img src="image/t-shirt/1-t-shirt-png-image.png" class="main-2-img" alt="pro1"></a>
                                    <div class="text-center">
                                        <h5>APPLE iPhone 11 (Black, 64 GB)</h5>
                                        <span class="badge badge-success">4.3 <i class="fas fa-star"></i></span> <span class="text-secondary">(234)</span>
                                        <div class="price py-2">
                                            <s>$200</s>
                                            <strong>$152</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item py-2">
                            <div class="product font-rale">
                                <div class="d-flex flex-column">
                                    <a href="#"><img src="image/t-shirt/2-t-shirt-png-image.png" class="main-2-img" alt="pro1"></a>
                                    <div class="text-center">
                                        <h5>APPLE iPhone 11 (Black, 64 GB)</h5>
                                        <span class="badge badge-success">4.3 <i class="fas fa-star"></i></span> <span class="text-secondary">(234)</span>
                                        <div class="price py-2">
                                            <s>$200</s>
                                            <strong>$152</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item py-2">
                            <div class="product font-rale">
                                <div class="d-flex flex-column">
                                    <a href="#"><img src="image/t-shirt/5-t-shirt-png-image.png" class="main-2-img" alt="pro1"></a>
                                    <div class="text-center">
                                        <h5>APPLE iPhone 11 (Black, 64 GB)</h5>
                                        <span class="badge badge-success">4.3 <i class="fas fa-star"></i></span> <span class="text-secondary">(234)</span>
                                        <div class="price py-2">
                                            <s>$200</s>
                                            <strong>$152</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item py-2">
                            <div class="product font-rale">
                                <div class="d-flex flex-column">
                                    <a href="#"><img src="image/suit/5-suit-png-image.png" class="main-2-img" alt="pro1"></a>
                                    <div class="text-center">
                                        <h5>APPLE iPhone 11 (Black, 64 GB)</h5>
                                        <span class="badge badge-success">4.3 <i class="fas fa-star"></i></span> <span class="text-secondary">(234)</span>
                                        <div class="price py-2">
                                            <s>$200</s>
                                            <strong>$152</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- !owl carousel -->
                </div>
            </section>
        </div>

        <div class="row">
            <section id="shoes" class="container-fluid main">
                <div class="container">
                    <h4 class="font-rubik font-size-20">Recentely Viewed</h4>
                    <hr>
                    <!-- owl carousel -->
                    <div class="owl-carousel owl-theme">

                        <div class="item py-2">
                            <div class="product font-rale">
                                <a href="#"><img src="image/shoes/2-2-shoes-png-clipart.png" alt="product1" class="main-2-img"></a>
                                <div class="text-center">
                                    <h5>APPLE iPhone 11 (Black, 64 GB)</h5>
                                    <span class="badge badge-success">4.3 <i class="fas fa-star"></i></span> <span class="text-secondary">(234)</span>
                                    <div class="price py-2">
                                        <s>$200</s>
                                        <strong>$152</strong>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item py-2">
                            <div class="product font-rale">
                                <a href="#"><img src="image/shoes/27428-5-nike-shoes-transparent-background.png" alt="product1" class="main-2-img"></a>
                                <div class="text-center">
                                    <h5>APPLE iPhone 11 (Black, 64 GB)</h5>
                                    <span class="badge badge-success">4.3 <i class="fas fa-star"></i></span> <span class="text-secondary">(234)</span>
                                    <div class="price py-2">
                                        <s>$200</s>
                                        <strong>$152</strong>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item py-2">
                            <div class="product font-rale">
                                <a href="#"><img src="image/shoes/3-2-shoes-transparent.png" alt="product1" class="main-2-img"></a>
                                <div class="text-center">
                                    <h5>APPLE iPhone 11 (Black, 64 GB)</h5>
                                    <span class="badge badge-success">4.3 <i class="fas fa-star"></i></span> <span class="text-secondary">(234)</span>
                                    <div class="price py-2">
                                        <s>$200</s>
                                        <strong>$152</strong>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item py-2">
                            <div class="product font-rale">
                                <a href="#"><img src="image/shoes/5-2-shoes-png-picture.png" alt="product1" class="main-2-img"></a>
                                <div class="text-center">
                                    <h5>APPLE iPhone 11 (Black, 64 GB)</h5>
                                    <span class="badge badge-success">4.3 <i class="fas fa-star"></i></span> <span class="text-secondary">(234)</span>
                                    <div class="price py-2">
                                        <s>$200</s>
                                        <strong>$152</strong>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item py-2">
                            <div class="product font-rale">
                                <a href="#"><img src="image/shoes/2-2-shoes-png-clipart.png" alt="product1" class="main-2-img"></a>
                                <div class="text-center">
                                    <h5>APPLE iPhone 11 (Black, 64 GB)</h5>
                                    <span class="badge badge-success">4.3 <i class="fas fa-star"></i></span> <span class="text-secondary">(234)</span>
                                    <div class="price py-2">
                                        <s>$200</s>
                                        <strong>$152</strong>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item py-2">
                            <div class="product font-rale">
                                <div class="d-flex flex-column">
                                    <a href="#"><img src="image/shoes/27428-5-nike-shoes-transparent-background.png" class="main-2-img" alt="pro1"></a>
                                    <div class="text-center">
                                        <h5>APPLE iPhone 11 (Black, 64 GB)</h5>
                                        <span class="badge badge-success">4.3 <i class="fas fa-star"></i></span> <span class="text-secondary">(234)</span>
                                        <div class="price py-2">
                                            <s>$200</s>
                                            <strong>$152</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item py-2">
                            <div class="product font-rale">
                                <div class="d-flex flex-column">
                                    <a href="#"><img src="image/shoes/3-2-shoes-transparent.png" class="main-2-img" alt="pro1"></a>
                                    <div class="text-center">
                                        <h5>APPLE iPhone 11 (Black, 64 GB)</h5>
                                        <span class="badge badge-success">4.3 <i class="fas fa-star"></i></span> <span class="text-secondary">(234)</span>
                                        <div class="price py-2">
                                            <s>$200</s>
                                            <strong>$152</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item py-2">
                            <div class="product font-rale">
                                <div class="d-flex flex-column">
                                    <a href="#"><img src="image/shoes/5-2-shoes-png-picture.png" class="main-2-img" alt="pro1"></a>
                                    <div class="text-center">
                                        <h5>APPLE iPhone 11 (Black, 64 GB)</h5>
                                        <span class="badge badge-success">4.3 <i class="fas fa-star"></i></span> <span class="text-secondary">(234)</span>
                                        <div class="price py-2">
                                            <s>$200</s>
                                            <strong>$152</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item py-2">
                            <div class="product font-rale">
                                <div class="d-flex flex-column">
                                    <a href="#"><img src="image/shoes/2-2-shoes-png-clipart.png" class="main-2-img" alt="pro1"></a>
                                    <div class="text-center">
                                        <h5>APPLE iPhone 11 (Black, 64 GB)</h5>
                                        <span class="badge badge-success">4.3 <i class="fas fa-star"></i></span> <span class="text-secondary">(234)</span>
                                        <div class="price py-2">
                                            <s>$200</s>
                                            <strong>$152</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item py-2">
                            <div class="product font-rale">
                                <div class="d-flex flex-column">
                                    <a href="#"><img src="image/shoes/27428-5-nike-shoes-transparent-background.png" class="main-2-img" alt="pro1"></a>
                                    <div class="text-center">
                                        <h5>APPLE iPhone 11 (Black, 64 GB)</h5>
                                        <span class="badge badge-success">4.3 <i class="fas fa-star"></i></span> <span class="text-secondary">(234)</span>
                                        <div class="price py-2">
                                            <s>$200</s>
                                            <strong>$152</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item py-2">
                            <div class="product font-rale">
                                <div class="d-flex flex-column">
                                    <a href="#"><img src="image/shoes/3-2-shoes-transparent.png" class="main-2-img" alt="pro1"></a>
                                    <div class="text-center">
                                        <h5>APPLE iPhone 11 (Black, 64 GB)</h5>
                                        <span class="badge badge-success">4.3 <i class="fas fa-star"></i></span> <span class="text-secondary">(234)</span>
                                        <div class="price py-2">
                                            <s>$200</s>
                                            <strong>$152</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- !owl carousel -->
                </div>
            </section>
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
                        <h5> Design & Developed by : <strong style="color: #6f57f5; font-family: 'Reggae One', cursive;">RAjan
                                SAh</strong> </h5>
                    </div>
                </div>

            </div>
        </section>
        <!-- FOOTER Section Close -->
    </footer>
    <!-- footer section end -->


    <!-- javascript -->
    <script src="../js/custom.js"></script>
    <script src="../js/image-magnify.js"></script>

    <!-- for image magnifyed -->
    <script src="https://code.jquery.com/jquery-1.9.1.min.js" integrity="sha256-wS9gmOZBqsqWxgIVgA8Y9WcQOa7PgSIX+rPA0VL2rbQ=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/jquery.simpleGallery.js"></script>
    <script type="text/javascript" src="../js/jquery.simpleLens.js"></script>

    <!-- Owl Carousel Js file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

    <!--  isotope plugin cdn  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>


</body>

</html>
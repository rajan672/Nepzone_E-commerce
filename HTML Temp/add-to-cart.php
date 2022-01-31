<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Add to cart page</title>

  <!-- jquery plugin for magnifying image -->
  <link rel="stylesheet" type="text/css" href="css/jquery.simpleGallery.css">
  <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />


  <!-- font awesome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

  <!-- Icons Link -->
  <script defer src="https://friconix.com/cdn/friconix.js"> </script>


</head>

<body>



  <!-- Button trigger modal -->
  <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button> -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document" id="modal">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

        <div class="modal-body">
          <div class="row">
            <div class="col-md-5 bg-primary text-light" id="part-1">
              <h2>Login</h2>
              <p>Get access to your Orders, Wishlist and Recommendations</p>
              <img src="image/Logo/science-fiction.png" alt="">
            </div>
            <div class="col-md-7 bg-light" id="part-2">

              <form id="login-form">
                <div class="form-group">
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter email,Mobile no">
                </div>

                <div class="form-group" style="margin: 30px 0px;">
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder=" Enter Password">
                  <a href="" class="btn btn-link forgot">Forgot ?</a>
                </div>

                <button type="submit" class="btn btn-danger text-light btn-lg btn-block">Login</button>
              </form>

              <a href="" class="btn btn-light text-primary btn-lg btn-block new">New to NepZone ? Sign Up</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal end -->

  <!-- Heading section start -->
  <header>

    <!-- Primary Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark header-top">
      <!-- navbar start .navbar -->

      <!-- Logo a tag start -->
      <a class="navbar-brand" href="#">
        <img src="image/Logo/output-onlinepngtools (2).png" width="110px" height="60px" alt="">
        <!-- img tag for logo -->
      </a>
      <!-- Logo a tag end -->

      <!-- button tag for toggler effect start -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- button tag for toggler effect end -->

      <!-- #navbarNav start -->
      <div class="collapse navbar-collapse text-center" id="navbarNav">

        <!-- navbar elements start -->
        <ul class="navbar-nav m-auto">
          <li class="nav-itemss ">
            <a class="nav-link" href="#">TOP OFFERS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">GROCERY</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">MOBILES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">FASHION</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">ELECTRONICS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">APPLIANCES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><span class="badge badge-danger cart-badge">4</span> <i
                class="fa fa-shopping-cart" style="font-size: 1.2em;"></i> Cart</a>
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


    <!-- Shopping cart section  -->
    <section id="cart" class="py-3">
        <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Shopping Cart</h5>

        <!--  shopping cart items   -->
            <div class="row">
                <div class="col-sm-9">
                    <!-- cart item -->
                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="image/Laptop/33493-6-asus-laptop-transparent-image-thumb.png" style="height: 120px;" alt="cart1" class="img-fluid">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-baloo font-size-20">Samsung Galaxy 10</h5>
                                <small>by Samsung</small>
                                <!-- product rating -->
                                <div class="d-flex">
                                    <div class="rating text-primary font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                      </div>
                                      <a href="#" class="px-2 font-rale font-size-14">20,534 ratings</a>
                                </div>
                                <!--  !product rating-->

                                <!-- product qty -->
                                    <div class="qty d-flex pt-2">
                                        <div class="d-flex font-rale product-quanty">
                                            <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                            <input type="text" data-id="pro1" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                            <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                        </div>
                                        <div>
                                          <button type="submit" class="btn font-baloo text-danger px-3 border-right">Delete</button>
                                          <button type="submit" class="btn font-baloo text-info">Save for Later</button>
                                        </div>
                                    </div>
                                <!-- !product qty -->

                            </div>

                            <div class="col-sm-2 text-right">
                                <div class="font-size-20 text-danger font-baloo">
                                    $<span class="product_price">152</span>
                                </div>
                            </div>
                        </div>
                    <!-- !cart item -->

                    <!-- cart item -->
                    <div class="row border-top py-3 mt-3">
                        <div class="col-sm-2">
                            <img src="image/mobiles/14.png" style="height: 120px;" alt="cart1" class="img-fluid">
                        </div>
                        <div class="col-sm-8">
                            <h5 class="font-baloo font-size-20">Samsung Galaxy 10</h5>
                            <small>by Samsung</small>
                            <!-- product rating -->
                            <div class="d-flex">
                                <div class="rating text-primary font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                  </div>
                                  <a href="#" class="px-2 font-rale font-size-14">20,534 ratings</a>
                            </div>
                            <!--  !product rating-->

                            <!-- product qty -->
                                <div class="qty d-flex pt-2">
                                    <div class="d-flex font-rale product-quanty">
                                        <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                        <input type="text" data-id="pro1" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                        <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                    </div>
                                    <div>
                                      <button type="submit" class="btn font-baloo text-danger px-3 border-right">Delete</button>
                                      <button type="submit" class="btn font-baloo text-info">Save for Later</button>
                                    </div>
                                </div>
                            <!-- !product qty -->

                        </div>

                        <div class="col-sm-2 text-right">
                            <div class="font-size-20 text-danger font-baloo">
                                $<span class="product_price">152</span>
                            </div>
                        </div>
                    </div>
                <!-- !cart item -->

                    <!-- cart item -->
                    <div class="row border-top py-3 mt-3">
                        <div class="col-sm-2">
                            <img src="image/t-shirt/7-black-t-shirt-png-image.png" style="height: 120px;" alt="cart1" class="img-fluid">
                        </div>
                        <div class="col-sm-8">
                            <h5 class="font-baloo font-size-20">Samsung Galaxy 10</h5>
                            <small>by Samsung</small>
                            <!-- product rating -->
                            <div class="d-flex">
                                <div class="rating text-primary font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                  </div>
                                  <a href="#" class="px-2 font-rale font-size-14">20,534 ratings</a>
                            </div>
                            <!--  !product rating-->

                            <!-- product qty -->
                                <div class="qty d-flex pt-2">
                                    <div class="d-flex font-rale product-quanty">
                                        <button class="qty-up border bg-light"><i class="fas fa-angle-up"></i></button>
                                        <input type="text" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                        <button class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                    </div>
                                    <div>
                                      <button type="submit" class="btn font-baloo text-danger px-3 border-right">Delete</button>
                                      <button type="submit" class="btn font-baloo text-info">Save for Later</button>
                                    </div>
                                </div>
                            <!-- !product qty -->

                        </div>

                        <div class="col-sm-2 text-right">
                            <div class="font-size-20 text-danger font-baloo">
                                $<span class="product_price">152</span>
                            </div>
                        </div>
                    </div>
                <!-- !cart item -->
                </div>
                <!-- subtotal section-->
                <div class="col-sm-3">
                    <div class="sub-total border text-center mt-2">
                        <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Your order is eligible for FREE Delivery.</h6>
                        <div class="border-top py-4">
                            <h5 class="font-baloo font-size-20">Subtotal (2 item):&nbsp; <span class="text-danger">$<span class="text-danger" id="deal-price">152.00</span> </span> </h5>
                            <button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
                        </div>
                    </div>
                </div>
                <!-- !subtotal section-->
            </div>
        <!--  !shopping cart items   -->
        </div>
    </section>
    <!-- !Shopping cart section  -->
     
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
            <h5> copyright &#169; 04/24/2021 All reserved by : <strong
                style="color: #6f57f5; font-family: 'Reggae One', cursive;">NepZone</strong> </h5>
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


  <!-- for image magnifyed -->
  <script src="https://code.jquery.com/jquery-1.9.1.min.js" integrity="sha256-wS9gmOZBqsqWxgIVgA8Y9WcQOa7PgSIX+rPA0VL2rbQ=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
  <script type="text/javascript" src="js/jquery.simpleLens.js"></script>

  <!-- Owl Carousel Js file -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

  <!--  isotope plugin cdn  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>

   <!-- javascript -->
   <script src="js/custom.js"></script>
</body>

</html>
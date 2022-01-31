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


  <!-- Main section start -->
  <div class="container-fluid s-main">
    <div class="row">
      <div class="col-md-3 col-sm-3">
        <aside class="bg-light side">
            <h4>Filters <button class="btn btn-link btn-sm float-right clear-all">Clear All</button> </h4>
            <button class="btn btn-sm btn-secondary p-1 m-1 clos">&times; Blue</button>
            <button class="btn btn-sm btn-secondary p-1 m-1 clos">&times; Blue</button>
            <button class="btn btn-sm btn-secondary p-1 m-1 clos">&times; Blue</button>
            <button class="btn btn-sm btn-secondary p-1 m-1 clos">&times; Blue</button>
            <button class="btn btn-sm btn-secondary p-1 m-1 clos">&times; Blue</button>
          
          <div class="brand-item">
            <a class="btn btn-link btn-block text-left" data-toggle="collapse" href="#collapseExample1" role="button"
              aria-expanded="false" aria-controls="collapseExample">
              <h5>CATEGORIES<i class="fa fa-chevron-down float-right"></i></h5>
            </a>
            <div class="collapse show" id="collapseExample1">
              <ul class="navbar-nav flex-column pl-3 mt-3">
                <li class="nav-item">
                  <a href="" > <input type="checkbox">&nbsp; Casual shoes</a>
                </li>
                <li class="nav-item">
                  <a href="" > <input type="checkbox">&nbsp; Sports Shoes</a>
                </li>
                <li class="nav-item">
                  <a href="" > <input type="checkbox">&nbsp; Formal Shoes</a>
                </li>
                <li class="nav-item">
                  <a href="" > <input type="checkbox">&nbsp; Ethnic shoes</a>
                </li>
                <li class="nav-item">
                  <a href="" > <input type="checkbox">&nbsp; Party Shoes</a>
                </li>
                <li class="nav-item">
                  <a href="" > <input type="checkbox">&nbsp; Wedding Shoes</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="brand-item">
            <a class="btn btn-link btn-block text-left" data-toggle="collapse" href="#collapseExample2" role="button"
              aria-expanded="false" aria-controls="collapseExample">
              <h5>BRAND<i class="fa fa-chevron-down float-right"></i></h5>
            </a>
            <div class="collapse show" id="collapseExample2">
              <ul class="navbar-nav flex-column pl-3 mt-3">
                <li class="nav-item">
                  <a href="" > <input type="checkbox">&nbsp; Bata</a>
                </li>
                <li class="nav-item">
                  <a href="" > <input type="checkbox">&nbsp; Sparx</a>
                </li>
                <li class="nav-item">
                  <a href="" > <input type="checkbox">&nbsp; Nike</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="brand-item">
            <a class="btn btn-link btn-block text-left" data-toggle="collapse" href="#collapseExample6" role="button"
              aria-expanded="false" aria-controls="collapseExample">
              <h5>Sort By<i class="fa fa-chevron-down float-right"></i></h5>
            </a>
            <div class="collapse show" id="collapseExample6">
              <ul class="navbar-nav flex-column pl-3 mt-3">
                <li class="nav-item">
                  <a href="" > <input type="checkbox">&nbsp; Popularity</a>
                </li>
                <li class="nav-item">
                  <a href="" > <input type="checkbox">&nbsp; Price-Low to High</a>
                </li>
                <li class="nav-item">
                  <a href="" > <input type="checkbox">&nbsp; Price -High to Low</a>
                </li>
                <li class="nav-item">
                  <a href="" > <input type="checkbox">&nbsp; Newest First</a>
                </li>
                <li class="nav-item">
                  <a href="" > <input type="checkbox">&nbsp; Discount</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="brand-item">
            <a class="btn btn-link btn-block text-left" data-toggle="collapse" href="#collapseExample3" role="button"
              aria-expanded="false" aria-controls="collapseExample">
              <h5>Size<i class="fa fa-chevron-down float-right"></i></h5>
            </a>
            <div class="collapse show" id="collapseExample3">
              <ul class="navbar-nav flex-column pl-3 mt-3">
                <li class="nav-item">
                  <a href="" > <input type="checkbox">&nbsp; 10</a>
                </li>
                <li class="nav-item">
                  <a href="" > <input type="checkbox">&nbsp; 9.5</a>
                </li>
                <li class="nav-item">
                  <a href="" > <input type="checkbox">&nbsp; 9</a>
                </li>
                <li class="nav-item">
                  <a href="" > <input type="checkbox">&nbsp; 8</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="brand-item">
            <a class="btn btn-link btn-block text-left" data-toggle="collapse" href="#collapseExample4" role="button"
              aria-expanded="false" aria-controls="collapseExample">
              <h5>Price<i class="fa fa-chevron-down float-right"></i></h5>
            </a>
            <div class="collapse show" id="collapseExample4">
              <ul class="navbar-nav flex-column pl-3 mt-3">
                <li class="nav-item">
                  <a href="" > <input type="checkbox">&nbsp; Under 5000</a>
                </li>
                <li class="nav-item">
                  <a href="" > <input type="checkbox">&nbsp; Under 2000</a>
                </li>
                <li class="nav-item">
                  <a href="" > <input type="checkbox">&nbsp; Under 1000</a>
                </li>
                <li class="nav-item">
                  <a href="" > <input type="checkbox">&nbsp; Under 500</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="brand-item">
            <a class="btn btn-link btn-block text-left" data-toggle="collapse" href="#collapseExample5" role="button"
              aria-expanded="false" aria-controls="collapseExample">
              <h5>Color<i class="fa fa-chevron-down float-right"></i></h5>
            </a>
            <div class="collapse show" id="collapseExample5">
              <ul class="navbar-nav flex-column pl-3 mt-3">
                <li class="nav-item">
                  <a href="" > <input type="checkbox">&nbsp; Beige</a>
                </li>
                <li class="nav-item">
                  <a href="" > <input type="checkbox">&nbsp; Black</a>
                </li>
                <li class="nav-item">
                  <a href="" > <input type="checkbox">&nbsp; Blue</a>
                </li>
                <li class="nav-item">
                  <a href="" > <input type="checkbox">&nbsp; Brown</a>
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
                  <li class="breadcrumb-item"><a href="#">Library</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Data</li>
                </ol>
              </nav>
            </div>

            <div class="section-1-center">
              <a href="#" class="row text-body border laptop-pro">
                <div class="col-md-3 col-sm-3 col-3">
                  <i class="fa fa-heart float-right"></i>
                  <img class="img-fluid m-1 " src="image/Laptop/33493-6-asus-laptop-transparent-image-thumb.png" alt="">
                </div>
                <div class="col-md-5 col-sm-5 col-5">
                  <h5 class="h5">acer Aspire 7 Core i5 10th Gen - (8 GB/512 GB SSD/Windows 10 Home/4 GB Graphics/NVIDIA GeForce GTX 165...</h5> <br>
                  <span class="badge badge-success">4.3 <i class="fas fa-star"></i></span> <span class="text-secondary">180 Ratings &nbsp;</span> <span class="text-secondary"> &nbsp; & 24 Reviews</span><br>
                  <ul class="pl-3 text-secondary pro-details-li">
                    <li>Intel Core i5 Processor (10th Gen)</li>
                    <li>8 GB DDR4 RAM</li>
                    <li>64 bit Windows 10 Operating System</li>
                    <li>512 GB SSD</li>
                    <li>39.62 cm (15.6 inch) Display</li>
                    <li>Quick Access, Acer Care Center, Acer Product Registration, Acer Collection</li>
                    <li>1 Year International Travelers Warranty</li>
                  </ul>
                </div>
                <div class="col-md-4 col-sm-4 col-4 text-center mt-4">
                  <h4 class="h4">NRP.59,990</h4>
                  <h6 class="text-secondary"><strike>NRP.89,999</strike></h6>
                  <span class="text-success"><small> <strong>50% Off</strong> </small></span>
                </div>
              </a>

              <a href="#" class="row text-body border laptop-pro">
                <div class="col-md-3 col-sm-3 col-3">
                  <i class="fa fa-heart float-right"></i>
                  <img class="img-fluid m-1" src="image/Laptop/33493-6-asus-laptop-transparent-image-thumb.png" alt="">
                </div>
                <div class="col-md-5 col-sm-5 col-5">
                  <h5 class="h5">acer Aspire 7 Core i5 10th Gen - (8 GB/512 GB SSD/Windows 10 Home/4 GB Graphics/NVIDIA GeForce GTX 165...</h5> <br>
                  <span class="badge badge-success">4.3 <i class="fas fa-star"></i></span> <span class="text-secondary">180 Ratings &nbsp;</span> <span class="text-secondary"> &nbsp; & 24 Reviews</span><br>
                  <ul class="pl-3 text-secondary pro-details-li">
                    <li>Intel Core i5 Processor (10th Gen)</li>
                    <li>8 GB DDR4 RAM</li>
                    <li>64 bit Windows 10 Operating System</li>
                    <li>512 GB SSD</li>
                    <li>39.62 cm (15.6 inch) Display</li>
                    <li>Quick Access, Acer Care Center, Acer Product Registration, Acer Collection</li>
                    <li>1 Year International Travelers Warranty</li>
                  </ul>
                </div>
                <div class="col-md-4 col-sm-4 col-4 text-center mt-4">
                  <h4 class="h4">NRP.59,990</h4>
                  <h6 class="text-secondary"><strike>NRP.89,999</strike></h6>
                  <span class="text-success"><small> <strong>50% Off</strong> </small></span>
                </div>
              </a>

              <div class="row">
                <div class="col-md-3 col-sm-4 col-6">

                  <a href="" class="product">
                    <div class="product-top">
                      <i class="fa fa-heart float-right"></i>
                      <img class="img-fluid" src="image/t-shirt/1-t-shirt-png-image.png" alt="">
                    </div>

                    <div class="product-bottom">
                      <div class="product-desc-top">
                        <div class="product-brand text-secondary">Puma</div>
                        <div class="product-desc text-dark">T-shirt for mens</div>
                        <div class="product-price">
                          <span><strong>NPR. 500</strong></span> <br>
                          <span class="text-secondary"><strike>NPR.1000</strike></span> <br>
                          <span class="text-success"><small> <strong>50% Off</strong> </small></span>
                        </div>
                      </div>
                      <div class="product-desc-bottom">
                        <div class="product-desc-extra">
                          <span class="badge badge-success">4.3 <i class="fas fa-star"></i></span> <span class="text-secondary">(234)</span> <br>
                          <span><strong>Size :</strong></span>
                          <span><strong>XXL,XL,L,M,S</strong></span>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="col-md-3 col-sm-4 col-6">
                  <a href="" class="product">
                    <div class="product-top">
                      <i class="fa fa-heart float-right"></i>
                      <img class="img-fluid" src="image/t-shirt/1-t-shirt-png-image.png" alt="">
                    </div>

                    <div class="product-bottom">
                      <div class="product-desc-top">
                        <div class="product-brand text-secondary">Puma</div>
                        <div class="product-desc text-dark">T-shirt for mens</div>
                        <div class="product-price">
                          <span><strong>NPR. 500</strong></span> <br>
                          <span class="text-secondary"><strike>NPR.1000</strike></span> <br>
                          <span class="text-success"><small> <strong>50% Off</strong> </small></span>
                        </div>
                      </div>
                      <div class="product-desc-bottom">
                        <div class="product-desc-extra">
                          <span class="badge badge-success">4.3 <i class="fas fa-star"></i></span> <span class="text-secondary">(234)</span> <br>
                          <span><strong>Size :</strong></span>
                          <span><strong>XXL,XL,L,M,S</strong></span>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="col-md-3 col-sm-4 col-6">
                  <a href="" class="product">
                    <div class="product-top">
                      <i class="fa fa-heart float-right"></i>
                      <img class="img-fluid" src="image/t-shirt/1-t-shirt-png-image.png" alt="">
                    </div>

                    <div class="product-bottom">
                      <div class="product-desc-top">
                        <div class="product-brand text-secondary">Puma</div>
                        <div class="product-desc text-dark">T-shirt for mens</div>
                        <div class="product-price">
                          <span><strong>NPR. 500</strong></span> <br>
                          <span class="text-secondary"><strike>NPR.1000</strike></span> <br>
                          <span class="text-success"><small> <strong>50% Off</strong> </small></span>
                        </div>
                      </div>
                      <div class="product-desc-bottom">
                        <div class="product-desc-extra">
                          <span class="badge badge-success">4.3 <i class="fas fa-star"></i></span> <span class="text-secondary">(234)</span> <br>
                          <span><strong>Size :</strong></span>
                          <span><strong>XXL,XL,L,M,S</strong></span>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="col-md-3 col-sm-4 col-6">
                  <a href="" class="product">
                    <div class="product-top">
                      <i class="fa fa-heart float-right"></i>
                      <img class="img-fluid" src="image/t-shirt/1-t-shirt-png-image.png" alt="">
                    </div>

                    <div class="product-bottom">
                      <div class="product-desc-top">
                        <div class="product-brand text-secondary">Puma</div>
                        <div class="product-desc text-dark">T-shirt for mens</div>
                        <div class="product-price">
                          <span><strong>NPR. 500</strong></span> <br>
                          <span class="text-secondary"><strike>NPR.1000</strike></span> <br>
                          <span class="text-success"><small> <strong>50% Off</strong> </small></span>
                        </div>
                      </div>
                      <div class="product-desc-bottom">
                        <div class="product-desc-extra">
                          <span class="badge badge-success">4.3 <i class="fas fa-star"></i></span> <span class="text-secondary">(234)</span> <br>
                          <span><strong>Size :</strong></span>
                          <span><strong>XXL,XL,L,M,S</strong></span>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="col-md-3 col-sm-4 col-6">
                  <a href="" class="product">
                    <div class="product-top">
                      <i class="fa fa-heart float-right"></i>
                      <img class="img-fluid" src="image/t-shirt/1-t-shirt-png-image.png" alt="">
                    </div>

                    <div class="product-bottom">
                      <div class="product-desc-top">
                        <div class="product-brand text-secondary">Puma</div>
                        <div class="product-desc text-dark">T-shirt for mens</div>
                        <div class="product-price">
                          <span><strong>NPR. 500</strong></span> <br>
                          <span class="text-secondary"><strike>NPR.1000</strike></span> <br>
                          <span class="text-success"><small> <strong>50% Off</strong> </small></span>
                        </div>
                      </div>
                      <div class="product-desc-bottom">
                        <div class="product-desc-extra">
                          <span class="badge badge-success">4.3 <i class="fas fa-star"></i></span> <span class="text-secondary">(234)</span> <br>
                          <span><strong>Size :</strong></span>
                          <span><strong>XXL,XL,L,M,S</strong></span>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="col-md-3 col-sm-4 col-6">
                  <a href="" class="product">
                    <div class="product-top">
                      <i class="fa fa-heart float-right"></i>
                      <img class="img-fluid" src="image/t-shirt/1-t-shirt-png-image.png" alt="">
                    </div>

                    <div class="product-bottom">
                      <div class="product-desc-top">
                        <div class="product-brand text-secondary">Puma</div>
                        <div class="product-desc text-dark">T-shirt for mens</div>
                        <div class="product-price">
                          <span><strong>NPR. 500</strong></span> <br>
                          <span class="text-secondary"><strike>NPR.1000</strike></span> <br>
                          <span class="text-success"><small> <strong>50% Off</strong> </small></span>
                        </div>
                      </div>
                      <div class="product-desc-bottom">
                        <div class="product-desc-extra">
                          <span class="badge badge-success">4.3 <i class="fas fa-star"></i></span> <span class="text-secondary">(234)</span> <br>
                          <span><strong>Size :</strong></span>
                          <span><strong>XXL,XL,L,M,S</strong></span>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>

            <div class="section-1-bottom">
              <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                  </li>
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
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

  <!-- javascript -->
  <script src="js/custom.js"></script>

  <!-- Owl Carousel Js file -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

  <!--  isotope plugin cdn  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"
    integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>


  <!-- JQuery -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

</body>

</html>
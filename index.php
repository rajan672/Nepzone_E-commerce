<?php
include('./database-connect.php');
include('./partation-file/header.php');
?>
<!-- Main section start -->
<div class="container-fluid main">
  <!-- partacision-1  Banner -->
  <div class="main-1">
    <!-- Banner slider -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <a href="">
            <img class="d-block w-100 img" src="image/banner/Banner1.png" alt="First slide">
          </a>
        </div>
        <div class="carousel-item">
          <a href="">
            <img class="d-block w-100 img" src="image/banner/Banner2.png" alt="Second slide">
          </a>
        </div>
        <div class="carousel-item">
          <a href="">
            <img class="d-block w-100 img" src="image/banner/Banner1.png" alt="Third slide">
          </a>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <?php
  include('./partation-file/deals-of-the-day.php');
  ?>

  <!-- partacision-3     Banner-->
  <!-- <section id="banner_adds">
    <div class="container py-5 text-center ">
      <a href=""><img src="image/banner/b1.jpg" alt="banner1" class="img-fluid img-banner"></a>
      <a href=""><img src="image/banner/b2.jpg" alt="banner1" class="img-fluid img-banner"></a>
    </div>
  </section> -->

  <?php
  /* include('./partation-file/special-price.php'); */
 
  include('./partation-file/men-shoes.php');

  include('./partation-file/women-shoes.php');
  ?>

  <!-- partacision-7  banner for electronics-->
  <!-- Banner Ads  -->
  <section id="banner_adds">
    <div class="container py-5 text-center">
      <a href=""><img src="image/banner/banner1-cr-500x150.jpg" alt="banner1" class="img-fluid img-banner"></a>
      <a href=""><img src="image/banner/banner2-cr-500x150.jpg" alt="banner1" class="img-fluid img-banner"></a>
    </div>
  </section>
  <!-- !Banner Ads  -->

  <?php
  include('./partation-file/earphones.php');

  include('./partation-file/phones.php');

  include('./partation-file/laptop.php');
  
  include('./partation-file/men-clothes.php');

  include('./partation-file/women-clothes.php');
  
  include('./partation-file/t-shirts.php');
  
  ?>
</div>
<!-- Main section start -->
<?php
/* include('./partation-file/footer.php'); */
?>

<!-- Admin login start -->
    <!-- Button trigger modal -->
    <a class="" data-toggle="modal" data-target="#exampleModalCenter3">A-LogIn</a>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Admin Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form class="text-align-left" id="admin-login">
                        <div class="form-group p-1 m-1">
                            <i class="fi-xwsuxl-envelope-solid"></i>
                            <label for="ALoginEmail">Email address</label>
                            <input type="email" class="form-control" id="ALoginEmail" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>

                        <div class="form-group p-1 m-1">
                            <i class="fi-xnsuxl-lock-solid"></i>
                            <label for="ALoginPass">Password</label>
                            <input type="password" class="form-control" id="ALoginPass" placeholder="Password">
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <span id="ALoginMsg"></span>
                    <button type="button" class="btn btn-primary" onclick="ALogin()">Admin Login</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- admin login end -->
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

<script src="js/admin.js"></script>

<!-- Owl Carousel Js file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

<!--  isotope plugin cdn  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>


<!-- JQuery -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

</body>

</html>
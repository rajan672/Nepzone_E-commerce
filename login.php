<?php
include('./partation-file/header.php');

?>
<style>
    .Lpage {
        min-height: 100vh;
        margin-top: 20px;
    }

    .page {
        height: 400px;
        background-color: white;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
    }

    .vertical {
        width: calc(50% - 50px);
        height: 100%;
        background-color: white;
        padding: 2% 5%;
        line-height: 1em;
        font-size: 180px;
        text-align: center;
    }

    .vertical>h5,
    .aside>h5 {
        padding-top: 70px;
    }

    .aside {
        width: calc(50% + 50px);
        height: 100%;
        background-color: rgb(31, 223, 223);
        border-left: 100px solid white;
        border-bottom: 400px solid transparent;
        padding: 0% 5%;
        line-height: 1em;
        font-size: 180px;
        text-align: center;
    }
</style>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter2">
    sign Up
</button> -->

<!-- Modal for Sign Up -->
<!-- <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle2" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document" id="modal">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5 bg-primary text-light" id="part-1">
                        <h2>Sign Up</h2>
                        <p>Register yourself here & Join the NepZone family.</p>
                        <img src="image/Logo/science-fiction.png" alt="">
                    </div>
                    <div class="col-md-7 bg-light" id="part-2">

                        <form id="signUp-form" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" name="cust_name" id="cust_name" placeholder="Enter fullname">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="cust_email" id="cust_email" aria-describedby="emailHelp" placeholder="Enter Email">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="cust_mobile" id="cust_mobile" aria-describedby="emailHelp" placeholder="Enter Mobile no.">
                            </div>

                            <div class="form-group" style="margin: 30px 0px;">
                                <input type="password" class="form-control" name="cust_pass" id="cust_pass" placeholder=" Enter Password">
                            </div>

                            <button type="submit" name="SignUpBtn" onclick="addCust()" class="btn btn-danger text-light btn-lg btn-block">Sign Up</button>
                        </form>

                        <a href="login.php" class="btn btn-light text-primary btn-lg btn-block new">Already have account ? Plz Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Modal end -->
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle2" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document" id="modal">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5 bg-primary text-light" id="part-1">
                        <h2>Sign Up</h2>
                        <p>Register yourself here & Join the NepZone family.</p>
                        <img src="image/Logo/science-fiction.png" alt="">
                    </div>
                    <div class="col-md-7 bg-light" id="part-2">

                        <form class="text-align-left" id="stu-register" method="POST">

                            <div class="form-group">
                                <i class="fi-xnsuxl-user-solid"></i>
                                <label for="signUser">Username :</label> <span id="signUserMsg1"></span>
                                <input type="text" class="form-control" id="signUser" name="signUser" placeholder="Enter your User Name">
                            </div>

                            <div class="form-group">
                                <i class="fi-xwsuxl-envelope-solid"></i>
                                <label for="signEmail">Email address :</label> <span id="signUserMsg2"></span>
                                <input type="email" class="form-control" id="signEmail" name="signEmail" aria-describedby="emailHelp" placeholder="e.g. example@gmail.com">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>

                            <div class="form-group">
                                <i class="fi-xnsuxl-lock-solid"></i>
                                <label for="signPass">Password :</label> <span id="signUserMsg3"></span>
                                <input type="password" class="form-control" id="signPass" name="signPass" placeholder="Password">
                            </div>
                        </form>

                        <div class="modal-footer">
                            <span id="signupsuccess"></span>
                            <button type="button" class="btn btn-primary" onclick="signUp()" id="signup">Sign Upp</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
    Login
</button> -->

<!-- Modal for Login -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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

                        <form id="login-form" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Mobile no.">
                            </div>

                            <div class="form-group" style="margin: 30px 0px;">
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder=" Enter Password">
                                <a href="" class="btn btn-link forgot">Forgot ?</a>
                            </div>

                            <button type="submit" class="btn btn-danger text-light btn-lg btn-block">Login</button>
                        </form>

                        <a href="login.php" class="btn btn-light text-primary btn-lg btn-block new">New to NepZone ? Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->







<!-- login-page start -->

<div class="Lpage container">
    <div class="row page">

        <div class="col-md-6  vertical">
            <h5>Please Sign Up to get register & be a member of NepZone. &#128512;</h5>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter2">Sign Upp</button>


        </div>

        <div class="col-md-6 aside">
            <h5>Already have a account in NepZone ,then please Login here.</h5>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Log In</button>


        </div>
    </div>
</div>
<!-- login-page end -->



<?php
/* include('./partation-file/footer.php'); */
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
                    <h5> Design & Developed by : <strong style="color: #6f57f5; font-family: 'Reggae One', cursive;">RAjan SAh</strong> </h5>
                </div>
            </div>

        </div>
    </section>
    <!-- FOOTER Section Close -->
</footer>
<!-- footer section end -->

<!-- javascript -->
<!-- <script src="js/custom.js"></script> -->
<script src="js/backend.js"></script>

<!-- Owl Carousel Js file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

<!--  isotope plugin cdn  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>


<!-- JQuery -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

</body>

</html>
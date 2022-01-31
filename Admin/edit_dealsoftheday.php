<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NepZone|| Admin-Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="./vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="./css/sb-admin-2.min.css" rel="stylesheet">

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

    <style>
        /* plus button for adding new uswers bottom right */
        .box {
            font-size: 20px;
            position: fixed;
            bottom: 20px;
            right: 20px;
            margin-bottom: 40px;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">NepZone<sup>Admin</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Admin-Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Categories
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo1" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fi-snsuxl-percent-solid"></i>
                    <span>Offers</span>
                </a>
                <div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Today's Offers:</h6>
                        <a class="collapse-item" href="dealsoftheday.php">Deals of the day</a>
                        <a class="collapse-item" href="cards.html">Special Price</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fi-xnsuxl-dot-shops"></i>
                    <span>Footwear</span>
                </a>
                <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Today's Offers:</h6>
                        <a class="collapse-item" href="buttons.html">Men's Footwear</a>
                        <a class="collapse-item" href="cards.html">Women's Footwear</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo3" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fi-xnsuxl-tshirt-solid"></i>
                    <span>Fashion</span>
                </a>
                <div id="collapseTwo3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Today's Offers:</h6>
                        <a class="collapse-item" href="buttons.html">Men's Topwear</a>
                        <a class="collapse-item" href="cards.html">Women's Clothes</a>
                        <a class="collapse-item" href="cards.html">T-shirts</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo4" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fi-xnsuxl-smartphone-solid"></i>
                    <span>Electronics</span>
                </a>
                <div id="collapseTwo4" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Today's Offers:</h6>
                        <a class="collapse-item" href="buttons.html">Mobiles</a>
                        <a class="collapse-item" href="cards.html">Earphones & Headphones</a>
                        <a class="collapse-item" href="buttons.html">Laptops</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->


        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Deals of the Day</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Update Data in Deals of the day</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <?php
                                include '../database-connect.php';

                                //update
                                if (isset($_REQUEST['editdealBtn'])) {
                                    //checking for empty field
                                    if (($_REQUEST['id'] == "") || ($_REQUEST['deal_name'] == "") || ($_REQUEST['deal_brand'] == "") || ($_REQUEST['deal_selling_price'] == "") || ($_REQUEST['deal_market_price'] == "") || ($_REQUEST['deal_yousave_price'] == "") || ($_REQUEST['deal_discount'] == "") || ($_REQUEST['deal_rating'] == "") || ($_REQUEST['deal_review'] == "") || ($_REQUEST['deal_desc'] == "") || ($_REQUEST['deal_name'] == "")) {
                                        //msg display if required filed is empty
                                        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill all the fields</div>';
                                    } else {
                                        //assigning user values to variable
                                        $dealid = $_REQUEST['id'];
                                        $dealname = $_REQUEST['deal_name'];
                                        $dealbrand = $_REQUEST['deal_brand'];
                                        $dealsp = $_REQUEST['deal_selling_price'];
                                        $dealmp = $_REQUEST['deal_market_price'];
                                        $dealsavep = $_REQUEST['deal_yousave_price'];
                                        $dealdis = $_REQUEST['deal_discount'];
                                        $dealrat = $_REQUEST['deal_rating'];
                                        $dealrev = $_REQUEST['deal_review'];
                                        $dealdesc = $_REQUEST['deal_desc'];
                                        $dealimg = '../image/offer_deals/' . $_FILES['deal_image']['name'];

                                        $sql = "UPDATE offer_deals SET id = '$dealid', deal_name = '$dealname' , deal_brand = '$dealbrand' , deal_selling_price = '$dealsp' ,deal_market_price= '$dealmp' , deal_yousave_price = '$dealsavep' ,deal_discount = '$dealdis' ,deal_rating= '$dealrat' ,deal_review= '$dealrev' ,deal_desc= '$dealdesc'  , deal_image = '$dealimg' WHERE id = '$dealid' ";
                                        if ($conn->query($sql) == TRUE) {
                                            //below msg display on form submit success
                                            $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Update Successfully !</div>';
                                        } else {
                                            //below msg display on form submit failed
                                            $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to Update !</div>';
                                        }
                                    }
                                }

                                if (isset($_REQUEST['view'])) {
                                    $sql = "SELECT * FROM offer_deals WHERE id = {$_REQUEST['id']}";
                                    $result = $conn->query($sql);
                                    $row = $result->fetch_assoc();
                                }
                                ?>
                                <div class="col-sm6 mt-5 mx-3 jumbotron">

                                    <form action="" method="POST" enctype="multipart/form-data">

                                        <div class="form-group">
                                            <label for="id" class="font-weight-bold p-1">Deal ID</label>
                                            <input type="text" class="form-control" id="id" name="id" value="<?php if (isset($row['id'])) { echo $row['id'];}  ?>" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label for="deal_name" class="font-weight-bold p-1">Deal Name</label>
                                            <input type="text" class="form-control" id="deal_name" name="deal_name" value="<?php if (isset($row['deal_name'])) { echo $row['deal_name'];}  ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="deal_brand" class="font-weight-bold p-1">Deal Brand</label>
                                            <input type="text" class="form-control" id="deal_brand" name="deal_brand" row="2" value="<?php if (isset($row['deal_brand'])) { echo $row['deal_brand']; }  ?> " >
                                        </div>

                                        <div class="form-group">
                                            <label for="deal_selling_price" class="font-weight-bold p-1">Deal Selling Price <small>(in NRP.)</small> </label>
                                            <input type="text" class="form-control" id="deal_selling_price" name="deal_selling_price" row="2" value="<?php if (isset($row['deal_selling_price'])) { echo $row['deal_selling_price']; }  ?> ">
                                        </div>

                                        <div class="form-group">
                                            <label for="deal_market_price" class="font-weight-bold p-1">Deal Market Price <small>(in NRP.)</small> </label>
                                            <input type="text" class="form-control" id="deal_market_price" name="deal_market_price" row="2" value="<?php if (isset($row['deal_market_price'])) { echo $row['deal_market_price']; }  ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="deal_yousave_price" class="font-weight-bold p-1">Deal Saved Price <small>(in NRP.)</small> </label>
                                            <input type="text" class="form-control" id="deal_yousave_price" name="deal_yousave_price" row="2" value="<?php if (isset($row['deal_yousave_price'])) { echo $row['deal_yousave_price']; }  ?> ">
                                        </div>

                                        <div class="form-group">
                                            <label for="deal_discount" class="font-weight-bold p-1">Deal Discount <small>(in %)</small> </label>
                                            <input type="text" class="form-control" id="deal_discount" name="deal_discount" row="2" value="<?php if (isset($row['deal_discount'])) { echo $row['deal_discount']; }  ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="deal_rating" class="font-weight-bold p-1">Deal Rating <small>(out of 5 start)</small> </label>
                                            <input type="text" class="form-control" id="deal_rating" name="deal_rating" row="2" value="<?php if (isset($row['deal_rating'])) { echo $row['deal_rating']; }  ?>">"
                                        </div>

                                        <div class="form-group">
                                            <label for="deal_review" class="font-weight-bold p-1">Deal Review <small>(in numbers)</small> </label>
                                            <input type="text" class="form-control" id="deal_review" name="deal_review" row="2" value="<?php if (isset($row['deal_review'])) { echo $row['deal_review']; }  ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="deal_desc" class="font-weight-bold p-1">Deal Description <small>( about product in words)</small> </label>
                                            <textarea type="text" class="form-control" id="deal_desc" name="deal_desc" row="2"> <?php if (isset($row['deal_desc'])) { echo $row['deal_desc']; }  ?></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="deal_image" class="font-weight-bold p-1">Deal Image</label>
                                            <img src="<?php if (isset($row['deal_image'])) { echo $row['deal_image'];} ?>" alt="" height="300px" width="300px" class="img-thumbnail">
                                            <input type="file" class="form-control-file" id="deal_image" name="deal_image">
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-danger" id="editClgBtn" name="editdealBtn">Update</button>
                                            <a href="./dealsoftheday.php" class="btn btn-secondary">Close</a>
                                        </div>

                                        <?php if (isset($msg)) {
                                            echo $msg;
                                        }
                                        ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
            </div>
        </div>
        <!-- End of Content Wrapper -->
    </div>

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; NepZone 2021</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->
</body>
<!-- Bootstrap core JavaScript-->
<script src="./vendor/jquery/jquery.min.js"></script>
<script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="./vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="./js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="./vendor/datatables/jquery.dataTables.min.js"></script>
<script src="./vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="./js/demo/datatables-demo.js"></script>

</html>
<?php 
include("includes/db.php");
include("functions/function.php");

?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E- commerce Store</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>

<body>

    <!--Top Bar  Start -->
    <div id="top">

        <div class="container ">
            <div class="col-md-6 offer">
                <a href="" class=" btn btn-success btn-sm">
                    Welcome Guest
                </a>
                <a href="">Shopping Cart Total Price: INR 100, Total Item 2</a>

            </div><!-- col-md-6 offer End -->
            <div class="col-md-6 offer">

                <ul class="menu">

                    <li>
                        <a href="customer_registeration.php">Register</a>
                    </li>
                    <li>
                        <a href="customer/my_account.php">My Account</a>
                    </li>
                    <li>
                        <a href="cart.php">Goto Cart</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                </ul>
            </div>

        </div>
        <!-- Container End -->


    </div>
    <!-- Top Bar End -->

    <!-- *************************************************************888 -->

    <!-- Start Navbar -->

    <div class="navbar navbar-default " id="navbar">

        <div class="container">
            <!-- navbar Header -->
            <div class="navbar-header">
                <a class="navbar-brand home" href="index.php">

                    <img class="hidden-xs" src="images/free.png" alt="" height="50px">
                    <img class="visible-xs" src="images/fire-logo.png" alt="" height="50px">

                </a>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only"> Toggle Navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only"></span>
                    <i class="fas fa-search"></i>
                </button>
            </div>
            <!-- navbar Header End -->

            <!--Start Navbar Menu -->

            <div id="navigation" class="navbar-collapse collapse">
                <!-- Padding Nav -->
                <div class="padding-nav">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="active">
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="customer/my_account.php">My Account</a>
                        </li>
                        <li>
                            <a href="cart.php">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="about.php">About us</a>
                        </li>
                        <li>
                            <a href="services.php">Services</a>
                        </li>
                        <li>
                            <a href="contactus.php">Contact Us</a>
                        </li>

                    </ul>
                </div>
                <!-- Pading Nav -->
                <a class="btn btn-primary navbar-btn right" href="cart.php">
                    <i class="fa fa-shopping-cart"></i>
                    <span>4 items In Cart</span>

                </a>

                <div class="navbar-collapse collapse right">
                    <!--Start Navbar-collapse collapse-right -->
                    <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse"
                        data-target="#search">
                        <span class="sr-only">Toggle Search</span>
                        <i class="fas fa-search"></i>
                    </button>
                </div>
                <!--Start Navbar-collapse collapse-right -->
                <div class="collapse clearfix" id="search">

                    <form class="navbar-form" action="result.php" method="get">
                        <div class="input-group">
                            <input type="text" name="user_query" placeholder="Search" class="form-control" required>
                            <span class="input-group-btn">
                                <button type="submit" value="search" name="search" class="btn btn-primary">
                                    <i class="fas fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Navbar Menu -->


        </div>

    </div>
    <!-- End Navbar -->


    <div id="content">

        <div class="container">
            <!-- Container Start -->
            <div class="col-md-12">
                <!-- col-md-12 Start -->
                <ul class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li>
                        Shop
                    </li>
                </ul>
            </div><!-- col-md-12 End -->

            <div class="col-md-3">
                <?php include("includes/sidebar.php") ?>
            </div>

            <!-- Start Col-md-9 -->
            <div class="col-md-9">
                <?php if(!isset($_GET['p_cat'])){

                if(!isset($_GET['cat_id'])){
                    echo "<div class='box'><h1> Shop </h1> <p> If You want domain name and shared hosting plan in low price then please visit www.netrut.com </p></div>";
                }
            }
            
            ?>





                <div class="row">
                    <!-- Row Start -->
                    <div class="col-md-4 col-sm-6 center responsive">
                        <!-- Start col-md-4 col-sm-6 center responsive -->
                        <div class="product">
                            <a href="details.php">
                                <img src="admin_area/product_images/product.jpg" class="img-responsive" alt="">
                            </a>
                            <div class="text">
                                <h3>
                                    <a href="details.php">Mardaz Pack Of 5 - Multicolor Cotton V-Neck T-shirt For
                                        men</a>
                                </h3>
                                <p class="price">INR 200</p>
                                <p class="buttons">
                                    <a class="btn btn-default" href="details.php">View Details</a>

                                    <a class="btn btn-primary" href="details.php"><i class="fa fa-shopping-cart"></i>
                                        Add To Cart</a>
                                </p>
                            </div>
                        </div>

                    </div><!-- End col-md-4 col-sm-6 center responsive -->

                    <div class="col-md-4 col-sm-6 center responsive">
                        <!-- Start col-md-4 col-sm-6 center responsive -->
                        <div class="product">
                            <a href="details.php">
                                <img src="admin_area/product_images/product.jpg" class="img-responsive" alt="">
                            </a>
                            <div class="text">
                                <h3>
                                    <a href="details.php">Mardaz Pack Of 5 - Multicolor Cotton V-Neck T-shirt For
                                        men</a>
                                </h3>
                                <p class="price">INR 200</p>
                                <p class="buttons">
                                    <a class="btn btn-default" href="details.php">View Details</a>

                                    <a class="btn btn-primary" href="details.php"><i class="fa fa-shopping-cart"></i>
                                        Add To Cart</a>
                                </p>
                            </div>
                        </div>

                    </div><!-- End col-md-4 col-sm-6 center responsive -->
                    <div class="col-md-4 col-sm-6 center responsive">
                        <!-- Start col-md-4 col-sm-6 center responsive -->
                        <div class="product">
                            <a href="details.php">
                                <img src="admin_area/product_images/product.jpg" class="img-responsive" alt="">
                            </a>
                            <div class="text">
                                <h3>
                                    <a href="details.php">Mardaz Pack Of 5 - Multicolor Cotton V-Neck T-shirt For
                                        men</a>
                                </h3>
                                <p class="price">INR 200</p>
                                <p class="buttons">
                                    <a class="btn btn-default" href="details.php">View Details</a>

                                    <a class="btn btn-primary" href="details.php"><i class="fa fa-shopping-cart"></i>
                                        Add To Cart</a>
                                </p>
                            </div>
                        </div>

                    </div><!-- End col-md-4 col-sm-6 center responsive -->
                    <div class="col-md-4 col-sm-6 center responsive">
                        <!-- Start col-md-4 col-sm-6 center responsive -->
                        <div class="product">
                            <a href="details.php">
                                <img src="admin_area/product_images/product.jpg" class="img-responsive" alt="">
                            </a>
                            <div class="text">
                                <h3>
                                    <a href="details.php">Mardaz Pack Of 5 - Multicolor Cotton V-Neck T-shirt For
                                        men</a>
                                </h3>
                                <p class="price">INR 200</p>
                                <p class="buttons">
                                    <a class="btn btn-default" href="details.php">View Details</a>

                                    <a class="btn btn-primary" href="details.php"><i class="fa fa-shopping-cart"></i>
                                        Add To Cart</a>
                                </p>
                            </div>
                        </div>

                    </div><!-- End col-md-4 col-sm-6 center responsive -->
                    <div class="col-md-4 col-sm-6 center responsive">
                        <!-- Start col-md-4 col-sm-6 center responsive -->
                        <div class="product">
                            <a href="details.php">
                                <img src="admin_area/product_images/product.jpg" class="img-responsive" alt="">
                            </a>
                            <div class="text">
                                <h3>
                                    <a href="details.php">Mardaz Pack Of 5 - Multicolor Cotton V-Neck T-shirt For
                                        men</a>
                                </h3>
                                <p class="price">INR 200</p>
                                <p class="buttons">
                                    <a class="btn btn-default" href="details.php">View Details</a>

                                    <a class="btn btn-primary" href="details.php"><i class="fa fa-shopping-cart"></i>
                                        Add To Cart</a>
                                </p>
                            </div>
                        </div>

                    </div><!-- End col-md-4 col-sm-6 center responsive -->
                    <div class="col-md-4 col-sm-6 center responsive">
                        <!-- Start col-md-4 col-sm-6 center responsive -->
                        <div class="product">
                            <a href="details.php">
                                <img src="admin_area/product_images/product.jpg" class="img-responsive" alt="">
                            </a>

                            <div class="text">
                                <!-- Start text -->
                                <h3>
                                    <a href="details.php">Mardaz Pack Of 5 - Multicolor Cotton V-Neck T-shirt For
                                        men</a>
                                </h3>
                                <p class="price">INR 200</p>
                                <p class="buttons">
                                    <a class="btn btn-default" href="details.php">View Details</a>

                                    <a class="btn btn-primary" href="details.php"><i class="fa fa-shopping-cart"></i>
                                        Add To Cart</a>
                                </p>
                            </div><!-- Start text -->
                        </div>

                    </div><!-- End col-md-4 col-sm-6 center responsive -->
                </div><!-- Row Start -->
                <center>
                    <ul class="pagination">
                        <li><a href="shop.php">First Page</a></li>
                        <li><a href="shop.php">2</a></li>
                        <li><a href="shop.php">3</a></li>
                        <li><a href="shop.php">4</a></li>
                        <li><a href="shop.php">5</a></li>
                        <li><a href="shop.php">Last Page</a></li>


                    </ul>
                </center>
            </div><!-- End Col-md-9 -->
        </div> <!-- Container End -->
    </div>














    <!-- Footer Start -->
    <?php
    include("includes/footer.php")
    ?>

    <!-- Footer End -->


</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</html>
<?php 
session_start();
include("includes/db.php");
include("functions/function.php");

?>

<?php
if(isset($_GET['pro_id'])){
    $pro_id=$_GET['pro_id'];
    $get_product="select * from products where product_id='$pro_id'";
    $run_product=mysqli_query($con,$get_product);
    $row_product=mysqli_fetch_array($run_product); 
    $p_cat_id=$row_product['p_cat_id'];
    $p_title=$row_product['product_title'];
    $p_price=$row_product['product_price'];
    $p_desc=$row_product['product_desc'];
    $p_img1=$row_product['product_img1'];
    $p_img2=$row_product['product_img2'];
    $p_img3=$row_product['product_img3'];

    $get_p_cat="select * from product_categories where p_cat_id='$p_cat_id'";
    $run_p_cat=mysqli_query($con,$get_p_cat);
    $row_p_cat=mysqli_fetch_array($run_p_cat);
    $p_cat_id=$row_p_cat['p_cat_id'];
    $p_cat_title=$row_p_cat['p_cat_title'];


}

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
                    <?php
                    if(!isset($_SESSION['customer_email'])){
                        echo "Welcome Guest";
                    }else{
                        echo "Welcome: ". $_SESSION['customer_email']."";
                    }
                    ?>

                </a>
                <a href="">Shopping Cart Total Price: INR <?php totalPrice();    ?>, Total Item <?php item(); ?></a>

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
                        <?php if(!isset($_SESSION['customer_
                        email'])){
                            echo "<a href='checkout.php'>Login</a>";

                        }else{
                            echo "<a href='logout.php'>logouts</a>";
                        } ?>
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
                            <?php
                        if(!isset($_SESSION['customer_email'])){
                            echo "<a href='checkout.php'>My Account</a>";
                        }else{
                            echo "<a href='customer/my_account.php?my_order'>My Account</a>";
                        }
                        ?>
                        </li>
                        <li>
                            <a href="cart.php">Shopping Cart</a>
                        </li>

                        <li>
                            <a href="contactus.php">Contact Us</a>
                        </li>

                    </ul>
                </div>
                <!-- Pading Nav -->
                <a class="btn btn-primary navbar-btn right" href="cart.php">
                    <i class="fa fa-shopping-cart"></i>
                    <span><?php item(); ?> items In Cart</span>

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
                    <li><a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php  echo $p_cat_title ?></a>
                    </li>
                    <li><?php echo $p_title ?></li>
                </ul>
            </div><!-- col-md-12 End -->

            <div class="col-md-3">
                <?php include("includes/sidebar.php") ?>
            </div>

            <div class="col-md-9">
                <div id="productmain" class="row">
                    <!-- Start Col sm 6 -->
                    <div class="col-sm-6">
                        <div id="mainimage">
                            <div class="carousel slide" data-ride="carousel" id="mycarousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#mycarousel" data-slide-to="1"></li>
                                    <li data-target="#mycarousel" data-slide-to="2"></li>

                                </ol>
                                <!-- Start carousel-inner -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <center>
                                            <img class="img-responsive"
                                                src="admin_area/product_images/<?php  echo $p_img1 ?>" alt="">
                                        </center>
                                    </div>

                                    <div class="item">
                                        <center>
                                            <img class="img-responsive"
                                                src="admin_area/product_images/<?php  echo $p_img2 ?>" alt="">
                                        </center>
                                    </div>

                                    <div class="item">
                                        <center>
                                            <img class="img-responsive"
                                                src="admin_area/product_images/<?php  echo $p_img3 ?>" alt="">
                                        </center>
                                    </div>




                                </div>
                                <!-- End carousel-inner -->
                                <a href="#mycrousel" class="left carousel-control" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>

                                <a href="#mycrousel" class="right carousel-control" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>

                            </div>
                        </div>
                    </div> <!-- End Col sm 6 -->


                    <!-- Start Col sm 6 -->
                    <div class="col-sm-6">

                        <div class="box">
                            <!-- Start box-->
                            <h1 class="text-center"><?php  echo $p_title ?></h1>
                            <?php  
                            

                            addCart();
                            
                            ?>

                            <form class="form-horizontal" method="POST"
                                action="details.php?add_cart=<?php echo $pro_id  ?>">
                                <!-- form Start-->



                                <!-- Form Group Start -->
                                <div class="form-group">
                                    <label class="col-md-5 control-label" for="">Product Quantity</label>

                                    <div class="col-md-7">
                                        <!-- col-md-7 Start -->
                                        <select name="product_qty" class="form-control" id="">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div><!-- col-md-7 End -->
                                </div><!-- Form Group end -->

                                <div class="form-group">
                                    <label class="col-md-5 control-label" for="">Product Size</label>
                                    <div class="col-md-7">
                                        <select name="product_size" class="form-control" id="">
                                            <option>Select a Size</option>
                                            <option>Small</option>
                                            <option>Medium</option>
                                            <option>Large</option>
                                            <option>Extra Large</option>


                                        </select>
                                    </div>
                                </div>
                                <p class="price"> INR <?php  echo $p_price ?></p>
                                <p class="text-center buttons">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-shopping-cart"></i>
                                        Add to cart
                                    </button>
                                </p>

                            </form><!-- form Start-->
                        </div><!-- End box-->
                        <div class="col-xs-4">
                            <a class="thumb" href="#">
                                <img src="admin_area/product_images/<?php  echo $p_img1 ?>" class="img-responsive"
                                    alt="">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a class="thumb" href="#">
                                <img src="admin_area/product_images/<?php  echo $p_img2 ?>" class="img-responsive"
                                    alt="">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a class="thumb" href="#">
                                <img src="admin_area/product_images/<?php  echo $p_img3 ?>" class="img-responsive"
                                    alt="">
                            </a>
                        </div>

                    </div>
                    <!-- End Col sm 6 -->
                </div>
                <!-- End ROW -->
                <div class="box" id="details">
                    <h4>
                        Products Details
                    </h4>
                    <p><?php  echo $p_desc ?></p>
                    <h4>Size</h4>
                    <ul>
                        <li>Small</li>
                        <li>Medium</li>
                        <li>Large</li>
                        <li>Extra Large</li>
                    </ul>
                </div>

                <!-- Star Related Items -->
                <div id="row same-height-row">
                    <!-- Start row same-height-row  -->
                    <!-- Start col-md-3 col-sm-6  -->
                    <div class="col-md-3 col-sm-6">

                        <!-- Start box same-height-row headline -->
                        <div class="box same-height-row headline">
                            <h3 class="text-center">You Also Like These Products</h3>


                        </div><!-- End box same-height-row headline -->

                    </div>
                    <!-- End col-md-3 col-sm-6  -->

                    <?php
                    $get_product="select * from products order by 1 LIMIT 0,3";
                    $run_product=mysqli_query($con,$get_product);
                    while($row=mysqli_fetch_array($run_product)){
                        $pro_id=$row['product_id'];
                        $product_title=$row['product_title'];
                        $product_price=$row['product_price'];
                        $product_img1=$row['product_img1'];
                       echo " <div class='center-respinsive col-md-3 col-sm-6'>
                       <div class='product same-height'>
                       <a href='details.php?pro_id=$pro_id'>
                       <img class='img-responsive' src='admin_area/product_images/$product_img1'>

                       </a>
                       <div class='text'><h3><a href='details.php?pro_id=$pro_id'>$product_title</a></h3>
                       <p class='price'>$product_price</p>
                       </div>
                       
                       </div>
                       </div>";

                    }

                    ?>

                </div>
                <!-- End row same-height-row  -->
            </div>



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
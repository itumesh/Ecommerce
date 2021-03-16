<?php 
session_start();
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
                        <a href="customer_registration.php">Register</a>
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
                        <a href="cart.php">Goto Cart</a>
                    </li>
                    <li>
                        <?php 
                        if(!isset($_SESSION['customer_email'])){
                            echo "<a href='checkout.php'>Login</a>";
                        }else{
                            echo "<a href='logout.php'>logout</a>";
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
                        <li class="active">
                            <a href="index.php">Home</a>
                        </li>
                        <li>
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

    <div class="container" id="slider">

        <div class="col-md-12">
            <!-- Carousel slide start -->
            <div class="carousel slide" id="myCarousel" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="myCarousel" data-slide-to="0" class="action"></li>
                    <li data-target="myCarousel" data-slide-to="1"></li>
                    <li data-target="myCarousel" data-slide-to="2"></li>
                    <li data-target="myCarousel" data-slide-to="3"></li>

                </ol>
                <!-- Carousel Inner Jooi -->
                <div class="carousel-inner">
                    <?php 
                    $get_slider = "select * from slider LIMIT 0,1";
                    $run_slider = mysqli_query($con,$get_slider);
                    while($row=mysqli_fetch_array($run_slider)){
                        $slider_name=$row['slider_name'];
                        $sider_image=$row['slider_image'];
                        $slider_url=$row['slider_url'];


                        echo "<div class='item active'>
                        <a href='$slider_url'><img src='admin_area/slider_images/$sider_image'> </a>
                        </div>
                        
                        ";

                    }
                    
                    ?>

                    <?php
                    
                    $get_slider = "select * from slider LIMIT 1,3"; 
                    $run_slider = mysqli_query($con,$get_slider);

                     while($row=mysqli_fetch_array($run_slider)){
                        $slider_name=$row['slider_name'];
                        $sider_image=$row['slider_image'];
                        $slider_url=$row['slider_url'];
                        echo "<div class='item'>
                        <a href='$slider_url'><img src='admin_area/slider_images/$sider_image'>     </a>            
                          </div>
                        
                        ";

                    }

                    ?>
                </div>
                <!-- Carousel iner End -->

                <a href="#myCarousel" class="left carousel-control " data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a href="#myCarousel" class="right carousel-control " data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Previous</span>
                </a>
            </div>
            <!-- carousel slide end -->


        </div>

    </div>
    <!-- Container End -->

    <div id="advantage">
        <!-- Advantage start -->
        <div class="container">
            <!-- container start -->
            <div class="same-height-row">
                <!-- same-height-row start -->

                <?php  
$get_boxes="select * from boxes_section";
$run_box=mysqli_query($con,$get_boxes);
while($row=mysqli_fetch_array($run_box)){

    $box_id=$row['box_id'];
    $box_title=$row['box_title'];
    $box_desc=$row['box_desc'];




?>

                <div class="col-sm-4">
                    <!-- col-sm-4 start -->
                    <div class="box same-height">
                        <!-- box same-height start -->
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3><a href=""><?php  echo $box_title; ?></a></h3>
                        <P><?php echo $box_desc; ?></P>
                    </div><!-- box same-height End -->
                </div><!-- col-sm-4 End -->

                <?php } ?>








            </div><!-- same-height-row End -->
        </div><!-- container End -->

    </div><!-- Advantage End -->


    <!-- Hot BOx Start -->
    <div id="hotbox">
        <div class="box1">
            <div class="container">
                <div class="col-md-12">
                    <h2>Latest this week</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Hot BOx End -->

    <div id="content" class="container">
        <div class="row">
            <?php
getPro();
?>

        </div>
    </div>


    <!-- Footer Start -->
    <?php
    include("includes/footer.php")
    ?>

    <!-- Footer End -->


</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</html>
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
                <a href="">Shopping Cart Total Price: INR 100, Total Item 2</a>

            </div><!-- col-md-6 offer End -->
            <div class="col-md-6 offer">

                <ul class="menu">

                    <li>
                        <a href="customer_registeration.php">Register</a>
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
                        Registration
                    </li>
                </ul>
            </div><!-- col-md-12 End -->

            <div class="col-md-3">
                <?php include("includes/sidebar.php") ?>
            </div>

            <div class="col-md-9">
                <!-- col-md-9 Start -->
                <div class="box">
                    <!-- box Start -->
                    <div class="box-header">
                        <!-- box-header Start -->
                        <center>

                            <h2>

                                Cutomer Registration

                            </h2>
                            <p class="text-muted">If You Have any questions, please fill free to contact us, ouur
                                customer service center is working for you 24/7.</p>
                        </center>
                    </div><!-- box-header End -->
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">
                                Cutomer Name
                            </label>
                            <input class="form-control" type="text" name="c_name" required>

                        </div>
                        <div class="form-group">
                            <label for="">Customer Email</label>
                            <input type="email" class="form-control" name="c_email" required>
                        </div>
                        <div class="form-group">
                            <label for="">Customer Password</label>
                            <input type="password" class="form-control" name="c_password" required>
                        </div>

                        <div class="form-group">
                            <label for="">Country</label>
                            <input type="text" class="form-control" name="c_country" required>
                        </div>

                        <div class="form-group">
                            <label for="">City</label>
                            <input type="text" class="form-control" name="c_city" required>
                        </div>
                        <div class="form-group">
                            <label for="">Contact Number</label>
                            <input type="text" class="form-control" name="c_contact" required>
                        </div>
                        <div class="form-group">
                            <label for="">Address</label>
                            <input type="text" class="form-control" name="c_address" required>
                        </div>
                        <div class="form-group">
                            <label for="">image</label>
                            <input type="file" class="form-control" name="c_image" required>

                        </div>



                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-primary">
                                <i class="fa fa-user-md"></i>Register
                            </button>
                        </div>
                    </form>
                </div><!-- box End -->
            </div><!-- col-md-9 End -->






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

<?php
if(isset($_POST['submit'])){
    $c_name=$_POST['c_name'];
    $c_email=$_POST['c_email'];
    $c_password=$_POST['c_password'];
    $c_country=$_POST['c_country'];
    $c_city=$_POST['c_city'];
    $c_contact=$_POST['c_contact'];
    $c_address=$_POST['c_address'];
    $c_image=$_FILES['c_image']['name'];
    $c_tmp_image=$_FILES['c_image']['tmp_name'];
    $c_ip=getUserIp();

    move_uploaded_file($c_tmp_image,"customer/customer_images/$c_image");
    $insert_customer="insert into customers (customer_name,customer_email,customer_password,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_ip	) values('$c_name','$c_email','$c_password','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip')";
    $run_customer=mysqli_query($con, $insert_customer);
    $sel_cart="select * from cart where ip_add='$c_ip'";
    $run_cart=mysqli_query($con,$sel_cart);
    $check_cart=mysqli_num_rows($run_cart);
    if($check_cart>0){
        $_SESSION['customer_email']=$c_email;
        echo "<script>alert('You Have been  registered successfully')</script>";
        echo "<script>window.open('checkout.php','_self')</script>";
    }else{
        $_SESSION['customer_email']=$c_email;
        echo "<script>alert('You Have been  registered successfully')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }











}
?>
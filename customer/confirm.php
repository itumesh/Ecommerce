<?php 

session_start();
if(!isset($_SESSION['customer_email'])){
    echo" <script>window.open('../checkout.php')</script>";

}else{
include("includes/db.php");
include("functions/function.php");
if(isset($_GET['order_id'])){
    $order_id=$_GET['order_id'];
    
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
                <a href="">Shopping Cart Total Price: INR 100, Total Item 2</a>

            </div><!-- col-md-6 offer End -->
            <div class="col-md-6 offer">

                <ul class="menu">

                    <li>
                        <a href="../customer_registeration.php">Register</a>
                    </li>
                    <li>
                        <a href="../checkout.php">My Account</a>
                    </li>
                    <li>
                        <a href="../cart.php">Goto Cart</a>
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
                            <a href="../index.php">Home</a>
                        </li>
                        <li>
                            <a href="../shop.php">Shop</a>
                        </li>
                        <li class="active">
                            <a href="../my_account.php">My Account</a>
                        </li>
                        <li>
                            <a href="../cart.php">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="../about.php">About us</a>
                        </li>
                        <li>
                            <a href="../services.php">Services</a>
                        </li>
                        <li>
                            <a href="../contactus.php">Contact Us</a>
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
                <!-- col-md-3 Start -->
                <?php include("includes/sidebar.php") ?>
            </div><!-- col-md-3 End -->

            <div class="col-md-9">
                <div class="box">
                    <h1 align="center">Please Confirm Your Payment</h1>
                    <form action="confirm.php?update_id=<?php echo $order_id  ?>" method="post"
                        enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Invoice Number</label>
                            <input type="text" name="invoice_number" class="form-control" required>

                        </div>
                        <div class="form-group">
                            <label for="">Amount</label>
                            <input type="text" name="amount" class="form-control" required>

                        </div>
                        <div class="form-group">
                            <label for="">Select Payment Mode</label>
                            <select class="form-control" name="payment_mode" id="">
                                <option>
                                    Bank Transfer
                                </option>
                                <option>Paypal</option>
                                <option>PayuMoney</option>
                                <option>Paytm</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Transaction Number</label>
                            <input type="text" name="trfr_number" class="form-control" required>

                        </div>
                        <div class="form-group">
                            <label for="">Payment Date</label>
                            <input type="date" name="date" class="form-control" required>

                        </div>
                        <div class="text-center"><button type="submit" name="confirm_payment"
                                class="btn btn-primary btn-lg">Confirm Payment</button></div>
                    </form>

                    <?php

                        if(isset($_POST['confirm_payment'])){
                            $update_id=$_GET['update_id'];
                            $invoice_no=$_POST['invoice_number'];
                            $amount=$_POST['amount'];
                            $payment_mode=$_POST['payment_mode'];
                            $trfr_number=$_POST['trfr_number'];
                            $date=$_POST['date'];
                            $complete="complete";
                            $insert="INSERT into payments(invoice_id, amount, payment_mode, ref_no, payment_date) Values('$invoice_no', '$amount', '$payment_mode', '$trfr_number', '$date')";
                            //  print_r($insert);
                            //  die;
                            $run_insert=mysqli_query($con,$insert);

                           

                            $update_q="update customer_order set order_status ='$complete' where order_id='$update_id'";
                            $run_insert=mysqli_query($con,$update_q);

                            //  $update_p="update pending_order set order_status ='$complete' where order_id='$update_id'";
                            // $run_insert=mysqli_query($con,$update_p);

                            echo "<script>alert('Your Order has been recevied ')</script>";
                            echo "<script>window.open('my_account.php?order','_self')</script>";




                        }
                    ?>
                </div>
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

<?php  } ?>
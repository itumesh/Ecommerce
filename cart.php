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
                        <a href="customer_registeration.php">Register</a>
                    </li>
                    <li>
                        <a href="customer/my_account.php">My Account</a>
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
                        <li>
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
                        <li class="active">
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
                        Cart
                    </li>
                </ul>
            </div><!-- col-md-12 End -->

            <div id="cart" class="col-md-9">
                <!-- col-md-9 Start -->
                <div class="box">
                    <form action="cart.php" method="post" enctype="multipart-form-data">
                        <h1>Shopping Cart</h1>
                        <?php $ip_add= getUserIp(); 
                        $select_cart="select * from cart where  ip_add='$ip_add'";
                        $run_cart=mysqli_query($con,$select_cart);
                        $count=mysqli_num_rows($run_cart);


                        ?>
                        <p class="text-muted"> Currently You Have <?php echo $count;  ?> item(s) in your cart </p>
                        <!-- Start Table Responsive -->
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="2">
                                            Product
                                        </th>
                                        <th>Quantity</th>
                                        <th>Unit Price</th>
                                        <th>Size</th>
                                        <th colspan="1">Delete</th>
                                        <th colspan="1">Sub Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    while ($row=mysqli_fetch_array($run_cart)) {

                                        $pro_id=$row['p_id'];
                                        $pro_size=$row['size'];
                                        $pro_qty=$row['qty'];
                                        $total=0;
                                        $get_product="select * from products where product_id='$pro_id'";
                                        $run_pro=mysqli_query($con,$get_product);
                                        while ($row=mysqli_fetch_array($run_pro)) {
                                            
                                            $p_title=$row['product_title'];
                                            $p_img=$row['product_img1'];
                                            $p_price=$row['product_price'];
                                            $sub_total=$row['product_price']*$pro_qty   ;
                                            $total += $sub_total;

                                        


                                        
                                    
                                    
                                    ?>


                                    <tr>
                                        <td><img src="admin_area/product_images/<?php echo $p_img; ?>"
                                                class="img-responsive" alt=""></td>
                                        <td><?php echo $p_title; ?></td>
                                        <td><?php echo $pro_qty; ?></td>
                                        <td><?php echo $p_price; ?></td>
                                        <td><?php echo $pro_size; ?></td>
                                        <td><input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>"></td>
                                        <td><?php echo $sub_total; ?></td>
                                    </tr>
                                    <?php }  }?>


                                </tbody>
                                <!-- <tfoot>
                                    <tr>
                                        <th colspan="5">Total</th>
                                        <th colspan="2">INR 398</th>
                                    </tr>
                                </tfoot> -->

                            </table>

                        </div><!-- End Table Responsive -->
                        <div class="box-footer">
                            <div class="pull-left">
                                <h4>Total Price</h4>
                            </div>
                            <div class="pull-right">
                                <h4 class="float-right"> INR <?php  totalPrice(); ?> </h4>
                            </div>
                        </div>

                        <div class="box-footer">

                            <div class="pull-left">

                                <!-- Start pull-left -->
                                <a href="index.php" class="btn btn-default">
                                    <i class="fa fa-chevron-left"></i>Coninue Shopping
                                </a>
                            </div><!-- End pull-left -->
                            <div class="pull-right">



                                <button class="btn btn-default" type="submit" name="update" value="Update Cart">
                                    <i class="fa fa-refresh">Update Cart</i>
                                </button>

                                <a href="checkout.php" class="btn btn-primary">
                                    Proceed to checkout <i class="fa fa-chevron-right"></i>

                                </a>


                            </div>
                        </div>
                    </form>
                </div>
                <?php
                function update_cart(){
                    global  $con;
                    if(isset($_POST['update'])){
                        foreach ($_POST['remove'] as $remove_id) {

                            $delete_product="delete from cart  where p_id='$remove_id'";
                            $run_del=mysqli_query($con,$delete_product);
                            if($run_del){
                                echo "<script> window.open('cart.php','_self')</script>";

                            }
                        }
                    }
                }
                echo @$up_cart=update_cart();
                ?>

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
                    <div class="center-responsive col-md-3">
                        <!--Center Responsive col-md-3 Start  -->

                        <div class="product same-height">
                            <a href="">
                                <img class="img-responsive" src="admin_area/product_images/product.jpg" alt="">
                            </a>
                            <div class="text">
                                <h3><a href="details.php">BENETTON With Polo Shirt</a></h3>
                                <p class="price">INR 199</p>
                            </div>
                        </div>

                    </div>
                    <!--Center Responsive col-md-3 End  -->

                    <div class="center-responsive col-md-3">
                        <!--Center Responsive col-md-3 Start  -->

                        <div class="product same-height">
                            <a href="">
                                <img class="img-responsive" src="admin_area/product_images/product.jpg" alt="">
                            </a>
                            <div class="text">
                                <h3><a href="details.php">BENETTON With Polo Shirt</a></h3>
                                <p class="price">INR 199</p>
                            </div>
                        </div>

                    </div>
                    <!--Center Responsive col-md-3 End  -->


                    <div class="center-responsive col-md-3">
                        <!--Center Responsive col-md-3 Start  -->

                        <div class="product same-height">
                            <a href="">
                                <img class="img-responsive" src="admin_area/product_images/product.jpg" alt="">
                            </a>
                            <div class="text">
                                <h3><a href="details.php">BENETTON With Polo Shirt</a></h3>
                                <p class="price">INR 199</p>
                            </div>
                        </div>

                    </div>
                    <!--Center Responsive col-md-3 End  -->


                </div>
                <!-- End row same-height-row  -->
            </div><!-- col-md-9 End -->

            <div class="col-md-3">
                <!-- col-md-3 Start -->
                <div class="box" id="order-summary">
                    <div class="box-header">
                        <h3>
                            Order Summary
                        </h3>
                    </div>
                    <p class="text-muted">
                        Shipping and additional costs are calculated based on the value you have entered
                    </p>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Order Subtotal</td>
                                    <th><?php  totalPrice(); ?></th>


                                </tr>
                                <tr>
                                    <td>
                                        Shipping and handling charge
                                    </td>
                                    <td>
                                        INR 0
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tax</td>
                                    <td>INR 0</td>
                                </tr>
                                <tr class="total">
                                    <td>
                                        Total
                                    </td>
                                    <th>
                                        INR <?php  totalPrice(); ?>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- col-md-3 End -->



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
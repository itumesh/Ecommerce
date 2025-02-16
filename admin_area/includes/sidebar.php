<?php
include ("includes/db.php");
if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";

}else{


?>

<nav class="navbar navbar-inverse navbar-fixed-top" style="background: black">

    <div class="navabr-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">

            <span class="sr-only">
                Toggle Navigation
            </span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="index.php?dashboard" class="navbar-brand"> Admin Panel</a>
    </div>
    <!-- nav navbar-right top-nav Start -->
    <ul class="nav navbar-right top-nav">

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-user"></i> <?php echo $admin_name; ?>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="index.php?user_profile?id=<?php echo $admin_id; ?>">
                        <i class="fa fa-fw-user"></i> Profile
                    </a>
                </li>
                <li>
                    <a href="index.php?view_products">
                        <i class="fa fa-fw-envelope"></i> Products
                        <span class="badge"><?php echo $count_pro; ?></span>
                    </a>
                </li>
                <li>
                    <a href="index.php?view_customers">
                        <i class="fa fa-fw-users"></i> Customers
                        <span class="badge"><?php echo $count_cust; ?></span>
                    </a>
                </li>
                <li>
                    <a href="index.php?pro_cat">
                        <i class="fa fa-fw-gear"></i> Product Categories
                        <span class="badge"><?php echo $count_p_cat; ?></span>
                    </a>
                </li>
                <li class="divider">

                </li>
                <li><a href="logout.php">Logout
                        <i class="fa fa-fw fa-power-off"></i>
                    </a></li>
            </ul>
        </li>



    </ul>
    <!-- nav navbar-right top-nav End -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="index.php?dashboard"> <i class="fa fa-fw fa-home"></i> Dashboard</a>
            </li>
            <!-- Start  Here -->

            <li>
                <a href="#" data-toggle="collapse" data-target="#products"> <i class="fa fa-fw fa-table"></i>
                    Product</a>
                <i class="fa fa-fw fa-caret"></i>

                <ul class="collapse" id="products">

                    <li>

                        <a href="index.php?insert_product">Insert Product</a>
                    </li>
                    <li>

                        <a href="index.php?view_product">View Product</a>
                    </li>
                </ul>
            </li>
            <!-- End Here  Here -->


            <li>
                <a href="#" data-toggle="collapse" data-target="#products_cat"> <i class="fa fa-fw fa-table"></i>
                    Product Categories</a>
                <i class="fa fa-fw fa-caret"></i>

                <ul class="collapse" id="products_cat">

                    <li>

                        <a href="index.php?insert_product_cat">Insert Product Categories</a>
                    </li>
                    <li>

                        <a href="index.php?view_product_cat">View Product Categories</a>
                    </li>
                </ul>
            </li>
            <!-- End Here  Here -->

            <li>
                <a href="#" data-toggle="collapse" data-target="#category"> <i class="fa fa-fw fa-table"></i>
                    Categories</a>
                <i class="fa fa-fw fa-caret"></i>

                <ul class="collapse" id="category">

                    <li>

                        <a href="index.php?insert_categories">Insert Category</a>
                    </li>
                    <li>

                        <a href="index.php?view_categories">View Category</a>
                    </li>
                </ul>
            </li>
            <!-- End Here  Here -->
            <li>
                <a href="#" data-toggle="collapse" data-target="#boxes"> <i class="fa fa-fw fa-arrows"></i>
                    Boxes Section</a>
                <i class="fa fa-fw fa-caret-down"></i>

                <ul class="collapse" id="boxes">

                    <li>

                        <a href="index.php?insert_box">Insert Box</a>
                    </li>
                    <li>

                        <a href="index.php?view_box">View Box</a>
                    </li>
                </ul>
            </li>
            <!-- End Here  Here -->






            <li>
                <a href="#" data-toggle="collapse" data-target="#slider"> <i class="fa fa-fw fa-table"></i>
                    Slider</a>
                <i class="fa fa-fw fa-caret"></i>

                <ul class="collapse" id="slider">

                    <li>

                        <a href="index.php?insert_slider">Insert Slider</a>
                    </li>
                    <li>

                        <a href="index.php?view_slider">View Slider</a>
                    </li>
                </ul>
            </li>
            <!-- End Here  Here -->
            <li>
                <a href="index.php?view_customer">

                    <i class="fa fa-fw fa-edit"></i> View Customer
                </a>
            </li>
            <li>
                <a href="index.php?view_order">

                    <i class="fa fa-fw fa-list"></i> View Order
                </a>
            </li>
            <li>
                <a href="index.php?view_payments">

                    <i class="fa fa-fw fa-pencil"></i> View Payments
                </a>
            </li>
            <!-- Start Here -->

            <li>
                <a href="#" data-toggle="collapse" data-target="#users"> <i class="fa fa-fw fa-table"></i>
                    Users</a>
                <i class="fa fa-fw fa-caret"></i>

                <ul class="collapse" id="users">

                    <li>

                        <a href="index.php?insert_users">Insert User</a>
                    </li>
                    <li>

                        <a href="index.php?view_users">View Users</a>
                    </li>
                    <li>

                        <a href="index.php?user_profile=<?php echo $admin_id; ?>">Edit Profile</a>
                    </li>
                </ul>
            </li>
            <!-- End Here  Here -->
        </ul>
    </div>
</nav>

<?php
}
?>
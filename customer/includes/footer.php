<div id="footer">
    <div class="container">
        <div class="row">

            <div class="col-md-3 col-sm-6">
                <!-- Col-md-3 col-sm-6 start -->
                <h4>
                    Pages
                </h4>
                <ul>
                    <li>
                        <a href="../cart.php">Shopping Cart</a>
                    </li>
                    <li>
                        <a href="../contact.php">Contact Us</a>
                    </li>
                    <li>
                        <a href="../shop.php">Shop</a>
                    </li>
                    <li>
                        <a href="checkout.php">My Account</a>
                    </li>

                </ul>
                <hr>
                <h4>
                    User Sectin
                </h4>
                <ul>
                    <li>
                        <a href="checkout.php">Login</a>
                    </li>
                    <li>
                        <a href="../customer_registration.php">Regisgration</a>
                    </li>

                </ul>
                <hr class="hidden-md hidde-lg hidden-sm">

            </div><!-- Col-md-3 col-sm-6 End -->

            <div class="col-md-3 col-sm-6">
                <!-- Col-md-3 col-sm-6 Start -->
                <h4>Top Product Categories</h4>
                <ul>
                    <?php

$get_p_cats = "select * from product_categories";
$run_p_cats = mysqli_query($con, $get_p_cats);
while($row_p_cats = mysqli_fetch_array($run_p_cats)){
    $p_cat_id=$row_p_cats['p_cat_id'];
    $p_cat_title = $row_p_cats['p_cat_title'];
    echo "<li><a href='shop.php?p_cat=$p_cat_id'> $p_cat_title</a> </li>";
}
?>
                </ul>
                <hr class="hidden-md hiddden-sm">

            </div><!-- Col-md-3 col-sm-6 End -->

            <div class="col-md-3 col-sm-6">
                <!-- Col-md-3 col-sm-6 start -->
                <h4>Where To Find Us</h4>
                <p><Strong>Umeshkumar.com</Strong>
                    <br>Sohawal
                    <br>Ayodhya
                    <br>Uttar Pardeshh
                    <br>umeshworkonly@gmail.com
                    <br>+91 98280873748

                </p>
                <a href="../contact.php">Go To Contact Us Page</a>
                <hr class="hidden-md hidden-lg">

            </div><!-- Col-md-3 col-sm-6 End -->
            <div class="col-md-3 col-md-6">
                <!-- Col-md-3 col-sm-6 Start -->
                <h4>Get The News</h4>
                <p class="text-muted">

                    Subscribe here for getting news of ayodhya
                </p>
                <form action="" method="post">
                    <div class="input-group">
                        <input type="text" name="email" class="form-control">
                        <span class="input-group-btn">
                            <input type="Submit" class="btn btn-default" value="subscribe">
                        </span>

                    </div>
                </form>
                <hr>
                <h4>Stay In Touch</h4>
                <p class="social">
                    <a href=""><i class="fab fa-facebook"></i></a>
                    <a href=""><i class="fab fa-twitter-square"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-google-plus-square"></i></a>
                    <a href=""><i class="fa fa-envelope"></i></a>
                </p>
            </div><!-- Col-md-3 col-sm-6 End -->
        </div>
    </div>
</div>
<!-- Footer Section End -->
<div id="copyright">
    <!--Copyright section Start-->
    <div class="container">
        <div class="col-md-6">
            <p class="pull-left">
                &copy; 2020 Er.Umesh Kumar
            </p>
        </div>
        <div class="col-md-6">
            <p class="pull-right">
                Tamplate By: <a href="www.Teehosting.com">umesh.com</a>
            </p>
        </div>
    </div>

</div>
<!--Copyright section End-->
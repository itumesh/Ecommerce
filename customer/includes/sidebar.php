<div class="panel panel-default sidebar-menu">
    <!-- Panel Heading Start -->
    <div class="panel-heading">
        <?php
    $session_customer=$_SESSION['customer_email'];
    $get_cust="select * from customers where customer_email='$session_customer'";
    $run_cust=mysqli_query($con,$get_cust);
    $row_customer=mysqli_fetch_array($run_cust);
    $customer_image=$row_customer['customer_image'];
    $customer_name=$row_customer['customer_name'];
    if(!isset($_SESSION['customer_email'])){

    }else{
        echo "<center>
            <img class='img-responsive' src='customer_images/$customer_image' alt=''>
        </center>
        <br>
        <h3 align='center' class='panel-title'>Name: $customer_name</h3>";
    }
?>



    </div>
    <!-- Panel Heading End -->
    <div class="panel-body">
        <ul class="nav nav-pills nav-stacked">
            <li class="<?php if(isset($_GET[my_order])){echo "active";} ?>">
                <a href="my_account.php?my_order"><i class="fa fa-list"></i> My Order</a>
            </li>

            <li class="<?php if(isset($_GET[pay_offline])){echo "active";} ?>">
                <a href="my_account.php?pay_offline">
                    <i class="fa fa-bolt"></i>
                    Pay Offline
                </a>
            </li>
            <li class="<?php if(isset($_GET[edit_account])){echo "active";} ?>">
                <a href="my_account.php?edit_account">
                    <i class="fa fa-pencil"></i>
                    Edit Account
                </a>
            </li>
            <li class="<?php if(isset($_GET[change_pass])){echo "active";} ?>">
                <a href="my_account.php?change_pass">
                    <i class="fa fa-user"></i>
                    Change Password
                </a>
            </li>

            <li class="<?php if(isset($_GET[delete_account])){echo "active";} ?>">
                <a href="my_account.php?delete_account">
                    <i class="fa fa-trash"></i>
                    Delete Account
                </a>
            </li>
            <li class="<?php if(isset($_GET[Logout])){echo "active";} ?>">
                <a href="my_account.php?Logout">
                    <i class="fa fa-sign-out"></i>
                    LogOut
                </a>
            </li>

        </ul>
    </div>
</div>
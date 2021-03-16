<?php  
session_start();
include ("includes/db.php");
if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";

}else{


?>

<?php  
$admin_session=$_SESSION['admin_email'];
$get_admin="select * from admins where admin_email='$admin_session'";
$run_admin=mysqli_query($con, $get_admin);
$row_admin=mysqli_fetch_array($run_admin);
$admin_id=$row_admin['admin_id'];
$admin_name=$row_admin['admin_name'];
$admin_email=$row_admin['admin_email'];
$admin_country=$row_admin['admin_country'];
$admin_job=$row_admin['admin_job'];
$admin_contact=$row_admin['admin_contact'];
$admin_about=$row_admin['admin_about'];
$admin_image=$row_admin['admin_image'];



$get_pro="select * from products";
$run_pro=mysqli_query($con,$get_pro);
$count_pro=mysqli_num_rows($run_pro);


$get_cust="select * from customers";
$run_cust=mysqli_query($con,$get_cust);
$count_cust=mysqli_num_rows($run_cust);


$get_p_cat="select * from product_categories";
$run_p_cat=mysqli_query($con, $get_p_cat);
$count_p_cat=mysqli_num_rows($run_p_cat);

$get_order="select * from customer_order";
$run_order=mysqli_query($con, $get_order);
$count_order=mysqli_num_rows($run_order);


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
    <link rel="stylesheet" href="css/style.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>

<body>
    <div id="wrapper">
        <?php  include 'includes/sidebar.php'?>
        <div id="page-wrapper">
            <div class="container-fluid">

                <?php
                                if(isset($_GET['dashboard'])){
                                include 'dashboard.php';
                            }

                                if(isset($_GET['insert_product'])){
                             include 'insert_product.php';
                            }

                             if(isset($_GET['view_product'])){
                             include 'view_product.php';
                            }

                            if(isset($_GET['delete_product'])){
                            include 'delete_product.php';
                            }

                            if(isset($_GET['edit_product'])){
                            include 'edit_product.php';
                            }
                            if(isset($_GET['insert_product_cat'])){
                            include 'insert_p_cat.php';
                            }

                            if(isset($_GET['view_product_cat'])){
                            include 'view_p_cats.php';
                            }

                             if(isset($_GET['delete_p_cat'])){
                            include 'delete_p_cat.php';
                            }

                            if(isset($_GET['edit_p_cat'])){
                            include 'edit_p_cat.php';
                            }

                             if(isset($_GET['insert_categories'])){
                            include 'insert_cat.php';
                            }

                            if(isset($_GET['view_categories'])){
                            include 'view_cat.php';
                            }

                            if(isset($_GET['delete_cat'])){
                            include 'delete_cat.php';
                            }

                            if(isset($_GET['edit_cat'])){
                            include 'edit_cat.php';
                            }

                            if(isset($_GET['insert_slider'])){
                            include 'insert_slider.php';
                            }

                            if(isset($_GET['view_slider'])){
                            include 'view_slider.php';
                            }

                            if(isset($_GET['delete_slide'])){
                            include 'delete_slider.php';
                            }

                            if(isset($_GET['edit_slide'])){
                            include 'edit_slider.php';
                            }

                            if(isset($_GET['view_customer'])){
                            include 'view_customer.php';
                            }

                            if(isset($_GET['customer_delete'])){
                            include 'view_customer.php';
                            }

                            if(isset($_GET['view_order'])){
                            include 'view_order.php';
                            }

                            if(isset($_GET['order_delete'])){
                            include 'order_delete.php';
                            }
                            if(isset($_GET['view_payments'])){
                            include 'view_payments.php';
                            }
                            if(isset($_GET['payment_delete'])){
                            include 'payment_delete.php';
                            }
                            if(isset($_GET['insert_users'])){
                            include 'insert_user.php';
                            }

                            if(isset($_GET['view_users'])){
                            include 'view_user.php';
                            }
                            if(isset($_GET['user_delete'])){
                            include 'user_delete.php';
                            }

                            if(isset($_GET['user_profile'])){
                            include 'user_profile.php';
                            }
                            if(isset($_GET['insert_box'])){
                            include 'insert_box.php';
                            }
                            if(isset($_GET['view_box'])){
                            include 'view_box.php';
                            }
                            if(isset($_GET['delete_box'])){
                            include 'delete_box.php';
                            }
                            if(isset($_GET['edit_box'])){
                            include 'edit_box.php';
                            }

                            
                            

                                
                            
                            
                            
            ?>


            </div>
        </div>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>

<?php
}
?>
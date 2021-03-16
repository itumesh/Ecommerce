<?php



$customer_email=$_SESSION['customer_email'];
// print_r($customer_email); die;
$get_customer="select * from customers where customer_email='$customer_email'";
// print_r($get_customer); die;
$run_cust=mysqli_query($con,$get_customer);
$row_cust=mysqli_fetch_array($run_cust);
$customer_id=$row_cust['customer_id'];
$customer_name=$row_cust['customer_name'];
$customer_email=$row_cust['customer_email'];
$customer_country=$row_cust['customer_country'];
$customer_city=$row_cust['customer_city'];
$customer_contact=$row_cust['customer_contact'];
$customer_address=$row_cust['customer_address'];
$customer_image=$row_cust['customer_image'];


?>

<div class="box">
    <center>
        <h1>Edit Account</h1>
    </center>
    <form action="" method="Post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Customer Name</label>
            <input type="text" name="c_name" class="form-control" value="<?php echo $customer_name;  ?>" required>
        </div>
        <div class="form-group">
            <label for="">Customer Email</label>
            <input type="text" name="c_email" class="form-control" value="<?php echo $customer_email;  ?>" required>
        </div>

        <div class="form-group">
            <label for="">Customer Country</label>
            <input type="text" name="c_country" class="form-control" value="<?php echo $customer_country;  ?>" required>
        </div>
        <div class="form-group">
            <label for="">Customer City</label>
            <input type="text" name="c_city" class="form-control" value="<?php echo $customer_city;  ?>" required>
        </div>
        <div class="form-group">
            <label for="">Customer Number</label>
            <input type="text" name="c_number" class="form-control" value="<?php echo $customer_contact;  ?>" required>
        </div>
        <div class="form-group">
            <label for="">Customer Address</label>
            <input type="text" name="c_address" class="form-control" value="<?php echo $customer_address;  ?>" required>
        </div>

        <div class="form-group">
            <label for="">Customer Image</label>
            <input type="file" name="c_image" class="form-control" required>
            <img src="customer_images/<?php echo $customer_image;  ?>" class="img-responsive" height="100" width="100"
                alt="">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary" name="update">
                Update Now
            </button>
        </div>
    </form>

</div>

<?php 
// print_r($_FILES); die;

$update_id=$customer_id;

if(isset($_POST['update'])){
    
    
    
    $c_name=$_POST['c_name'];
    $c_email=$_POST['c_email'];
    $c_country=$_POST['c_country'];
    $c_city=$_POST['c_city'];
    $c_contact=$_POST['c_number'];  
    $c_address=$_POST['c_address'];
    $c_image=$_FILES['c_image']['name'];
    $c_image_tmp=$_FILES['c_image']['tmp_name'];

    move_uploaded_file($c_image_tmp,"customer_images/$c_image");
    $update_customer="update customers set customer_name='$c_name', customer_email='$c_email', customer_country='$c_country', customer_city='$c_city', customer_contact='$c_contact', customer_address='$c_address', customer_image='$c_image' where customer_id='$update_id'";
    

    $run_customer=mysqli_query($con,$update_customer);
    if($run_customer){
        echo "<script>alert('Your details updated')</script>";
        echo "<script>window.open('../logout.php', '_self')</script>";

    }

}

?>
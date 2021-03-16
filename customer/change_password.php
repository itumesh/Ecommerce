<form action="" method="post">

    <div class="box">
        <center>
            <h1>Change Your Password</h1>
        </center>
        <div class="form-group">
            <label for="">Enter Your Password</label>
            <input type="text" name="old_password" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Enter New Password</label>
            <input type="password" name="new_password" class="form-control">
        </div>
        <div class="form-group">

            <label for="">Confirm New Password</label>
            <input type="password" name="c_n_password" class="form-control">
        </div>
        <div class="text-center">
            <button name='update' type='submit' class="btn btn-primary btn-lg">Update Now</button>
        </div>
    </div>

</form>


<?php
if(isset($_POST['update'])){
    $c_email=$_SESSION['customer_email'];
    $old_password=$_POST['old_password'];
    $new_password=$_POST['new_password'];
    $c_n_password=$_POST['c_n_password'];
    $select_cust="select * from customers where customer_email='$c_email' AND customer_password='$old_password'";
    // print_r($select_cust); die;
    $run_q=mysqli_query($con,$select_cust);
    $check_old_pass=mysqli_num_rows($run_q);
    if($check_old_pass==0){
        echo "<script>alert('Your Current Password is Not Valid....Try  again')</script>";
        exit();

    }
    if($new_password!=$c_n_password){
        echo "<script>alert('Your new password does not match with confirm password')</script>";
        exit();
    }
    $update_q="update customers set customer_password='$new_password' where customer_email='$c_email'";
    $run_q=mysqli_query($con,$update_q);
    echo "<script>alert('Your  Password Changed')</script>";
    echo "<script>window.open('my_account.php?my_order','_self')</script>";

        



}

?>
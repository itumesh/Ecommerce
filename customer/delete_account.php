<form action="" method='post'>
    <div class="box">
        <center>
            <h1>Do You really want to delete your account</h1>
            <form action="" method="post">
                <input type="submit" name="yes" value="yes, I want to Delete" class="btn btn-danger">
                <input type="submit" name="no" value="No, I Dont Want" class="btn btn-primary">
            </form>
        </center>

    </div>

</form>

<?php
$c_email=$_SESSION['customer_email'];
if(isset($_POST['yes'])){
    $delete_q="delete from customers where  customer_email='$c_email'";
    $run_q=mysqli_query($con,$delete_q);
    if($run_q){
        session_destroy();
        echo "<script>alert('Your Account Has been deleted')</script>";
        echo "<script>window.open('../index.php', '_self    ')</script>";
    }
}
?>
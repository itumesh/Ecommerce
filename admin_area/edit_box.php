<?php

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

    ?>


<?php  
if(isset($_GET['edit_box'])){
    $edit_id=$_GET['edit_box'];
    $get_box="select * from boxes_section where box_id='$edit_id'";
    $run_box=mysqli_query($con, $get_box);
    $row=mysqli_fetch_array($run_box);
    $box_id=$row['box_id'];
    $box_title=$row['box_title'];
    $box_desc=$row['box_desc'];


}

?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-home"></i> Dashboard / Edit Box
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel-default">
            <!-- Panel Heading End-->
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fas fa-money-check"></i> Edit Box

                </h3>
            </div>

            <!-- Panel Heading End -->
            <div class="panel-body">
                <form class="form-horizontal" action="" method="POST">
                    <!-- Form Group Start -->
                    <div class="form-group">
                        <label for="" class="col-md-3 control-label">Box Title</label>
                        <div class="col-md-6">
                            <input type="text" name="box_title" class="form-control" value="<?php echo $box_title ?>">
                        </div>

                    </div>
                    <!-- Form Group End -->

                    <!-- Form Group Start -->
                    <div class="form-group">
                        <label for="" class="col-md-3 control-label">Box Desc</label>
                        <div class="col-md-6">
                            <textarea class="form-control" name="box_desc" id="" cols="19"
                                rows="6"><?php echo $box_desc ?></textarea>
                        </div>

                    </div>
                    <!-- Form Group End -->


                    <!-- Form Group Start -->
                    <div class="form-group">
                        <label for="" class="col-md-3 control-label"></label>
                        <div class="col-md-6">
                            <input type="submit" name="submit" value="Update Box" class="form-control btn btn-primary">
                        </div>

                    </div>
                    <!-- Form Group End -->
                </form>
            </div>

        </div>
    </div>
</div>
<?php } ?>

<?php if(isset($_POST['submit'])){
$box_title=$_POST['box_title'];
$box_desc=$_POST['box_desc'];

$update_box="update boxes_section set box_title='$box_title', box_desc='$box_desc' where box_id='$box_id'";
$run_box=mysqli_query($con,$update_box);
echo "<script>alert(' Box Has Been Updated')</script>";
echo "<script>window.open('index.php?view_box', '_self')</script>";
} 
?>
<?php

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>


<?php 

if(isset($_GET['edit_slide'])){

$edit_id = $_GET['edit_slide'];

$edit_slide = "select * from slider where id='$edit_id'";

$run_edit = mysqli_query($con,$edit_slide);

$row_edit = mysqli_fetch_array($run_edit);

$slide_id = $row_edit['id'];

$slide_name = $row_edit['slider_name'];
$slide_url = $row_edit['slider_url'];

$slide_image = $row_edit['slider_image'];



}


?>

<div class="row">
    <!-- 1 row Starts -->

    <div class="col-lg-12">
        <!-- col-lg-12 Starts -->

        <ol class="breadcrumb">
            <!-- breadcrumb Starts -->

            <li class="active">

                <i class="fa fa-dashboard"></i> Dashboard / Edit Slider

            </li>

        </ol><!-- breadcrumb Ends -->



    </div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->

<div class="row">
    <!-- 2 row Starts -->

    <div class="col-lg-12">
        <!-- col-lg-12 Starts -->

        <div class="panel panel-default">
            <!-- panel panel-default Starts -->

            <div class="panel-heading">
                <!-- panel-heading Starts -->

                <h3 class="panel-title">

                    <i class="fa fa-money fa-fw"></i> Edit Slider

                </h3>

            </div><!-- panel-heading Ends -->

            <div class="panel-body">
                <!-- panel-body Starts -->

                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                    <!-- form-horizontal Starts -->

                    <div class="form-group">
                        <!-- form-group Starts -->

                        <label class="col-md-3 control-label">Slide Name:</label>

                        <div class="col-md-6">

                            <input type="text" name="slide_name" class="form-control"
                                value="<?php echo $slide_name; ?>">

                        </div>

                    </div><!-- form-group Ends -->


                    <div class="form-group">
                        <!-- form-group Starts -->

                        <label class="col-md-3 control-label">Slide url:</label>

                        <div class="col-md-6">

                            <input type="text" name="slide_url" class="form-control" value="<?php echo $slide_url; ?>">

                        </div>

                    </div><!-- form-group Ends -->

                    <div class="form-group">
                        <!-- form-group Starts -->

                        <label class="col-md-3 control-label">Slide Image:</label>

                        <div class="col-md-6">

                            <input type="file" name="slide_image" class="form-control">
                            <br>
                            <img src="slider_images/<?php echo $slide_image; ?>" width="120" height="70">

                        </div>

                    </div><!-- form-group Ends -->

                    <div class="form-group">
                        <!-- form-group Starts -->

                        <label class="col-md-3 control-label"></label>

                        <div class="col-md-6">

                            <input type="submit" name="update" value="Update Now" class=" btn btn-primary form-control">

                        </div>

                    </div><!-- form-group Ends -->


                </form><!-- form-horizontal Ends -->

            </div><!-- panel-body Ends -->


        </div><!-- panel panel-default Ends -->

    </div><!-- col-lg-12 Ends -->


</div><!-- 2 row Ends -->

<?php

if(isset($_POST['update'])){

$slide_name = $_POST['slide_name'];
$slide_url = $_POST['slide_url'];

$slide_image = $_FILES['slide_image']['name'];

$temp_name = $_FILES['slide_image']['tmp_name'];

move_uploaded_file($temp_name,"slider_images/$slide_image");

$update_slide = "update slider set slider_name='$slide_name',slider_image='$slide_image',slider_url='$slide_url' where id='$slide_id'";
// print_r($update_slide); die;

$run_slide = mysqli_query($con,$update_slide);

if($run_slide){

echo "<script>alert('One Slide Has Been Updated')</script>";

echo "<script>window.open('index.php?view_slider','_self')</script>";

}

}


?>



<?php } ?>
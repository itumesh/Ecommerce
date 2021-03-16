<?php

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

    ?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-home"></i> Dashboard / Insert Box
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
                    <i class="fas fa-money-check"></i> Insert Box

                </h3>
            </div>

            <!-- Panel Heading End -->
            <div class="panel-body">
                <form class="form-horizontal" action="" method="POST">
                    <!-- Form Group Start -->
                    <div class="form-group">
                        <label for="" class="col-md-3 control-label">Box Title</label>
                        <div class="col-md-6">
                            <input type="text" name="box_title" class="form-control">
                        </div>

                    </div>
                    <!-- Form Group End -->

                    <!-- Form Group Start -->
                    <div class="form-group">
                        <label for="" class="col-md-3 control-label">Box Description</label>
                        <div class="col-md-6">
                            <textarea class="form-control" name="box_desc" id="" cols="19" rows="6"></textarea>
                        </div>

                    </div>
                    <!-- Form Group End -->


                    <!-- Form Group Start -->
                    <div class="form-group">
                        <label for="" class="col-md-3 control-label"></label>
                        <div class="col-md-6">
                            <input type="submit" name="submit" value="Insert Box" class="form-control btn btn-primary">
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

$insert="insert into boxes_section (box_title, box_desc) values('$box_title','$box_desc')";
$run_box=mysqli_query($con,$insert);
echo "<script>alert('New Box Has Been Inserted')</script>";
echo "<script>window.open('index.php?view_box', '_self')</script>";
} 
?>
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
                <i class="fa fa-home"></i> Dashboard / View Box
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel-default">
            <!-- Panel Heading start-->
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fas fa-money-check"></i> Insert Box

                </h3>


            </div>
            <!-- Panel Heading End-->

            <div class="panel-body">
                <?php 
                $get_boxes="select * from boxes_section";
                $run=mysqli_query($con, $get_boxes);
                while($row=mysqli_fetch_array($run)){
                    $box_id=$row['box_id'];
                    $box_title=$row['box_title'];
                    $box_desc=$row['box_desc'];

                
                ?>
                <div class="col-lg-4 col-md-4">
                    <div class="panel panel-primary">
                        <!-- Panel Heading Start -->
                        <div class="panel-heading">
                            <h3 class="panel-title" align="center"><?php echo $box_title; ?></h3>

                        </div>
                        <!-- Panel Heading End -->

                        <!-- Panel-body Start -->
                        <div class="panel-body">
                            <?php echo $box_desc; ?>
                        </div>

                        <!-- Panel-body End -->
                        <div class="panel-footer">
                            <a class="pull-left" href="index.php?delete_box=<?php echo $box_id; ?>">
                                <i class="fa fa-trash-alt"></i> Delete
                            </a>
                            <a class="pull-right" href="index.php?edit_box=<?php echo $box_id; ?>">
                                <i class="fa fa-pencil"></i> Edit
                            </a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>


                <?php } ?>
            </div>
        </div>
    </div>
</div>


<?php } ?>
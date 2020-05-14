<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 7/23/2017
 * Time: 11:03 PM
 */
require 'header.php';
require 'Controllers/DataFile.php';
$object = new DataFile();
@$del=$_GET['id'];
if($del>0)
{
    $comm = mysqli_query($object->db,"delete from booking where id='$del' ");
    if(!$comm)
    {
        $msg = '<div class="alert alert-danger alert-dismissable fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Alert!</strong> Data Not Deleted, Try Again.</div>';
    }
    else
    {
        $msg = '<div class="alert alert-success alert-dismissable fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> Data Deleted Succcessfully.
                  </div>';
    }
}
?>

<div class="right_col dataHeight" role="main">

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <?php if(isset($msg)){
                        echo $msg;
                    }?>
                    <h2>Booking Information</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>

                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                        Below Table show the information about the Bookings.
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Contact No.</th>
                            <th>Date/Time</th>
                            <th>Delete</th>
                        </tr>
                        </thead>


                        <tbody>
                        <?php
                        echo $object->getBooking();
                        ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require 'footer.php';
?>

<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 7/23/2017
 * Time: 10:39 PM
 */
    require 'header.php';
    require 'Controllers/DataFile.php';
    $object = new DataFile();
    @$del=$_GET['id'];
    if($del>0)
    {
        $comm = mysqli_query($object->db,"delete from contact where id='$del' ");
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
                        <h2>Contact Information</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <p class="text-muted font-13 m-b-30">
                            Below Table show the information about the Contacts.
                        </p>
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Delete</th>
                            </tr>
                            </thead>


                            <tbody>
                            <?php
                            echo $object->getContact();
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

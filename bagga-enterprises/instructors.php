<?php

    require 'config.php';
    require 'header.php';
    if(isset($_POST["submit"]))
    {
        if(@$_SESSION['userid']=="")
        {
            echo "<script>alert(\"Please First Login\")</script>";
            echo "<script>window.location.href='login.php'</script>";
        }
        else
        {
            $result = mysqli_query($con,"insert into booking(prod_id, user_id ) values('".$_POST['pid']."','".$_SESSION['userid']."')");
            if($result)
            {
                echo "<script>alert('Booking Successfully')</script>";
            }
            else
            {
                echo mysqli_error($con);
            }
        }
    }

?>

<style>
    .btnStyle{
        margin-top: 0px !important;
    }
</style>
        <div class="wrap-title-page">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12"><h1 class="ui-title-page">our teachers</h1></div>
                </div>
            </div><!-- end container-->
        </div><!-- end wrap-title-page -->


        <div class="section-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="wrap-breadcrumb clearfix">
                            <ol class="breadcrumb">
                                <li><a href="javascript:void(0);"><i class="icon stroke icon-House"></i></a></li>
                                <li class="active">Water Purifiers</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section-breadcrumb -->


        <main class="main-content">

            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="wrap-title wrap-title_mod-b">
                            <div class="ui-subtitle-block">We provide the best quality Water purifiers in India.</div>
                        </div><!-- end wrap-title -->


                        <div class="posts-wrap">
                            <?php
                                $sql = "SELECT * FROM products where catid='".$_GET['id']."'";
                                $result = mysqli_query($con, $sql);
                                if (mysqli_num_rows($result) > 0)
                                {
                                    // output data of each row
                                    while($row = mysqli_fetch_array($result))
                                    {
                            ?>
                                        <div class="staff">
                                            <div class="staff__media"><img class="img-responsive" src="<?php echo 'admin/pics/'.$row[3] ?>"
                                                                           height="250"
    width="270"
                                                                           alt="foto"></div>
                                            <div class="staff__inner staff__inner_mod-a">
                                                <h3 class="staff__title"><?php echo $row[2] ?></h3>
                                                <div class="staff__description"><?php echo "Rs ".$row[4] ?></div>
                                                <form method="post">
                                                    <input type="hidden" value="<?php echo $row[0] ?>" name="pid">
                                                <button type="submit" name="submit" class="btn btn-primary btnStyle">Buy Now</button>
                                                </form>
                                            </div>
                                        </div>
                            <?php
                                    }
                                }
                            ?>



                        </div><!-- end posts-wrap -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->

        </main><!-- end main-content -->
<?php

require 'footer.php';
?>
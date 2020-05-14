<?php
include("header.php");
if(isset($_POST['submit']))
{
	require("config.php");
    $sql = mysqli_query($con,"SELECT * from register where email = '".$_POST['email']."' and password = '".$_POST['pass']."'");
		if(mysqli_num_rows($sql)>0)
		{
			$row = mysqli_fetch_array($sql);
				$_SESSION['userid']=$row[0];
				$_SESSION['username']=$row[1];
            echo "<script>window.location.href='index.php'</script>";
		}
		else
		{
			echo "<script>alert('Please Register Yourself')</script>";
		}
}

?>




				<div class="wrap-title-page">
					<div class="container">
						<div class="row">
							<div class="col-xs-12"><h1 class="ui-title-page">Login</h1></div>
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
										<li class="active">Login</li>
									</ol>
								</div>
							</div>
						</div><!-- end row -->
					</div><!-- end container -->
				</div><!-- end section-breadcrumb -->


				<main class="main-content">
					<div class="container">
						<div class="col-sm-3" >
						</div>
						<div class="col-sm-6" >
									<!-- <h2 class="ui-title-block">Send <strong>Us Message</strong></h2>
									<div class="wrap-subtitle">
										<div class="ui-subtitle-block ui-subtitle-block_w-line">If you have some feedback or want to ask any questions</div>
									</div> --><!-- end wrap-title -->
									<form class="form-contact ui-form" method="post">
										<div class="row">
											
											<div class="col-md-12">
												<input class="form-control" autofocus id="email" name="email" type="text" placeholder="Email">
											</div>

											<div class="col-md-12">
												<input class="form-control" id="pass" name="pass" type="password" placeholder="Password">
											</div>
											
											<div class="col-xs-12">
												<button type="submit" name="submit" class="btn btn-primary btn-effect">Sign In</button>
											</div>
										</div>
									</form>
								</div><!-- end col -->

					</div><!-- end container -->
				</main><!-- end main-content -->


<?php
include("footer.php");
?>


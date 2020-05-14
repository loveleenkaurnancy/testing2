<?php
include("header.php")
?>

<?php
if(isset($_POST['submit']))
{
	require("config.php");
	$pass=$_POST['pass'];
	$repass=$_POST['repass'];
	if($pass==$repass)
	{
 		 $sql=mysqli_query($con,"INSERT INTO register(name,email,phone,password) VALUES('".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['pass']."')");
		if($sql)
		{
			echo "<script>alert('Successfully Registered')</script>";
		}
		else
		{
			echo mysqli_error($con);
		}
	}
	else
	{
		echo "<script>alert('Please Re-type Password')</script>";
	}
}
?>




				<div class="wrap-title-page">
					<div class="container">
						<div class="row">
							<div class="col-xs-12"><h1 class="ui-title-page">registration</h1></div>
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
										<li class="active">registration</li>
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
												<input class="form-control" id="name" name="name" type="text" placeholder="Full Name" required>
											</div>
											<div class="col-md-12">
												<input class="form-control" id="email" name="email" type="text" placeholder="Email">
											</div>
											<div class="col-md-12">
												<input class="form-control" id="phone" name="phone" type="text" placeholder="Phone No">
											</div>
											<div class="col-md-12">
												<input class="form-control" id="pass" name="pass" type="password" placeholder="Password">
											</div>
											<div class="col-md-12">
												<input class="form-control" id="repass" name="repass" type="password" placeholder="Re Type Password">
											</div>
											<div class="col-xs-12">
												<button type="submit" name="submit" class="btn btn-primary btn-effect">Sign Up</button>
											</div>
										</div>
									</form>
								</div><!-- end col -->

					</div><!-- end container -->
				</main><!-- end main-content -->


<?php
include("footer.php");
?>


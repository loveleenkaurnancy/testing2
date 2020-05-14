<?php
require("config.php");
	$comm=("select distinct(c_fees) from courses where c_course='".$_GET['q']."'");
	$result=mysqli_query($con,$comm);
	while($row=mysqli_fetch_array($result))
	{
		//echo "$row[0]";
		echo "<input disabled name='fees' type='text' class='with-gap' id='fees' value='$row[0]' required>";
	}

?>

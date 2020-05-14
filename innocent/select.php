<?php
require("config.php");

	echo "<option value='' disabled selected>Select Course</option>";
	$comm=("select distinct(c_course) from courses where c_department='".$_GET['q']."'");
	$result=mysqli_query($con,$comm);
	while($row=mysqli_fetch_array($result))
	{
		if($row[0]==$course && $idno>0)
		{
			echo "<option value='$row[0]'>$row[0]</option>";
		}
		else
		{
			echo "<option value='$row[0]'>$row[0]</option>";
		}


	}


?>

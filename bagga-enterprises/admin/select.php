<?php
require("config.php");
require 'Controllers/Connection.php';
$obj = new Connection();
	$comm=("select * from category where category='".$_GET['q']."'");
	$result=mysqli_query($obj->db,$comm);
	while($row=mysqli_fetch_array($result))
	{
		if($row[0]==$testid && $idno>0)
		{
			echo "<option value='$row[0]' selected>$row[2]</option>";
		}
		else
		{
			echo "<option value='$row[0]'>$row[2]</option>";
		}
	}
?>

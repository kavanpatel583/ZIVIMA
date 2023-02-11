<?php
	$con=mysqli_connect("localhost","root","");
	if(!$con)
	{
		echo"error";
}
			mysqli_select_db($con,"sagy");

	?>
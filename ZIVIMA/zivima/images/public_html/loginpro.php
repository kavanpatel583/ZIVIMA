<?php
	session_start();
	include"connect.php";
	$Email=$_POST['email'];
	$passw=$_POST['pass'];
		$qry='select * from admin WHERE  email="'.$Email.'"';
		$result=mysql_query($qry);
	$a=mysql_num_rows($result);
	if($a==0)
		{
			header('Location:login.php?id=1');						
 		}
	else
	{	$result=mysql_query($qry);
			while($row=mysql_fetch_assoc($result))
			{
				$x=$row['password'];
				echo "</br>";
				echo $x;
				echo "</br>";
				echo $passw;
					if($passw==$x)
						{
							$_SESSION['email']=$Email;
							if(isset($_SESSION['email']))
							{
									header('Location:home.php');						
							}
						}
					else
						{
								header('Location:login.php?id=1');						
						}
			}
	}
?>
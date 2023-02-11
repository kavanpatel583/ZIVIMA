<html>
<head>
<style>
.tab
{
	margin-top:5%;
	margin-bottom:5%;
}
.mod,.mod1 td
{
	text-align:center;
	
	height:50px;
	margin:0px;
	padding:0px;
}
.mod
{
	margin:0px;
	padding:0px;
	color:#37474fad;
	background:#eceff1;
}
.mod1
{
	margin:0px;
	padding:0px;
	color:white;
	background:#778287;
}
th
{
		background:#37474fad;
		color:white;
}
h1
{
	margin-left:0px;
	width:100%;
	color:white;
	background:#37474f;
}
</style>
</head>
<body>
<?php
	include"header.php";
	include"connect.php";
	$qry="select * from admin";
	echo"<center><h1>Admin</h1>";
	$result=mysqli_query($con,$qry);
	echo"<table class='tab'><tr class='mod'><th>ID</th><th>Name</th><th>email</th><th>password</th><th>EDIT</th><th>DELETE</th></tr>";
	$a=0;
	while($row=mysqli_fetch_assoc($result))
	{
		if(($a%2)==0)
		{
		echo"<tr class='mod'><td>".$row['id']."</td>";
		echo"<td>".$row['name']."</td>";
		echo"<td>".$row['email']."</td>";
		echo"<td>".$row['password']."</td>";
		echo"<td><a href='updateadmin.php?id=".$row['id']."'>EDIT</a></td>";
		echo"<td><a href='deleteadmin.php?id=".$row['id']."'>DELETE</a></td></tr>";
		$a++;
		}
		else{
		echo"<tr class='mod1'><td>".$row['id']."</td>";
		echo"<td>".$row['name']."</td>";
		echo"<td>".$row['email']."</td>";
		echo"<td>".$row['password']."</td>";
		echo"<td><a href='updateadmin.php?id=".$row['id']."'>EDIT</a></td>";
		echo"<td><a href='deleteadmin.php?id=".$row['id']."'>DELETE</a></td></tr>";
		$a++;
		}
	}
		echo"</table>";
	include"footer.php";
?>
</center>
</body>
</html>
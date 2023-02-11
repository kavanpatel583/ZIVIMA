<html>
<head>
<style>
table
{

	margin-left:200px;
}
table tr
{
	margin:10px;
}
table tr input
{
	height:30px;
	width:200px;
}
table tr td
{
	width:100px;
}
.sub
{
	background:#37474f;	
	width:100%;
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
	$id=$_GET['id'];
	echo"<center><h1>Update Admin</h1></br>";
	$qry="select * from admin WHERE id='".$id."'";
	$result=mysql_query($qry);
	while($row=mysql_fetch_assoc($result))
	{

?>
<form action="updateadmin1.php" method="POST">
<table>
<tr>
<td>
id
</td>
<td>
<input type="text" name="id" value="<?php echo $row['id'];?>"
</td>
</tr>
<tr>
<td>
Name
</td>
<td>
<input type="text" name="name" value="<?php echo $row['name'];?>">
</td>
</tr>
<tr>
<td>
email
</td>
<td>
<input type="email" name="email" value="<?php echo $row['email'];?>">
</td>
</tr>
<tr>
<td>
password
</td>
<td>
<input type="password" name="password" value="<?php echo $row['password'];?>">
</td>
</tr>
<tr>
<td colspan="2">	
<input type="submit" value="update" class="sub">
</td>
</tr>
</table>
</form>
</center>
<?php
	}	
	include"footer.php";	
?>
</body>
</html>
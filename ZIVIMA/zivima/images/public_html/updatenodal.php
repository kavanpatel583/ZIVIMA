<html>
<head>
<style>
.tab{
	
	margin-top:5%;
	margin-bottom:5%;
}
.mod,.mod1 td
{
	text-align:center;
	width:8%;
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
th{
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
h2
{
	margin-left:0px;
	width:100%;
	color:white;
	background:#37474f;	
}
</style>
<head>
<body>
<?php 	
	include"header.php";
	include"connect.php";
	echo"<center><h2>UPDATE Nodal Officer</h2></br>";
	$id=$_GET['nodal_id'];
	$qry="select * from nodal_info where nodal_id ='".$id."'";
	$result=mysql_query($qry);
	while($row=mysql_fetch_assoc($result))
	{
?>
<form action="updatenodalquery.php" method="POST">
<table>
<tr>
<td>
Name
</td>
<td>
<input type="hidden" name="id" value="<?php echo $id;?>">
<input type="text" name="name" value="<?php echo $row['name'];?>">
</td>
</tr>
<tr>
<td>
village_name
</td>
<td>
<input type="text" name="village" value="<?php echo $row['village_name'];?>" >
</td>
</tr>
<tr>
<td>
village_pincode
</td>
<td>
<input type="text" name="village_pincode" value="<?php echo $row['village_pincode'];?>">
</td>
</tr>
<tr>
<td>
addhar_no
</td>
<td>
<input type="text" name="addhar_no" value="<?php echo $row['addhar_no'];?>">
</td>
</tr>
<tr>
<td colspan="2">
<input type="submit" value="UPDATE" class="sub">
</td>
</tr>
</table>
</form>
<?php
	}
	include"footer.php";
	?>

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
	$mp_id=$_GET['mp_id'];
	$qry="select * from mpinfo WHERE mp_id='".$mp_id."'";
	$result=mysql_query($qry);
	while($row=mysql_fetch_assoc($result))
	{
			echo"<center><h1>UPDATE M.P.</h1></br>";

?>
<form action="updatemp1.php" method="POST">
<table>
<tr>
<td>
</td>
<td>
<input type="hidden" name="mp_id" value="<?php echo $row['mp_id'];?>"
</td>
</tr>
<tr>
<td>
Name
</td>
<td>
<input type="text" name="mp_name" value="<?php echo $row['mp_name'];?>">
</td>
</tr>
<tr>
<td>
village
</td>
<td>
<input type="text" name="village" value="<?php echo $row['village'];?>">
</td>
</tr>
<tr>
<td>
consituency
</td>
<td>
<input type="text" name="constitiency" value="<?php echo $row['consituency'];?>">
</td>
</tr>
<tr>
<td>
scheme_id_string
</td>
<td>
<input type="text" name="scheme_id_string" value="<?php echo $row['scheme_id_string'];?>">
</td>
</tr>
<tr>
<td>
age
</td>
<td>
<input type="text" name="age" value="<?php echo $row['age'];?>">
</td>
</tr>
<tr>
<td>
gender
</td>
<td>
<input type="text" name="gender" value="<?php echo $row['gender'];?>">
</td>
</tr>
<tr>
<td>
score
</td>
<td>
<input type="text" name="score" readonly value="<?php echo $row['score'];?>">
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
	include"footer.php";
}	
?>
</body>
</html>
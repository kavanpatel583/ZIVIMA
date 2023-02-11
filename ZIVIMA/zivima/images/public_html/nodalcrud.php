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
<head>
<body>
<?php
		include"header.php";
		echo"<center><h1>Insert Nodal Officer</h1></br>";
?>
<form action="insertnodaldb.php" method="POST">
<table>
<tr>
<td>
Name:
</td>
<td>
<input type="text" name="name">
</td>
</tr>
<tr>
<td>
village name
</td>
<td>
<input type="text" name="village_name" >
</td>
</tr>
<tr>
<td>
village pincode
</td>
<td>
<input type="text" name="village_pincode">
</td>
</tr>
<tr>
<td>
addhar_no
</td>
<td>
<input type="text" name="addhar_no">
</td>
</tr>
<tr>
<td colspan="2">
<input type="submit" value="ADD" class="sub">
</td>
</tr>
</table>
</form>
<?php
	include"connect.php";
	$qry="select * from nodal_info";
	$result=mysql_query($qry);
	echo"<table style='margin-left:15%;'><tr class='mod'><th>ID</th><th>Name</th><th>Village name</th><th>village pincode</th><th>addhar_no</th><th>EDIT</th><th>DELETE</th></tr>";
	$a=0;
	while($row=mysql_fetch_assoc($result))
	{
		if(($a%2)==0)
		{
		echo"<tr class='mod'><td>".$row['nodal_id']."</td>";
		echo"<td>".$row['name']."</td>";
		echo"<td>".$row['village_name']."</td>";
		echo"<td>".$row['village_pincode']."</td>";
		
		echo"<td>".$row['addhar_no']."</td> ";
		echo"<td><a href='updatenodal.php?nodal_id=".$row['nodal_id']."'>EDIT</a></td>";
		echo"<td><a href='deletenodal.php?nodal_id=".$row['nodal_id']."'>DELETE</a></td></tr>";
		}
		else
		{
		echo"<tr class='mod1'><td>".$row['nodal_id']."</td>";
		echo"<td>".$row['name']."</td>";
		echo"<td>".$row['village_name']."</td>";
		echo"<td>".$row['village_pincode']."</td>";
		
		echo"<td>".$row['addhar_no']."</td> ";
		echo"<td><a href='updatenodal.php?nodal_id=".$row['nodal_id']."'>EDIT</a></td>";
		echo"<td><a href='deletenodal.php?nodal_id=".$row['nodal_id']."'>DELETE</a></td></tr>";
		}
		}
		echo"</table>";
		include"footer.php";
?>
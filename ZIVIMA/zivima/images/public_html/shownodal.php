<html>
<head>
<title>
Add Nodal officer
</title>
<head>
<body>
<form action="addnodaldb.php" method="POST" >
<table>
<tr>
<td>
Name
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
<input type="text" name="village_pincode" >
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
<input type="submit" value="ADD">
</td>
</tr>
</table>
</form>
<?php
	include"connect.php";
	$qry="select * from nodal_info ";
	$result=mysql_query($qry);
	echo"<table><tr><th>Name</th><th>Village name</th><th>village</th><th>addhar_no</th><th>EDIT</th><th>DELETE</th></tr>";
	while($row=mysql_fetch_assoc($result))
	{
		echo"<tr><td>".$row['name']."</td>";
		echo"<td>".$row['village_name']."</td>";
		echo"<td>".$row['village_pincode']."</td>";
		echo"<td>".$row['addhar_no']."</td> ";
		echo"<td><a href='updatenodal.php?nodal_id=".$row['nodal_id']."'>EDIT</a></td>";
		echo"<td><a href='deletenodal.php?nodal_id=".$row['nodal_id']."'>DELETE</a></td></tr>";
	}
	echo"</table>";
?>
</body>
</html>
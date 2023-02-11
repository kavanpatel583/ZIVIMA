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
	echo"<center><h1>Insert M.P.</h1></br>";
?>
<form action="insert.php" method="POST">
<table style="margin-left:0px;">
<tr>
<td>
Name
</td>
<td>
<input type="text" name="mp_name" >
</td>
</tr>
<tr>
<td>
village
</td>
<td>
<input type="text" name="village" >
</td>
</tr>
<tr>
<td>
consituency
</td>
<td>
<input type="text" name="constitiency" >
</td>
</tr>
<tr>
<td>
scheme_id_string
</td>
<td>
<input type="text" name="scheme_id_string" >
</td>
</tr>
<tr>
<td>
age
</td>
<td>
<input type="text" name="age" >
</td>
</tr>
<tr>
<td>
gender
</td>
<td>
<input type="text" name="gender" >
</td>
</tr>
<tr>
<td>
score
</td>
<td>
<input type="text" name="score" readonly value="0">
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
<input type="submit" value="Insert" class="sub">
</td>
</tr>
</table>
</form>
<?php
	include"connect.php";
	$qry="select * from mpinfo";
	$result=mysql_query($qry);
	echo"<hr><table style='margin-left:0px;'><tr class='mod'><th>ID</th><th>Name</th><th>Village</th><th>consituency</th><th>scheme_id_string</th><th>age</th><th>gender</th><th>score</th><th>addhar_no</th><th>EDIT</th><th>DELETE</th></tr>";
	$a=0;
	while($row=mysql_fetch_assoc($result))
	{
		if(($a%2)==0)
		{
		echo"<tr class='mod'><td>".$row['mp_id']."</td>";
		echo"<td>".$row['mp_name']."</td>";
		echo"<td>".$row['village']."</td>";
		echo"<td>".$row['consituency']."</td>";
		echo"<td>".$row['scheme_id_string']."</td>";
		echo"<td>".$row['age']."</td>";
		echo"<td>".$row['gender']."</td>";
		echo"<td>".$row['score']."</td>";
		echo"<td>".$row['addhar_no']."</td> ";
		echo"<td><a href='updatemp.php?mp_id=".$row['mp_id']."'>EDIT</a></td>";
		echo"<td><a href='deletemp.php?mp_id=".$row['mp_id']."'>DELETE</a></td></tr>";
		$a++;
		}
		else{
		echo"<tr class='mod1'><td>".$row['mp_id']."</td>";
		echo"<td>".$row['mp_name']."</td>";
		echo"<td>".$row['village']."</td>";
		echo"<td>".$row['consituency']."</td>";
		echo"<td>".$row['scheme_id_string']."</td>";
		echo"<td>".$row['age']."</td>";
		echo"<td>".$row['gender']."</td>";
		echo"<td>".$row['score']."</td>";
		echo"<td>".$row['addhar_no']."</td> ";
		echo"<td><a href='updatemp.php?mp_id=".$row['mp_id']."'>EDIT</a></td>";
		echo"<td><a href='deletemp.php?mp_id=".$row['mp_id']."'>DELETE</a></td></tr>";
		$a++;
		}
}
		echo"</table>";

	include"footer.php";
?>
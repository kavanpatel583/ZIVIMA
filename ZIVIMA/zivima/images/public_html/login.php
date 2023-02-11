<html>
<head>
<?php error_reporting(0);
?>

</head>
<body>
<div class="body">
<form action="home.php" method="POST">
<table>
<tr>
<td colspan="2">
LOGIN</td>
</tr>
<tr>
<td>
Email
</td>
<td class="input">
<input type="text" name="email" />
</td>
</tr>
<tr>
<td>
Password
</td>
<td class="input">
<input type="text" name="pass" />
</td>
</tr>
<tr>
<td colspan="2">
<input type="submit" value="Login" class="sub"/>
</td>
</tr>
<tr>
<td colspan="2">
<?php $id=$_GET['id'];
if($id==1){
	echo'<h4 style="color:red;">Wrong ID or Password</h4>';
	} ?>
</td>
</tr>
<tr>
<td colspan="2">
<a href="index.php">Register</a>
<a href="villageratio.php">village ratio</a> 
</td>
</tr>
</table>
</form>
</body>
</html>

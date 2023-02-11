<html>
<head>
<style>
.msg{
	color:#26a69a;
    background-color:  #fff;
}
#border1{
	padding:2%;
	margin-top:14%;
	margin-bottom:20%;
	margin-left:16%;
	margin-right:20%;
}
.btn2{
	text-decoration: none;
    color: #fff;
    background-color: #26a69a;
    text-align: center;
    letter-spacing: .5px;
	font-size:20px;
	padding:2%;
	width:200px;
	border-radius:10px 10px;
}
</style>
		<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="shortcut icon" href="assets/ic_sagy.png">
		<title>Sagy-application</title>		
	</head>
	<body class="container" id="border1">
<center>
<?php
$i=0;
session_start();
	$id=$_SESSION['email'];
	include"conn.php";
	$sql1 = "SELECT * FROM application_data1 WHERE institute_id='".$id."'";
	$result1 = mysqli_query($conn, $sql1);
	while($row = mysqli_fetch_assoc($result1))
	{
		$i++;
		?>
		<form action="select.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $row['application_id'];?>">
		<input type="submit" class="btn2" value="<?php echo $row['project_name'];?>">
		</form>
		</form>
<?php
	}?>
<?php
//$sql = 'SELECT * FROM institute where Permanent_ID="' . $id . '"';
//$result = mysqli_query($conn, $sql);
//$abc = mysqli_num_rows($result);
//while ($row = mysqli_fetch_assoc($result)) {
	if($i==0)
	{
		header("location:genform.php");
	}
	if ($i >= 3) {
		echo "<h3 class='msg'>You can't Fill More Form</h3>";
	} 
	else 
	{

?>	<form action="genform.php">
	<input type="submit" value="ADD NEW PROJECT">
	</form>
<?php
}//}
?>
</center>
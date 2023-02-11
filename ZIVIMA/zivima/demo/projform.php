<html>
<head>
<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="shortcut icon" href="assets/ic_sagy.png">
		<title>Sagy Team Application</title>
	</head>
	<body class="container">		
<?php
	$id=$_POST['id'];
	$projname=$_POST['projname'];
	$projcat=$_POST['projcat'];
	$instname=$_POST['instname'];
	$instid=$_POST['instid'];
	$instadd=$_POST['instadd'];
	$instcity=$_POST['instcity'];
	$inststate=$_POST['inststate'];
	$instpin=$_POST['instpin'];
	$instdir=$_POST['instdir'];
	$instcont=$_POST['instcont'];
	$instmail=$_POST['instmail'];
	$facultyname=$_POST['facultyname'];
	$contect=$_POST['contect'];
	$email=$_POST['email'];
	$villageame=$_POST['villageame'];
	$district=$_POST['district'];
	$state=$_POST['state'];
	$villagelok=$_POST['villagelok'];
	$mpname=$_POST['mpname'];

?>
<h3 class="header">Institute Details</h3>
<form action="submitform.php" method="POST">
<input type="hidden" name="id" value="<?php echo $id;?>">
<!--General Information
Project Name-->
<input type="hidden" value="<?php echo $projname ;?>" name="projname" >
<!--Sub Category:-->
<input type="hidden" value="<?php echo $projcat ;?>" name="projcat">
<!--Institute Details
Name Of Institute-->
<input type="hidden" value="<?php echo $instname ;?>" name="instname">
<!--Institute Permanent -ID-->
<input type="hidden" value="<?php echo $instid ;?>" name="instid">
<!--Address-->
<input type="hidden" value="<?php echo $instadd ;?>" name="instadd">
<!--City-->
<input type="hidden" value="<?php echo $instcity ;?>" name="instcity">
<!--State-->
<input type="hidden" value="<?php echo $inststate ;?>" name="inststate">
<!--Pincode-->
<input type="hidden" value="<?php echo $instpin ;?>" name="instpin">
<!--Name of Principal/Director-->
<input type="hidden" value="<?php echo $instdir ;?>" name="instdir">
<!--Conact Number-->
<input type="hidden" value="<?php echo $instcont ;?>" name="instcont">
<!--Email Id-->
<input type="hidden" value="<?php echo $instmail ;?>" name="instmail">
<!--Name Of faculty member/Nodal Officer/NCC Officer/NSS Officer-->
<input type="hidden" name="facultyname" value="<?php echo $facultyname;?>">
<!--
Conact Number
-->
<input type="hidden" value="<?php echo $contect ;?>" name="contect">
<!--Email Id
-->
<input type="hidden" value="<?php echo $email ;?>" name="email">
<!--Village Information
Name Of Village-->
<input type="hidden" value="<?php echo $villageame ;?>" name="villageame">
<!--District Name-->
<input type="hidden" value="<?php echo $district ;?>" name="district">
<!--State-->
<input type="hidden" value="<?php echo $state ;?>" name="state">
<!--Name Of Parliamentary/Lok sabha/Rajiya Sabha Constituency-->
<input type="hidden" value="<?php echo $villagelok ;?>" name="villagelok">
<!--Name of Hon'ble MP(Lok sabha/Rajiya Sabha)-->
<input type="hidden" value="<?php echo $mpname ;?>" name="mpname">
	<table class="sub1" class="row">
		<tr style="border-style: none;">
			<td colspan="2">
				<div class="input-field col s8">					
					<input  type="text"  class="validate" value="Describe the problem/Challenge/Opportunity identified in Village
					" required readonly>
					<span class="helper-text" data-error="error" data-success="">				
					</span>
					<textarea placeholder="(maximum 200 words)" maxlength="200" class="tarea" name="problem">
					</textarea>
				</div>
			</td>					
		</tr>
		<tr style="border-style: none;">
			<td colspan="2">
				<div class="input-field col s8">					
					<input id="instname" type="text" name="instname" class="validate" value="<?php echo $instname;?>" required readonly>
					<span class="helper-text" data-error="Invalid Name Of Institute" data-success="">				
					</span>
					<textarea maxlength="200" class="tarea" name="development" placeholder="(maximum 200 words)">
					</textarea>
				</div>
			</td>					
		</tr>
		<tr style="border-style: none;">
			<td colspan="2">
				<div class="input-field col s8">					
					<input id="instname" type="text" name="instname" class="validate" value="<?php echo $instname;?>" required readonly>
					<span class="helper-text" data-error="Invalid Name Of Institute" data-success="">				
					</span>
					<textarea maxlength="200"  class="tarea" name="outcomes" placeholder="(maximum 200 words)">
					</textarea>
				</div>
			</td>					
		</tr>
		<tr style="border-style: none;">
			<td colspan="2">
				<div class="input-field col s8">					
					<input  type="text" name="instname"  value="<?php echo $instname;?>" required readonly>
					<span class="helper-text" data-error="Invalid Name Of Institute" data-success="">				
					</span>
					<textarea maxlength="150" class="tarea" name="conclusion" placeholder="(150 words)">
					</textarea>
				</div>
			</td>					
		</tr>
<tr>
<td>
<input type="submit" class="btn" value="Submit" >
</td>
<td>
<input type="reset" class="btn" value="Clear">
</td>
</tr>
</table>
</form>
</div>
</body>
</html>
<?php
 if($_SERVER['REQUEST_METHOD'] == 'POST') 
 {
	$id=$_POST['id'];
 }
 else
 {
	$id=$_GET['id'];
 }
	include"conn.php";
	$sql1 = "SELECT * FROM application_data1 WHERE application_id='".$id."' ";
	$result1 = mysqli_query($conn, $sql1);
	while($row = mysqli_fetch_assoc($result1))
	{
		?>
			<form action="update.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $id;?>">

			General Information
			Project Name
			<input type="text" name="projname" value="<?php echo $row['project_name']; ?>">
			Sub Category:
			<input type="text" name="projcat" value="<?php echo $row['sub_category'];
			 ?>">
			Institute Details
			Name Of Institute
			<input type="text" name="instname" value="<?php echo $row['institute_name']; ?>">
			Institute Permanent -ID
			<input type="text" name="instid" value="<?php echo $row['institute_id']; ?>">
			Address
			<input type="text" name="instadd" value="<?php echo $row['address'];?>">
			City
			<input type="text" name="instcity" value="<?php echo $row['city'];?>">
			State
			<input type="text" name="inststate" value="<?php echo $row['state']; ?>">
			Pincode
			<input type="text" name="instpin" value="<?php echo $row['pin_code'];?>">
			Name of Principal/Director
			<input type="text" name="instdir" value="<?php echo $row['principal_name']; ?>">
			Conact Number
			<input type="text" name="instcont" value="<?php echo $row['principal_contact_no'];?>">
			Email Id
			<input type="hidden" value="<?php echo $row['principal_email_id'];?>" name="instmail">
			Name Of faculty member/Nodal Officer/NCC Officer/NSS Officer-->
			<input type="hidden" name="facultyname" value="<?php echo $row['nodal_name'];?>">
			Conact Number
			<input type="hidden" value="<?php echo $row['nodal_contact_no'];?>" name="contect">
			Email Id
			<input type="text" name="email" value="<?php echo $row['nodal_email_id'];?>">
			Village Information
			Name Of Village
			<input type="text" name="villageame" value="<?php echo $row['village_name'];?>">
			District Name
			<input type="text" name="district" value="<?php echo $row['district_name'];?>">
			State
			<input type="text" name="state" value="<?php echo $row['village_state'];?>">
			Name Of Parliamentary/Lok sabha/Rajiya Sabha Constituency
			<input type="text" name="villagelok" value="<?php echo $row['lokshabha'];?>">
			Name of Hon'ble MP(Lok sabha/Rajiya Sabha)
			<input type="text" name="mpname" value="<?php echo $row['mp'];?>">
			<table class="sub1">
			<tr>
			<td colspan=2 class="head">
			About Your project 
			</td>
			</tr>	
			<tr>
			<td>
			Describe the problem/Challenge/Opportunity identified in Village(maximum 200 words)
			</td>
			<td>
			<textarea maxlength="200" class="tarea" name="problem" ><?php echo $row['problem_desc'];?>
			</textarea>
			</td>
			</tr>
			<tr>
			<td>
			Explain about project Implementation to achieve any of the 14 points Action Plan for the development of Village(maximum 200 words)
			</td>
			<td>
			<textarea maxlength="200" name="development">
			<?php echo $row['project_explation'];?>
			</textarea>
			</td>
			</tr>
			<tr>
			<td>
			Brief Outcomes along with impact on society(maximum 200 words)
			</td>
			<td>
			<textarea maxlength="200"  name="outcomes">
			<?php echo $row['outcome'];?>
			</textarea>
			</td>
			</tr>
			<tr>
			<td>
			Conclusion / Future Scope to <>enhancement(150 words)
			</td>
			<td>
			<textarea maxlength="150" name="conclusion" >
			<?php echo $row['conclusion']; ?>
			</textarea>
			</td>
			</tr>
			<tr>
			<td>
			<input type="submit" value="Submit" >
			</td>
			<td>
			</td>
			</tr>
			</table>
			</form>
			</div>
			<?php	
}
	?>
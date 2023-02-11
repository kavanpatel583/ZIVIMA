<?php
 // header( 'Content-Type: text/html; charset=utf-8' );
// error_reporting(0);
include("db_connect.php");

if($_REQUEST['action']=='scheme')
{
	//echo "select * from itr where srno='".$_REQUEST['id']."'";
	getjson("select * from scheme");
}


else if ($_REQUEST['action']=="nodel_update_current_work") {
	getinsertjson("update nodel_officer set nodel_current_work = '".$_REQUEST['desc']."' where nodel_officer.Permanent_ID = '".$_REQUEST['pid']."'");
}

// else if ($_REQUEST['action']=='get_institute_single'){
// 	//$iname = addcslashes($_REQUEST['i_name'], ".");
// 	$iname = $_REQUEST["i_name"];
// 	getjson("select * from institute where Institute_Name = '".$iname."'");
// }

// else if ($_REQUEST['action']=='get_institute_filter'){
// 	getjson("SELECT institute.* FROM institute,Nmps where institute".".Permanent_ID = Nmps.Permanent_ID and Nmps.State ='".$_REQUEST['state']."'");
// }
else if($_REQUEST['action']=='get_village_filter'){
	getjson("SELECT Nmps".".Name_of_MP,Nmps.State,Nmps.District,Nmps.Gram_Panchayats,nodel_officer.Name_of_Nodal_Officer,institute.Institute_Name FROM Nmps,nodel_officer,institute where Nmps.Permanent_ID = nodel_officer.Permanent_ID and Nmps.Permanent_ID = institute.Permanent_ID and Nmps.State = '".$_REQUEST['state']."' order by Gram_Panchayats");		
}

// new
else if ($_REQUEST['action']=='filter_state_list') {
	getjson("SELECT distinct State FROM Nmps");
}

// new
else if ($_REQUEST['action']=='filter_mps') {
	getjson("SELECT * FROM Nmps where State = '".$_REQUEST['state']."' order by Name_of_MP");
}

// new
else if ($_REQUEST['action']=='insert_solution') {
	getjson("insert into smnindv9_sagy.solution_tab (solution_tab.problem_id,solution_tab.solution,solution_tab.user_name,solution_tab.user_id) values (".$_REQUEST['probid'].",'".$_REQUEST['addedsol']."','".$_REQUEST['username']."',".$_REQUEST['user_id'].")");
}

// new
// else if ($_REQUEST['action']=='get_institute') {
// 	getjson("select * from institute");
// }

// new 
else if ($_REQUEST['action']=='get_nodel_popup') {
	getjson("select nodel_officer.Name_of_Nodal_Officer,nodel_officer.Email_of_Nodal_Officer,Nmps.Gram_Panchayats,nodel_officer.nodel_current_work from nodel_officer,Nmps where nodel_officer.Permanent_ID = Nmps.Permanent_ID and nodel_officer.Name_of_Nodal_Officer = '".$_REQUEST['n_name']."'");
}

// new
else if($_REQUEST['action']=='get_nodel_officer'){
	getjson("SELECT nodel_officer".".Name_of_Nodal_Officer,Nmps.Gram_Panchayats from nodel_officer,Nmps where nodel_officer.Permanent_ID = Nmps.Permanent_ID order by Name_of_Nodal_Officer");
}

// new
else if($_REQUEST['action']=='get_problem_filter'){
	getjson("select * from smnindv9_sagy.problem_statement_village where problem_statement_village.catagory = '".$_REQUEST['catagory']."'");
}

else if($_REQUEST['action']=='get_solution'){
	getjson("select * from solution_tab where problem_id=".$_REQUEST["problem_id"]);
}

else if($_REQUEST['action']=='get_spinner_village'){
	getjson("select Gram_Panchayats from Nmps");
}

else if ($_REQUEST['action']=='register_user') {
	if(isset($_REQUEST["email"]))
	{
	getinsertjson("INSERT into aadhar_master (name,phone_no,village,Email) values ('".$_REQUEST['name']."','".$_REQUEST['phone_no']."','".$_REQUEST['village']."','".$_REQUEST['email']."')");
	}
	else{
	getinsertjson("INSERT into aadhar_master (name,phone_no,village,Email) values ('".$_REQUEST['name']."','".$_REQUEST['phone_no']."','".$_REQUEST['village']."')");	
	}
}

//change
else if($_REQUEST['action']=='insert_problem_statement'){
	getinsertjson("INSERT INTO problem_statement_village(statement,village_name,catagory,contact_us) VALUES ('".$_REQUEST['statement']."','".$_REQUEST['village_name']."','".$_REQUEST['catagory']."','".$_REQUEST['contact']."')");
}

else if($_REQUEST['action']=='get_solution'){
	getjson("select * from solution_tab where problem_id=".$_REQUEST['problem_id']);
}

else if($_REQUEST['action']=='get_solution_user'){
	getjson("select * from aadhar_master where user_id=".$_REQUEST['user_id']);
}

else if($_REQUEST['phone_no']!=""){
	$phone=$_REQUEST['phone_no'];
	$qry="select * from aadhar_master where phone_no='".$phone."'";
	getjson($qry);
}

else if($_REQUEST['action']=='scheme_village')
{
	if(isset($_REQUEST['uid']))
	{
		getjson("select scheme.* from scheme, scheme_village_relation, aadhar_master where  aadhar_master.pin_code = scheme_village_relation.village_pincode and scheme.scheme_id = scheme_village_relation.scheme_id and  aadhar_master.aadhar_number	= '".$_REQUEST['uid']."'");	
	}
	else
	{
		getjson("select * from scheme");		
	}
		//echo "select * from itr where srno='".$_REQUEST['id']."'";

	
}
else if($_REQUEST['action'] == 'institution')
{
	if(isset($_REQUEST['village_id']))
	{
		getjson("select * from institution where village_id='".$_REQUEST['i_id']."'");
	}
	else
	{
		getjson("select * from institution");
	}

}
else if($_REQUEST['action']=='get_village')
{


	//echo "select * from itr where srno='".$_REQUEST['id']."'";
	/*if(isset($_REQUEST['uid']))
	{

		getjson("select village.*,mps.name from mps,village,aadhar_master where  aadhar_master.pin_code = village.pin_code and mps.mp_id=village.mp_id and aadhar_number ='".$_REQUEST['uid']."'");
	}
	elseif ($_REQUEST['action1']=='get_village_name') {
		getjson("select village_id,vname from village");
	}
	else
	{
		getjson("select mps.name,village.* from village,mps where mps.mp_id = village.mp_id");
	}*/

	getjson("SELECT Nmps".".Name_of_MP,Nmps.State,Nmps.District,Nmps.Gram_Panchayats,nodel_officer.Name_of_Nodal_Officer,institute.Institute_Name FROM Nmps,nodel_officer,institute where Nmps.Permanent_ID = nodel_officer.Permanent_ID and Nmps.Permanent_ID = institute.Permanent_ID order by Nmps.Gram_Panchayats");	
	
}
else if($_REQUEST['action']=='get_complain')	
{
	if($_REQUEST['user']=='user'){
		getjson("select * from complain where user_id=".$_REQUEST['uid']);
	}
	else{
		getjson("select * from complain where  complain.village_id  = (select village.village_id from village where village.mp_id = ".$_REQUEST['mp_id']." LIMIT 1)");	
	}
}

else if($_REQUEST['action']=='insert_complain')
{

	$time = date('d-m-Y H:i:s');

// echo $time."date";

	if($_REQUEST['complain_image'] != "")
	{

		$target_dir = "../uploads/";
		$target_file = $target_dir . basename($_FILES["image"]["name"]);
		move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);	


	$mp_id_query="select Permanent_ID from Nmps where Gram_Panchayats ='".$_REQUEST['Gram_Panchayats']."'";
	$obj=new DB_Connect;
	$result=$obj->select($mp_id_query);
	$row=mysqli_fetch_array($result);
	$mp_id=$row['Permanent_ID'];	

	getinsertjson("INSERT INTO `complain`(`priority`, `user_id`, `complain_desc`, `Gram_Panchayats`, `complain_time`, `complain_image`, `complain_status`, `officer_id`) values(".$_REQUEST['priority'].",".$_REQUEST['user_id'].",'".$_REQUEST['complain_desc']."','".$_REQUEST['Gram_Panchayats']."','".$time."','".$_REQUEST['complain_image']."','".$_REQUEST['complain_status']."','".$mp_id."')");
	}

	$mp_id_query="select Permanent_ID from Nmps where Gram_Panchayats ='".$_REQUEST['Gram_Panchayats']."'";
	$obj=new DB_Connect;
	$result=$obj->select($mp_id_query);
	$row=mysqli_fetch_array($result);
	$mp_id=$row['Permanent_ID'];	

	getinsertjson("INSERT INTO `complain`(`priority`, `user_id`, `complain_desc`, `Gram_Panchayats`, `complain_time`, `complain_status`, `officer_id`) values(".$_REQUEST['priority'].",".$_REQUEST['user_id'].",'".$_REQUEST['complain_desc']."','".$_REQUEST['Gram_Panchayats']."','".$time."','".$_REQUEST['complain_status']."','".$mp_id."')");
	
}
else if($_REQUEST['action']=='get_mps')
{
	if(isset($_REQUEST['uid']))
	{
		getjson("select mps.*,village.vname as village_name  from mps,village,aadhar_master where mps.mp_id = village.mp_id and aadhar_master.pin_code = village.pin_code and aadhar_master.aadhar_number = '".$_REQUEST['uid']."'");	
	}
	else{
		getjson("SELECT * FROM Nmps order by Name_of_MP");		
	}

}else if($_REQUEST['action']=='login'){
	// select nodel_officer.*,Nmps.Gram_Panchayats from nodel_officer,Nmps where nodel_uname='mune' and password='9596' and Nmps.Permanent_ID = nodel_officer.Permanent_ID
	getjson("select nodel_officer.*,Nmps.Gram_Panchayats from nodel_officer,Nmps where nodel_uname='".$_REQUEST['uid']."' and password='".$_REQUEST['password']."' and Nmps.Permanent_ID = nodel_officer.Permanent_ID");	
}
else if($_REQUEST['action']=='get_allnames')
	{	//echo "select * from itr where srno='".$_REQUEST['id']."'";
getjson("select * from names order by Name");

}
else if($_REQUEST['action']=='get_feedback')
	{	//echo "select * from itr where srno='".$_REQUEST['id']."'";
getjson("select user_feed_back.*,scheme.name as scheme_id from user_feed_back,scheme  where user_feed_back.scheme_id = scheme.scheme_id and mp_id = '".$_REQUEST['user_id']."'");

}else if($_REQUEST['action']=='get_all_feedback')
	{	//echo "select * from itr where srno='".$_REQUEST['id']."'";
	getjson("select * from user_feed_back");
	
}
else if($_REQUEST['action']=='insert_feedback')	
{
	$obj1=new DB_Connect;
	$v_query="select village.village_id from village,aadhar_master where aadhar_master.pin_code = village.pin_code and aadhar_master.aadhar_number='".$_REQUEST['user_id']."'";
	$result=$obj1->select($v_query);
	$row=mysqli_fetch_array($result);
	$v_id =$row['village_id'];

	$mp_id_query="select village.mp_id from village where village.village_id =".$v_id;
	$result=$obj1->select($mp_id_query);
	$row=mysqli_fetch_array($result);
	$mp_id=$row['mp_id'];
	getinsertjson("insert into user_feed_back(user_id,scheme_id,mp_id,village_id,feed_desc,point) values(".$_REQUEST['user_id'].",".$_REQUEST['scheme_id'].",".$mp_id.",".$v_id.",'".$_REQUEST['feed_desc']."',".$_REQUEST['point'].")");
	// getinsertjson("insert into user_feed_back(user_id,scheme_id,mp_id,village_id,feed_desc,point,point_string) values('".$_REQUEST['user_id']."','".$_REQUEST['scheme_id']."','','','".$_REQUEST['feed_desc']."','".$_REQUEST['point']."','".$_REQUEST['point_string']."')");
}
else if($_REQUEST["action"]=="insert_name")
{
	$query="insert into names values ('','".$_REQUEST["name"]."','".$_REQUEST["meaning"]."','".$_REQUEST["rashi"]."','".$_REQUEST["category"]."','".$_REQUEST["gender"]."')";
	getinsertjson($query);
}

else if($_REQUEST['action']=='get_namesrandom')
{
		//echo "select * from itr where srno='".$_REQUEST['id']."'";
	$query="SELECT * FROM names ORDER BY RAND() LIMIT 10";
	getjson($query);
	
}else if($_REQUEST['action']=='aadhar_number')
{
		//echo "select * from itr where srno='".$_REQUEST['id']."'";
	$query="select phone_no from aadhar_master where aadhar_number='".$_REQUEST['aadhar_number']."'";
		//getjson($query);
	echo '7069526526';
}else if($_REQUEST['action']=='get_achivement'){
	
	getjson("SELECT * FROM  acheivement");
}
else if($_REQUEST['action']=='insert_achivement'){
	
	if($_REQUEST['imagename'] != "")
	{
		$target_dir = "../uploads/";
		$target_file = $target_dir . basename($_FILES["image"]["name"]);
		move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);	
	}

	$time = date('d-m-Y H:i:s');	

	getinsertjson("insert into acheivement (`title`,`desc`,`imagename`,`datetime`,`like_count`) values ('".$_REQUEST['title']."','".$_REQUEST['desc']."','".$_REQUEST['imagename']."','".$time."',".$_REQUEST['like_count'].")");
}
else if($_REQUEST['action']=='get_complain_final'){

	$duration =0;
	$village_id ="";
	$query ="select village_id from mps where mp_id='".$_REQUEST['uid']."'";
	$obj=new DB_Connect;
	$result=$obj->select($query);

	$row = mysqli_fetch_array($result);
	if($_REQUEST['type']=='mps')
	{

		$duration =14;
	}
	else if ($_REQUEST['type']=='state officer')
	{
		$duration =7;
	}
	else if($_REQUEST['type']=='nodal officer')
	{


		$duration =0;

	}


	$query="select *  from complain where complain_id in (SELECT complain.complain_id FROM mps,complain where complain.village = mps.village_id and mps.village_id = '".$row[0]."' and  DATEDIFF(CURDATE(),STR_TO_DATE(complain.complain_time, '%d-%m-%Y %H:%i:%s')) > ".$duration." group by complain.complain_id)";
	echo getjson($query);
}
else if($_REQUEST['action']=='get_walloffame'){
	getjson("select mps.name,mps.gender,mps.score,mps.mp_img,village.vname from mps,village where mps.mp_id= village.mp_id");
}else if($_REQUEST['action']=='ranking'){
	getjson("select sum(user_feed_back.point)/COUNT(*) AS score ,village_id,vname  from user_feed_back group by user_feed_back.village_id order by sum(user_feed_back.point)/COUNT(*) desc");
}else if($_REQUEST['action']=='get_problem'){
	getjson("SELECT * FROM problem_statement_village");
}


	/*if($_REQUEST['action']=='subcategory')
	{
		//echo "select * from itr where srno='".$_REQUEST['id']."'";
	getsubcategory("select * from subcategory where Category='".$_REQUEST['category']."'");
	
	}
	if($_REQUEST['action']=='formula')
	{
		//echo "select * from itr where srno='".$_REQUEST['id']."'";
	getformula("select * from formula where category='".$_REQUEST['category']."'");
	
	}
	*/

	function getjson($query)
	{
		// echo $query;
		$response=array();
		$product = array();
		$response["data"]= array();
		$obj=new DB_Connect;
		// mysqli_set_charset($obj->$con1,"utf8");
		$result=$obj->select($query);
		$fields_num = mysqli_num_fields($result);
		while($row=mysqli_fetch_array($result))
		{
			for($i=0;$i<$fields_num;$i++)
			{
				$product[mysqli_field_name($result,$i)]= htmlspecialchars(str_replace("*","'",$row[$i]));
			}

			array_push($response["data"], $product);
		}


		echo str_replace('\/','/',json_encode($response));
	}

	function mysqli_field_name($result, $field_offset)
	{
		$properties = mysqli_fetch_field_direct($result, $field_offset);
		return is_object($properties) ? $properties->name : null;
	}

	function getinsertjson($query)
	{
		$response["data"]= array();
		$data= array();
		$obj=new DB_Connect;
		if($obj->insert($query))
		{
			$data["value"]="valid";	  
			array_push($response["data"], $data);
		}
		else{
			$data["value"]="ivalid";	  
			array_push($response["data"], $data);
		}
		echo str_replace('\/','/',json_encode($response));
	}

  /*function getsubcategory($query)
  {
		
	
  $response=array();
	  $product = array();
	  $response["data"]= array();
	  $obj=new DB_Connect;
	  $result=$obj->select($query);
	  $fields_num = mysql_num_fields($result);
	  while($row=mysql_fetch_array($result))
	  {
		  for($i=0;$i<$fields_num;$i++)
		  {
			  $product[mysql_field_name($result,$i)]= htmlspecialchars(str_replace("*","'",$row[$i]));
		  }
		   
		  array_push($response["data"], $product);
	  }
	  
	  
	echo str_replace('\/','/',json_encode($response));
  }
function getformula($query)
  {
		
	
  $response=array();
	  $product = array();
	  $response["data"]= array();
	  $obj=new DB_Connect;
	  $result=$obj->select($query);
	  $fields_num = mysql_num_fields($result);
	  while($row=mysql_fetch_array($result))
	  {
		  for($i=0;$i<$fields_num;$i++)
		  {
			  $product[mysql_field_name($result,$i)]= htmlspecialchars(str_replace("*","'",$row[$i]));
		  }
		   
		  array_push($response["data"], $product);
	  }
	  
	  
	echo str_replace('\/','/',json_encode($response));
  }
*/
  ?>

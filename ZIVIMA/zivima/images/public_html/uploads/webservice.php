
<?php
error_reporting(0);
include("db_connect.php");

if($_REQUEST['action']=='scheme')
{
		//echo "select * from itr where srno='".$_REQUEST['id']."'";
	getjson("select * from scheme");
	
}

else if($_REQUEST['action']=='scheme_village')
{
	if(isset($_REQUEST['uid']))
	{
		getjson("select scheme.* from scheme, scheme_village, aadhar_master where  aadhar_master.village = scheme_village.village and scheme.scheme_id = scheme_village.scheme_id and  aadhar_master.aadhar_number	 ='".$_REQUEST['uid']."'");	
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
	if(isset($_REQUEST['uid']))
	{

		getjson("select village.* from village,aadhar_master where  aadhar_master.village = village.village_id and aadhar_number = '".$_REQUEST['uid']."'");
	}
	elseif ($_REQUEST['action1']=='get_village_name') {
		getjson("select village_id,vname from village");
	}
	else
	{
		getjson("select mps.name,village.* from village,mps where mps.mp_id = village.mp_id");
	}	
	
	
}
else if($_REQUEST['action']=='get_complain')	
{
	if($_REQUEST['user']=='user'){
		getjson("select * from complain where user_id=".$_REQUEST['uid']);
	}
	else{
		getjson("select * from complain where  complain.village_id  = (select village.village_id from village where village.mp_id = ".$_REQUEST['mp_id'].")");	
	}
}

else if($_REQUEST['action']=='insert_complain')
{

	$time = date('d-m-Y H:i:s');

		// echo $time."date";

	$mp_id_query="select village.mp_id from village where village.village_id =".$_REQUEST['village'];
	$obj=new DB_Connect;
	$result=$obj->select($mp_id_query);
	$row=mysqli_fetch_array($result);
	$mp_id=$row['mp_id'];		

	getinsertjson("INSERT INTO `complain`(`priority`, `user_id`, `complain_desc`, `village_id`, `complain_time`, `complain_image`, `complain_status`, `officer_id`) values(".$_REQUEST['priority'].",".$_REQUEST['user_id'].",'".$_REQUEST['complain_desc']."',".$_REQUEST['village'].",'".$time."','".$_REQUEST['complain_image']."','".$_REQUEST['complain_status']."',".$mp_id.")");    
	if($_REQUEST['complain_image'] != "")
	{

		$target_dir = "../uploads/";
		$target_file = $target_dir . basename($_FILES["image"]["name"]);
		move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);	
	}
	
}
else if($_REQUEST['action']=='get_mps')
{
	if(isset($_REQUEST['uid']))
	{
		getjson("select mps.*,village.name as village_name  from mps,village,aadhar_master where mps.village_id = village.village_id and aadhar_master.village = village.village_id and aadhar_master.aadhar_number = '".$_REQUEST['uid']."'");	
	}
	else{
		getjson("select * from mps");		
	}

	
	
	
}else if($_REQUEST['action']=='login'){

	getjson("select * from mps where user_id='".$_REQUEST['uid']."' and password='".$_REQUEST['password']."' and type='".$_REQUEST['type']."'");	
}
else if($_REQUEST['action']=='get_allnames')
	{	//echo "select * from itr where srno='".$_REQUEST['id']."'";
getjson("select * from names order by Name");

}
else if($_REQUEST['action']=='get_feedback')
	{	//echo "select * from itr where srno='".$_REQUEST['id']."'";
getjson("select user_feed_back.*,scheme.name as scheme_id from user_feed_back,scheme  where user_feed_back.scheme_id = scheme.scheme_id and user_id='".$_REQUEST['user_id']."'");

}else if($_REQUEST['action']=='get_all_feedback')
	{	//echo "select * from itr where srno='".$_REQUEST['id']."'";
	getjson("select * from user_feed_back");
	
}
else if($_REQUEST['action']=='insert_feedback')
{
	getinsertjson("insert into user_feed_back(user_id,scheme_id,mp_id,village_id,feed_desc,point,point_string) values('".$_REQUEST['user_id']."','".$_REQUEST['scheme_id']."','','','".$_REQUEST['feed_desc']."','".$_REQUEST['point']."','".$_REQUEST['point_string']."')");
	
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
else if($_REQUEST['aadhar_number']!=""){
	$aadhar=$_REQUEST['aadhar_number'];
	$qry="select phone_no,pin_code from aadhar_master where aadhar_number='$aadhar'";
	getjson($qry);
}
else if($_REQUEST['action']=='get_walloffame'){
	getjson("select mps.name,mps.gender,mps.score,mps.mp_img,village.vname from mps,village where mps.mp_id= village.mp_id");
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
		

		$response=array();
		$product = array();
		$response["data"]= array();
		$obj=new DB_Connect;
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

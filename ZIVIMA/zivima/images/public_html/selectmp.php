<html>
<head>
<title>
Add MPS
</title>

<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            {
                padding:0px;
                margin: 0px;
            }
            .nav a:hover
            {
                height: 100px;
                color:#734631;
                background: white;
                font-size:40px;
                font-family:calibri;
                text-decoration:none;
            }
            .nav
            {
                clear: both;
                padding:2%;
                background:#734631;

            }
            .nav a
            {
                
                color:white;
                padding:10px;
                font-size:30px;
                font-family:calibri;
                text-decoration:none;
            }
            .form
            {
                
                margin-top:1%;
            }
            .form input{
                height:30px;
                width:200%;
            }
            .sign
            {
                color:white;
                background:#11a286;
            }
            .head
            {
            }
            .head img
            {
                    margin-top: 20px;
                margin-bottom: 10px;
                margin-left:15%;; 
                float: left;
                height: 110px;
                width: 110px;
            }
            textArea{
                height:10px ;
                width:200%  ;
            }
            .sagy{
                float: right;
                width:1000px;
                margin-top:10px;
                height: 10px;
                height-line:100px;
                color:#53b852;
            }
            body{
                background:rgb(135,105,95);
            }
			</style>
</head>

<body>
     <center>
        <div class="head">
            <img src="images/logo.jpg">
            <marquee class="sagy"><h1>SANSAD ADARSH GRAM YOJNA</h1></marquee>
            <nav class="nav">
			    <a href="insert.html">Home</a> 
            
                <a href="adminselect.php">view admin</a> 
                <a href="selectmp.php">view MPs</a>
                <a href="nodalcrud.php">view Nodal officer</a>
                <a href="feedback.php">manage feedback</a>
                <a href="complain.php">view Complaint</a>
                

            </nav>
        </div>
      <div class="form">
    
<form action="insert.php" method="POST">
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
<input type="text" name="consituency">
</td>
</tr>
<tr>
<td>
scheme_id_string
</td>
<td>
<input type="text" name="scheme_id_string">
</td>
</tr>
<tr>
<td>
age
</td>
<td>
<input type="text" name="age">
</td>
</tr>
<tr>
<td>
gender
</td>
<td>
<input type="text" name="gender">
</td>
</tr>
<tr>
<td>
score
</td>
<td>
<input type="text" name="score" value="0" readonly>
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
	$qry="select * from mpinfo";
	$result=mysql_query($qry);
	echo"<table><tr><th>ID</th><th>Name</th><th>Village</th><th>consituency</th><th>scheme_id_string</th><th>age</th><th>gender</th><th>score</th><th>addhar_no</th><th>EDIT</th><th>DELETE</th></tr>";
	while($row=mysql_fetch_assoc($result))
	{
		echo"<tr><td>".$row['mp_id']."</td>";
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
	}
		echo"</table>";
?>
</body>
</html>
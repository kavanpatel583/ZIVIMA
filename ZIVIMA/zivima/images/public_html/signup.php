<html>
<head>
<style>
body{
	color:white;
	background:#384951;
}
input[type=text]:focus{
	opacity:0.9;			
}
table:focus{
	opacity:0.9;		
}
table:hover{
	opacity:0.9;	
}
table{
	opacity:0.4;
	background:black;
	margin:0px;
	padding:0px;
}
.body{
	margin-top:8%;
	margin-left:23%;
	height:75%;
	padding-top:150px;
	width:80%;
	background-image:url("images/logo.jpg");
	background-repeat:no-repeat;
}
table tr td{
	text-align:center;
	line-height:25px;
}
.demo
{
	
}
input
{
	height:25px;
	width:100%;
}
.sub
{
		background:#436b7e;
		color:white;
}
.input
{
	width:200px;
}
</style>
</head>
<body>
<div class="body">
<form action="signuppro.php" method="POST">
<center>
<table>
<tr>
<td colspan="2">
Register
</td>
</tr>
<tr>
<td>
Name
</td>
<td class="input">
<input type="text" name="name" />
</td>
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
<input type="submit" value="Register" class="sub" />
</td>
</tr>
</table>
</form>
</div>
</body>
</html>
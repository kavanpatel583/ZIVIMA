	<!DOCTYPE html>
	<html>
	<head>
		<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="shortcut icon" href="assets/ic_sagy.png">
		<title>Zivima</title>
		<style type="text/css">
		html {
			overflow:   scroll;
		}
		::-webkit-scrollbar {
			width: 0px;
			background: transparent; /* make scrollbar transparent */
		}
	</style>
</head>

<body>
<?php
session_start();
if(isset($_SESSION['email']))
{
}
else{
}?>
	<div id="index-banner" class="parallax-container">
		<div class="section no-pad-bot">
			<div class="container">
				<div class="row white-text ">					
					<table>
						<tr style="border-style: none;">
							<td style="height: 100px; width: 130px;"></td>				
							<td>All India Council For Technical Education</td>	
							<td>
							<?php
if(isset($_SESSION['email']))
{
	?>
							<a class="btn right waves-effect waves-light modal-trigger" href="loginModal.php" style="margin-left: 10px">Logout</a><?php
}
else{
	?>

							
							<?php
}
?>
</td>						
</td>						
						</tr>
						<tr style="border-style: none;">
							<td style="padding-left: 20px"></td>
							<td><blockquote><h4 class="white-text">ZIVIMA<br>ZILA VIKAS MANCH</h4></blockquote></td>
							<td><img class="right" src="assets/Emblem_of_India.png" height="100px"></td>
						</tr>
					</table>					
				</div>	

				<!-- modal -->
				<div id="loginModal" class="modal">
					<form action="login.php" method="POST">
						<div class="modal-content container">						

							<!-- <h4 class="header left"><b>Login</b></h4> -->
							<br>
							<table>
<tr style="border-style: none;">
<td rowspan="2" style="padding-top: 0px;padding-bottom: 50px;padding-right: 0px;padding-left: 0px;width: 200px;height: 203px;">
<img src="assets/user.svg" height="200" width="200">											
</td>									
<td style="padding-top: 0px; padding-bottom: 0px; padding-left: 20px;">
										
<div class="row grey-text text-darken-3 lighten-3" style="padding-top: 0px; padding-bottom: 0px">
<div class="row grey-text text-darken-3 lighten-3" style="padding-top: 0px; padding-bottom: 0px">
<div class="input-field">
<i class="material-icons prefix">ID</i>
													<input id="ID Institute" type="text" name="log_email" class="validate" required>
													<label for="ID Institute">ID Institute</label>
													<span class="helper-text" data-error="Invalid ID Institute" data-success="">										
													</span>
												</div>
											</div>
<div class="row grey-text text-darken-3 lighten-3" style="padding-top: 0px; padding-bottom: 0px">
												<div class="input-field">
													<i class="material-icons prefix">lock</i>
													<input id="password" type="password" name="password" class="validate" required pattern="[\d\w]{*,8}" title="8 character password">
													<label for="password">Password</label>
													<span class="helper-text" data-error="" data-success=''></span>
												</div>
											</div>

										</td>							
									</tr>								
								</table>								
							</div>
							<div class="modal-footer">
								<input type="submit" value="Login" name="login" class="btn-flat waves-effect waves-green">													</div>
						</form>									
					</div>

					<div id="regModal" class="modal">
						<form action="Register.php" method="POST">
							<div class="modal-content container">						
								<!-- <h4 class="header left"><b>Login</b></h4> -->
								<br>
								<table>
									<tr style="border-style: none;">
										<td rowspan="2" style="padding-top: 0px;padding-bottom: 50px;padding-right: 0px;padding-left: 0px;width: 200px;height: 203px;">

											<img src="assets/social-network.svg" height="200" width="200">											
										</td>									
<td style="padding-top: 0px; padding-bottom: 0px; padding-left: 20px;">

											<div class="input-field">
												<i class="material-icons prefix">location_city</i>
												<input id="institute_id" type="text" name="ini_id" class="validate" required pattern="[\d\w]{4,*}" title="You can only use (a-z, A-Z, 0-9)">
												<label for="institute_id">Institute Id</label>
												<span class="helper-text" data-error="" data-success=''></span>
											</div>
										</div>
<div class="row grey-text text-darken-3 lighten-3" style="padding-top: 0px; padding-bottom: 0px">
<div class="input-field">
<i class="material-icons prefix">location_city</i>
													<input id="Institute Name" type="text" name="inst_name" class="validate" required>
													<label for="Institute Name">Institute Name</label>
													<span class="helper-text" data-error="Invalid Institute Name" data-success="">										
													</span>
												</div>
											</div>
<div class="row grey-text text-darken-3 lighten-3" style="padding-top: 0px; padding-bottom: 0px">
<div class="input-field">
<i class="material-icons prefix">email</i>
<input id="email" type="email" name="reg_email" class="validate" required>
												<label for="email">Email</label>
												<span class="helper-text" data-error="Invalid Email" data-success="">										
</span>
</div>
</div>
<div class="input-field">
<i class="material-icons prefix">lock</i>
													<input id="password" type="password" name="password" class="validate" required pattern="[\d\w]{*,8}" title="8 character password">
													<label for="password">Password</label>
													<span class="helper-text" data-error="" data-success=''></span>
												</div>
											</div>
<div class="row grey-text text-darken-3 lighten-3" style="padding-top: 0px; padding-bottom: 0px">
											<div class="input-field">
<i class="material-icons prefix">phone</i>
												<input id="phone_no" type="tel" name="phone_no" class="validate" required maxlength="13" pattern="\d\d\d\d\d\d\d\d\d\d" title="please enter 10 digit phone number (0-9)">
												<label for="password">Phone Number</label>
												<span class="helper-text" data-error="invalid phone number" data-success=''></span>
											</div>
										</div>
									</td>							
								</tr>								
							</table>								
						</div>
						<div class="modal-footer">
							<input type="submit" value="Registration" name="reg" class="btn-flat waves-effect waves-green">							
						</div>
					</form>									
				</div>
				<!-- modal -->						

			</div>
		</div>
		<div class="parallax"><img src="assets/Village-Huts-02.jpg" alt="Unsplashed background img 1"></div>
	</div>

	<div class="section white">
		<!-- <div class="carousel">
			<img class="carousel-item" src="assets/1.jpg" style="width: 300px;"/>					
			<img class="carousel-item" src="assets/2.jpg" style="width: 300px;"/>					
			<img class="carousel-item" src="assets/3.jpg" style="width: 300px;"/>					
		</div> -->
		<div class="row container">						
			<h2 class="header">About ZIVIMA</h2>
			<p class="grey-text text-darken-3 lighten-3">All India Council for Technical Education (AICTE), Ministry of Human Resource Development, Govt. of
				India,launches ZIVIMA-Zila Vikas Manch </p>

			<p class="grey-text text-darken-3 lighten-3">IT+IT=IT,Prime Minister Narendra Modi devised an unusual equation to describe the future of the country. By this he meant “Information technology + Indian Talent = India Tomorrow”. The PM said the country needs to embrace technology in a more collective manner than in a piecemeal fashion. It also must be embraced by all sections of society for it to have real benefit.</p>

			<p class="grey-text text-darken-3 lighten-3">Embracing technology cant happen if only a few people are keen on it. The scale must be larger. So we are working on a project titled “ZIVIMA” that is Zilla Vikas Manch which is an initiative for the fulfillment of the vision of our honourable prime minister. ZIVIMA aims for the development of districts by collaborating district authorities, people of districts, educational institution and students. It facilitates district authorities to post district specific problems on portal so that university students can provide innovative solution to those problems.</p>
			<h5 class="header">Objectives of the Scheme</h5>
			<p class="grey-text text-darken-3 lighten-3">Zivima mainly aims communication with the district authorities,educational institutions and villagers</p>
			<h5 class="header">Theme of the Scheme</h5>
			<blockquote> <h4 class="header red-text text-lighten-3" style="font-style: italic;">India Today + Information Technology = India Tomorrow<h4></blockquote>
			
					<h5 class="header">Who Can Apply?</h5>
					<p class="grey-text text-darken-3 lighten-3">
						The Scheme cover all AICTE Approved Institutions who has done the remarkable work under the given
						theme.
					</p>
					<table>
						<tr style="border-bottom: 0px;">
							
							<td style="padding: 0px,0px,0px,0px;padding-left: 0px;padding-right: 0px;width: 10px;"><blockquote><img src="assets/pdf.svg" width="100" height="100"></blockquote></td>
							<td><a href="assets/instructions.pdf" class="grey-text text-darken-3 lighten-3"><h3>guidline PDF</h3></a></td>

						</tr>

						<tr style="border-bottom: 0px;">
							<td style="padding: 0px,0px,0px,0px;padding-left: 0px;padding-right: 0px;width: 50px;"><img src="assets/link.svg" width="100" height="100"></td>
							
							<td><a href="http://localhost/zivima/Institutes/index.php" class="grey-text text-darken-3 lighten-3"><h5>Click here to apply</h5></a></td>
						</tr>
					</table>
					
				</div>				
			</div>
			<div class="parallax-container">
				<div class="parallax"><img src="assets/Village-Huts-02.jpg"></div>
			</div>
			
			<!--JavaScript at end of body for optimized loading-->
			<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
			<script type="text/javascript" src="js/materialize.min.js"></script>				
			<script type="text/javascript">
				$(document).ready(function(){
					$('.sidenav').sidenav();
					$('.parallax').parallax();
					$('.carousel').carousel();
					$('select').formSelect();
					$('.collapsible').collapsible();
					$('.modal').modal();
				});
			</script>

		</body>
		</html>
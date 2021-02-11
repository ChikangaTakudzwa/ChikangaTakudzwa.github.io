<?php
	session_start();
	if(ISSET($_SESSION['login_id'])){
		header('location: home.php');
	}
	
	
	include 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		  <meta charset="utf-8" />
		  <title>Log Session -  Support Services </title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--===============================================================================================-->	
			<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
		<!--===============================================================================================-->	
			<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
		<!--===============================================================================================-->	
			<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="../css/util.css">
			<link rel="stylesheet" type="text/css" href="../css/main.css">
		<!--===============================================================================================-->
		  
		  <link rel = "stylesheet" type = "text/css" href = "../assets/css/bootstrap.min.css" />
		  <link rel = "stylesheet" type = "text/css" href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
		  <link rel = "stylesheet" type = "text/css" href = "../assets/css/style.css" />
		  <script src = "../assets/js/jquery-3.5.1.min.js"></script>
		  <script src = "../assets/js/bootstrap.min.js"></script>
		  
	</head>

<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('../images/doc1.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					<img src="../assets/img/logo_without_phrase.png" />
				</span>
				<div class="card">
					<div class="card-body">
						<div class="text-center">
							<h4>Admin</h4>
						</div>
						<div class="col-md-12">
							<div class="text-center mb-4" id="log_display"></div>
								<form id = "login-frm">
									<div id = "" class = "form-group">
									  	<label class = "control-label" >Username:</label>
									  	<input type = "text" name = "username" class = "form-control" required/>
									</div>
									<div id = "" class = "form-group">
										<label class = "control-label">Password:</label>
										<input type = "password" maxlength = "20" name = "password" class = "form-control" required/>
									</div>
									<center>
										<button type = "submit" class = "btn btn-primary btn-block" >Login <i class="fa fa-arrow-right"></i></button>
									</center>
									
									<hr/>								
										<a class="text-center" href="../index.php"><p>Staff Log</p></a>						
								</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-kit.js?v=2.0.7" type="text/javascript"></script>
  
  
  <!--===============================================================================================-->
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/daterangepicker/moment.min.js"></script>
	<script src="../vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../js/main.js"></script>
	
	<script src = "../assets/js/jquery.js"></script>
	<script src = "../assets/js/bootstrap.js"></script>
	
	
  <script>
		$(document).ready(function(){
			$('#login-frm').submit(function(e){
				e.preventDefault();
				$.ajax({
					url:'login.php',
					method:'POST',
					data:$(this).serialize(),
					error:err=>{
						console.log(err)
					},
					success:function(resp){
						if(resp== true){
							location.replace('employee.php')
						}
					}
				})
			})
		})
	</script>
	
</body>
</html>
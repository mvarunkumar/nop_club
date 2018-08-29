<?php

session_start();
if(isset($_SESSION['nopian'])){
	header("Location:../home");
}
elseif (isset($_SESSION['lecturer'])) {
	header("Location:../chat");
}

?>
<html>
<head>
	<title>simple startup</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<script type="text/javascript" src="../script/jquery.js"></script>
	<script>
		$(function(){
			$("#lec_login").hide();
			$("#click2").hide();
			$("#mail_data").hide();
			$("#click").on("click", function(){
				$("#in_box,#lec_login").slideToggle(300);
				$("#click2").show(300);
				$("#click").hide(300);
			})
			$("#click2").on("click", function(){
				$("#in_box,#lec_login").slideToggle(300);
				$("#click").show(300);
				$("#click2").hide(300);
			})
			$("#mail").click(function(){
				$("#mail").fadeOut(100);
				$("#mail_data").fadeIn(500);
			})

		})
	</script>
	<style type="text/css">
		body{
			background-image: url('bg.jpg');
			background-size: 100% 100%;
		}
		.box{
			border: dashed 1px white;
			margin-top: 50px;
			padding-top:30px;	
			padding-bottom:30px;	
			background: rgba(0,0,0,0.5);
			border-top-right-radius: 100px;
			border-top-left-radius: 100px;

		}
		.in_box{
			 border-radius: 20px;			
			 border-radius: 20px;			
		     background-color: rgba(255,255,255,0.2);
			 margin-top:30px;
			 padding-top: 10px;
			 padding-bottom: 10px;
			 margin-bottom:10px;
		}
		b{
			font-size: 25px;
			color: white;
			border-top: 20px;
		}
		h3,h4{
			color: white;
		}
	</style>
</head>
<body>
	<div class="container box col-sm-6 col-sm-offset-3">

		<center>
			<img src="nop.png" height="100px" width="200px">
		</center>

		<form action="stu_login.php" method="post" class="form-group">
			<span class="container in_box col-sm-8 col-sm-offset-2" id="in_box">
				<center>
					<b>Login Panel - Student</b>
				</center>
				<div class="input-group">
					<span class="input-group-addon">Username</span> 
					<input type="text" name="uname" class="form-control">
				</div>
				<div class="input-group">
					<span class="input-group-addon">Password </span>
					<input type="password" name="pass" class="form-control">
				</div><br>
				<center><input type="submit" value="Let me IN" name="ok" class="btn btn-success btn-sm"></center>
			</span>
		</form>

		<span class="col-sm-8 col-sm-offset-2">
			<center>
				<i style="color: red;">Haven't Registered?<a href="../registration">Register Now</a></i>
				<h3 id="mail">Forgot Password</h3>
				<h4 id="mail_data">Mail your register number using your registered MailId to :
				<a href="mailto:varun@bharathnop.ml">varun@bharathnop.ml</a>
				</h4>			
				<p id="click">
					<input type="button" value="Lecturer Login" class="btn btn-warning">
				</p>
				<p id="click2">		
					<input type="button" value="Student Login" class="btn btn-success">
				</p>
			</center>

			<form action="lec_login.php" method="post" class="form-group">
				<span class="lec_box" id="lec_login">
					<center>
						<b>Login Panel - Faculty</b>
					</center>
					<div class="input-group">
						<span class="input-group-addon">Username</span> 
						<input type="text" name="uname" class="form-control">
					</div>
					<div class="input-group">
						<span class="input-group-addon">Password </span>
						<input type="password" name="pass" class="form-control">
					</div><br>
					<center><input type="submit" value="Validate" name="yes" class="btn btn-success btn-sm"></center>
				</span>
			</form>			
		</span>
	</div>	

</body>
</html>
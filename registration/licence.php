<?php
if(isset($_POST['ok']))
{

include '../database.php';

$key = $_POST['key'];

$total = mysqli_query($con,"select reg_key from licence WHERE reg_key = '$key';");

if(@mysqli_num_rows($total) == 0){
	echo ("<h2>"."You are not a FACULTY"."</h2>");
	echo "You are redirecting to student registration page";
	header("refresh:4; url=index.html");
}
else{
	session_start();
	$_SESSION['licenced'] = $key;
	alert("Welcome to NOP Faculty");
	header("refresh:2; url=lecturer.php");
}

}	

?>
<html>
<head>
	<title>Enter Licence Key</title>
</head>
<body>
<br>
 <form action="<?php $_PHP_SELF ?>" method="post">
Enter Licence Key :
<input type="password" name="key"> 
<input type="submit" value="submit" name="ok"> 
</form>
</body>
</html>

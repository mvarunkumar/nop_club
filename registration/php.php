<?php
if(isset($_POST['ok']))
{

include '../database.php';
$key = $_POST['key'];

$total = mysqli_query($con,"select key from licence WHERE key = '$key';");

$pass = mysqli_num_rows($total);

if(mysqli_num_rows($total) == 0){
	echo ("<h2>"."You are not a FACULTY"."</h2>");
	echo "You are redirecting to student registration page";
	// header("refresh:4; url=index.html");
}
else{
	echo"Welcome to NOP Faculty";
		header("refresh:2; url=lecturer.php");
}

}	
else{
	echo "thusss...";
}

?>
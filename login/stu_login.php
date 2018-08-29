<?php
	if(isset($_POST['ok']))
{

include '../database.php';

$uname = $_POST['uname'];
$pass = $_POST['pass'];

$result =  mysqli_query($con,"select * from nop_test WHERE register_no = '$uname' and pass = '$pass';");

$row = mysqli_fetch_array($result);

if ($row == 0) {
	echo "thusss....";
	header("refresh:3; url=index.php");
}
else{
    $sql = "select id,name,email from nop_test where register_no='$uname' && pass='$pass'";

    $test = mysqli_query($con,$sql);
    $val = mysqli_query($con,$sql);
    $value = mysqli_query($con,$sql);

    $id = $test->fetch_object()->id;
    $name = $val->fetch_object()->name;
    $email = $value->fetch_object()->email;

	session_start();
	$check = "yes";
	$_SESSION['nopian'] = $check;
	$_SESSION['id'] = $id;
	$_SESSION['name'] = $name;
    $_SESSION['uname'] = $uname;
    $_SESSION['email'] = $email;

	echo ("success '<br>'Connecting to your portal...");
	// header("refresh:3; url=../home/getin");
}
}
else{
	echo "again main thussss... ";
}
?>
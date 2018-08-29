<?php

include '../database.php';

if (!$con) {
	echo 'no data&base is here!!';
}

session_start();

if (isset($_SESSION["lecturer"])) {

$value = 1;

$id = $_SESSION['id'];

$msg = $_POST['message'];

$uname = $_SESSION['uname'];

$dep = $_SESSION['department'];

$sql = "insert into chat (value,id,message,uname,department) value ('$value','$id','$msg','$uname','$dep')";

header("Location:lecturer.php"); 

}

elseif (isset($_SESSION['nopian'])) {

$value = 0;

$id = $_SESSION['id'];

$msg = $_POST['msg'];

$msg2 = $_POST['msg2'];

$uname = $_SESSION['uname'];

$sql = "insert into chat (value,id,message,uname,response) value ('$value','$id','$msg','$uname','$msg2')";

header("Location:nopian.php"); 

}
else{
	echo"Problem with SESSIONS!!!!!!!";
}

if(!mysqli_query($con,$sql)){
	echo "msg not sent";
}

?>
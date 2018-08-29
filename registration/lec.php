<?php
include '../database.php';

if (!$con) {
   echo 'connection error!!!'; 
}

$name = $_POST['name'];
$uname = $_POST['uname'];
$pass = $_POST['pass'];
$department = $_POST['department'];
$email = $_POST['email'];
$contact = $_POST['contact'];

$sql = "insert into  lecturer (name,uname,pass,department,email,contact) values ('$name','$uname','$pass','$department','$email','$contact')";

if (!mysqli_query($con,$sql)) {
   echo ("ayyyooo...!!!failed to load<br>");
   echo ("Your Registration number already exists<br>");
   echo "To update your details contact : 9515792944 , mailID : varun@bharathnop.ml";
}
else{
    echo ("success.<br>");
    echo "you are redirecting.......";
    header("refresh:5; url=../");

}








?>
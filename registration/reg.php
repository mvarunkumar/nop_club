<?php
$con = mysqli_connect('localhost','root','');

if (!$con) {
   echo 'connection error!!!'; 
}
if (!mysqli_select_db($con,'test')) {
    echo "no database selected";
}

$name = $_POST['name'];
$register_no = $_POST['register_no'];
$pass = $_POST['pass'];
$year = $_POST['year'];
$section = $_POST['section'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$contact = $_POST['contact'];

$sql = "insert into  nop_test (name,register_no,pass,year,section,email,dob,contact) values ('$name','$register_no','$pass','$year','$section','$email','$dob','$contact')";



if (!mysqli_query($con,$sql)) {
   echo ("ayyyooo...!!!failed to load<br>");
   echo ("Possible reason:Your Registration number already exists<br>");
   echo "To update your details contact : 9515792944 , mailID : varun@bharathnop.ml";
   
}
else{
    echo ("success.<br>");
    echo "you are redirecting.......";
    echo("if not <a href='../temp.php'>Click Here!!</a>");
    header("refresh:2; url=../temp.php");

}








?>
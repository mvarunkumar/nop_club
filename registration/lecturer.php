<?php

session_start();

if (!isset($_SESSION['licenced'])) {
header("Location:licence.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Welcome Faculty</title>
</head>
<body bgcolor="#93ffc2">
<link rel="stylesheet" type="text/css" href="reg.css">
    <img src="bg.png" class="assasin">
<form action="lec.php" method="post">
  <br>
	<img src="pro.png" height="200px" width="200px"><br><br>
  <p class="color">Name : 
    <input type="text" name="name" placeholder="Drop your name here.." size="25" required></p>
  <p class="color">Username :
    <input type="text" name="uname" placeholder="Choose your username.. " size="30" required></p>
     <p class="color">Password :
    <input type="password" name="pass" placeholder="set your password" size="30" required></p>
<p class="color">I am from   <select name="department">
    <option value="Maths">MATHEMATICS</option>
    <option value="Physics">PHYSICS</option>    
    <option value="Chemistry">CHEMISTRY</option>
    <option value="Beee">BEEE</option>
    <option value="English">ENGLISH</option>
    <option value="Graphics">ENGINEERING GRAPHICS</option>
    <option value="FOCP">FOCP</option>
    <option value="Yoga">YOGA</option>
    <option value="French">FRENCH</option>    
    <option value="Others">Other</option>
  </select> Department
  </p>    
  <p class="color">Email : 
    <input type="email" name="email" placeholder="Your Mail ID" size="30" required>
  </p>
  <p class="color">Your Contact :
    <input type="tel" name="contact" placeholder="Telephone number" required>
  </p>
  <br>
  <img src="line.png">
  <input type="submit" value="Register" class="submit">
  <img src="line.png">
  <br>
  <br>
</form>
</body>
</html>
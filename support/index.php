<?php
session_start();
if(!isset($_SESSION['lecturer'])){
	header("Location:../index.html");
}
?>

<html>
<head>
	<title>Support roOM</title>
</head>
<body>
<?php  echo $_SESSION['department']; 
       echo $_SESSION['email']; 
?>
</body>
</html>
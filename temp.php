  <link rel="stylesheet" type="text/css" href="bootstrap.css">

<?php  
session_start();

if ( !isset ($_SESSION['nopian'])) {
  header("Location:login");
};

$conn = mysqli_connect('localhost','root','','test'); 
if(! $conn ) 
{ 
  die('Could not connect: ' . mysql_error()); 
} 
$sql = 'SELECT *
        FROM nop_test'; 
 
$retval = mysqli_query( $conn ,$sql); 

if(! $retval ) 
{ 
  die('Could not get data: ' . mysql_error()); 
} 

echo "<table class='table table-hover' > ";

echo "<thead>";
echo "<tr>";

echo "<td>"."NOP ID"."</td>";
echo "<td>"."Nopian"."</td>";
echo "<td>"."Register number"."</td>";
echo "<td>"."Section"."</td>";

echo"</tr>";
echo "</thead>";

while($row = mysqli_fetch_array($retval)) 
{ 
	echo "<tr>";
    echo "<td>"."{$row[0]}"."</td> ";
    echo "<td>"."{$row[1]} "."</td> ";
    echo "<td>"."{$row[2]}"."</td> "; 
    echo  "<td>"."{$row[5]}"."</td> ";
     echo "</tr>";     
        } 
echo "<br>";


mysqli_close($conn); 
?>

<html>
<head>
  <title>list of nopians</title>
</head>
<body onload="mogu()">
<a href="logout.php" class="btn btn-danger btn-lg" style="position:fixed; bottom:0; margin-left:30%;">LOGOUT</a>
<script type="text/javascript">
function mogu() {
  alert("Come here on Monday to access your portal");
  alert("Note your NOP ID to attend the test");
}
</script>
</body>
</html>
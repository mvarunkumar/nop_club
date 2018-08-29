
<?php

include "../database.php";

$sql = 'SELECT * FROM chat';

session_start();

$total = mysqli_query($con,$sql);

$nums = mysqli_num_rows($total);

$data = mysqli_fetch_array($total);

// for($i=0; $i<=$data; $i++){
// 	echo "string";
// }

echo($data['id']);

?>
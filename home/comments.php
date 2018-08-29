<style type="text/css">
div{
	background-color: #CCCCCC;
	margin: 10px 0 10px 0px;
	border-radius: 10px;
}
n{
	color: blue;
	font-size: 25px;
	padding-left: 15px;
}
i{  
	 font-size: 20px;
	padding-left: 19px;

}
</style>

<?php

include '../database.php';

$sql = 'SELECT * FROM comment';

$total = mysqli_query($con,$sql);

if (mysqli_num_rows($total) > 0) {
	
	while ($row = mysqli_fetch_array($total)) {
	echo "<div>";
		echo "<n>".$row['name']."</n>"."(".$row['id'].")"."<br>";
		echo "<i>".$row['comment']."</i>"."<br>";
		echo "<br>";
	echo "</div>";
		
}
	
			
		
}

else{
	echo "your chat is waiting for you...go on rock";
}


?>
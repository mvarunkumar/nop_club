<html>
<head>
	<title>Lets's Chat</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
</html>

<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<style type="text/css">
/* i for student */
i{
	color: black;
	float: right;
	background-color: #ffe2aa;
	padding: 5px 20px 5px 10px;
	border-top-left-radius: 20px;
	font-size: 20px;
}

b{
	float: right;
	border-bottom: solid #ffe2aa 6px;
	padding:10px 10px 0 5px;
}

/*t for faculty team */
t{
	border-left: 6px solid red;
    background-color: lightgrey;
	color: black;
    padding: 5px 20px 5px 10px;
    border-bottom-right-radius: 20px;
	font-size: 20px;
	margin-top:20px;
}

dep{
	border-left: 6px solid red;
	border-top: 3px solid red;
    border-top-right-radius: 40px;
	padding: 5px 20px 20px 10px;
	font-size: 20px;
}

/*Center Response */
cent{
	background-color: yellow;
	padding:10px 10px 10px 10px;
	border-radius: 20px 20px 20px 20px;
	border-right: black solid 4px;
}

cent:hover{
	background-color:black;
	color: white !important;
	border: 5px dashed;
	border-radius: 0px 0px 0px 0px;
	font-style: italic;																											
	-webkit-transition: background-color 1s,color 1s; /* For Safari 3.1 to 6.0 */
	transition: background-color 1s,color 1s;
}
</style>

<?php

include "../database.php";

$sql = 'SELECT * FROM chat order by num asc';

session_start();

$total = mysqli_query($con,$sql);

if (@mysqli_num_rows($total) > 0) {
	
	while ($row = mysqli_fetch_array($total)) {

		if ($row['value'] == 1) {
		echo "<br>";
		echo("<dep>".$row['department']."</dep>"."<br><br>"."<t>".$row['message']."</t>");//Lecturer message
		echo "<br>";
		}

		else{
			if(empty($row['response'])){//Feeling is first
				echo "<br>";
				echo  ("<i>".$row['message']."</i>"."<b>".$row['id']."</b>");//Nopian message
				echo "<br>";
			}
			else{
				echo ("<br>"."<center>"."<cent>".$row['id']." says , ".$row['response']."</cent>"."</center>");//Response
			}
		}

	}
		echo ("<div id='last'>");
}

else{
	die("<div class='jumbotron'>"."<h2>"."<center>"."No Chat Data is found!! Rock On...");
}

?>
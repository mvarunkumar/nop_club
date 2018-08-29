<?php
session_start();
if(!isset($_SESSION['nopian'])){
	header("Location:../");
}
?>
<html>
<head>
	<title>Suggestion page</title>
  <link rel="stylesheet" type="text/css" href="../bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css.css">
  <script type="text/javascript" src="../../script/jquery.js"></script>
  <script type="text/javascript">
  	$(document).ready(function(){
  		
  	})
  </script>
</head>
<body background="back.jpg"> 
<div class="sug_form">  
	<div class="container toolbar"> 		
	   <center>
	   	<h1>Suggestion Page</h1>
	   </center>
    </div> 
	<div class="rules">
      <p class="head">Before Submitting the Form Read these...</p>	
      <ul type="circle">
      	<li>Here you can send suggestions for the improvisation of the Club</li>
      	<li>Can send the limitations that you found in the club</li>
      	<li>Can raise your complaints about your Faculty</li>
      	<li>Share any problems that you are facing in our University</li>
      </ul>
    </div>
</div>

<form action="reg.php" method="post" class="form-group col-sm-8 col-sm-offset-1">
    	<p class="form_heading"><img src="smile.png" height="30px" width="30px"> Lets Donate a Suggestion...</p>
    	<div class="form-group">
    		  <p style="font-size:15px;">Find your Category that you want to Suggest us --> </p>
    			<select name="category" class="form-control">
    				<option value="Club">Club</option>
    				<option value="Club Site">Club Site</option>
    				<option value="Club Events">Club Events</option>
    				<option value="College Facilities">College Facilities</option>
    				<option value="College Faculty">College Faculty</option>
    				<option value="Others">Oters</option>
    			</select>
      </div>
      
      <div class="form-group">
      	<div class="input-group">
      		 <span class="input-group-addon">Title</span>
      		 <input type="text" size="40" name="title" class="form-control">
      	</div>
      </div>

  		 <p>Raise your feeling :</p>
  		 <p><input type="radio" name="reaction" value="+ve" class="form-check-input"> Positive <img src="happy.png" height="30px" width="30px"></p>  
  		 <p><input type="radio" name="reaction" value="-ve" class="form-check"> Negative <img src="sad.png" height="30px" width="30px"></p>

      <textarea name="text" style="resize:none;" class="form-control" placeholder="Your " required></textarea><br>
	    
</form>
</body>
</html> 
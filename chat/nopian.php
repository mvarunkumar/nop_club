<?php
session_start();

if ( !isset ( $_SESSION['nopian'] ) ) {
     header("Location:../index.html");
}
?>
<!DOCTYPE>
<html lang="en">
<head>
	<title>Chat</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>   

	<div class="col-md-12 col-xs-12 col-sm-12">
  <div class="col-md-9 col-xs-12 col-sm-12">
    
    <iframe src="chat_base.php/#last" width="100%" height="60%"></iframe>

    <!-- Feelings starts here!!-->
    <form action="send.php" method="post" class="form-vertical">
        <div class="col-md-12 col-xs-12 col-sm-12" style="margin-bottom: 10px; margin-top: 10px;">
            <div class="col-md-4 col-xs-4 col-sm-4">
                <input type="submit" name="msg2" value="Got It" class="btn btn-success">
            </div>
            <div class="col-md-4 col-xs-4 col-sm-4">
                <input type="submit" name="msg2" value="Waiting for Ans" class="btn btn-warning">
            </div>
            <div class="col-md-4 col-xs-4 col-sm-4">
                <input type="submit" name="msg2" value="Not Satisfied" class="btn btn-danger">
            </div>
        </div> 
    </form>

    <!-- Input goes here -->
    <form action="send.php" method="post" class="form-vertical">    
        <div class="col-md-12 col-xs-12 col-sm-12">
            <div class="col-md-10 col-xs-12 col-sm-12">
               <input type="text" name="msg" class="form-control" id="in" size="20" required>
            </div>   
            <input type="image" src="sent.png" name="submit" value="SEND" class="col-md-offset-0 col-md-2 col-xs-offset-4 col-xs-4 col-sm-offset-4 col-sm-4" height="40px" width="100%">
        </div>      
    </form>
    
    </div>
    <div class="col-md-3">
      <iframe src="test"></iframe>
    </div>
  </div>
	<!-- <center>
  <br>
<form action="send.php" method="post" class="form-group">
  <div class="col-xs-8 col-sm-8" >
    <input type="text" name="message" class="form-control">
  </div>
    <input type="image" src="dir.png" value="SEND" class="col-xs-1 col-sm-1" height="50px" width="50px">
        <p  class="col-xs-3 col-sm-3" id="details">Your DEtails :<br>
         <?php echo ("Your NOP ID : ".$_SESSION['id']."<br>"."Your Registration is :".$_SESSION['uname']);
               echo ("<br>"."Your name :".$_SESSION['name']."<br>"."Email :".$_SESSION['email']);

         ?>
        </p>
</form>
<br>
<br> -->
<a href="../logout.php" class="btn btn-danger btn-lg col-sm-2 col-sm-offset-5" style="position :fixed; bottom:0px;  margin-left:-53%;">LOGOUT</a>
</body>
</html>
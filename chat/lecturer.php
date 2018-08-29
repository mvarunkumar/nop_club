<?php
session_start();

if ( !isset ( $_SESSION['lecturer'] ) ) {
     header("Location:../index.html");
}
?>
<!DOCTYPE>
<html lang="en">
<head>
	<title>Hello lecturer</title>

 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <style type="text/css">
    .details{
      background-image: url('bg2.png');
      background-size: 100%,100%;
      border-top-left-radius: 90px;
      border-bottom-left-radius: 90px;
      padding: 20px 20px 20px 20px;
    }
    .left{
      padding: 5px 5px 5px 5px;
      margin-bottom: 20px;
      border-left: dotted 2px red;
      border-bottom: dotted 2px red;
    }  
    .det:hover{
      font-size: 15px;
      color: red;
    }
    .right{
      padding: 5px 5px 5px 5px;
      margin-bottom: 20px;
      border-right: dotted 2px red;
      border-top: dotted 2px red;
    }
    .det{
      opacity: 0.9;
      margin-bottom: 15px;
      margin-left:20px;

    }
  </style>
</head>
<body>

<iframe src="chat_base.php/#last" width="100%" height="60%"></iframe><br><br>

<form action="send.php" method="post" class="form-group">
  <div class="col-sm-12 col-md-12 col-xs-12">

    <div class="col-md-7 col-xs-12 col-sm-12">
      <input type="text" name="message" class="form-control" autofocus="true">
    </div>

    <div class="col-md-5 col-sm-12 col-xs-12">
      <div class="col-md-3 col-xs-4 col-sm-4 col-sm-offset-4 col-xs-offset-4 col-md-offset-0">
        <input type="image" src="sent.png" value="SEND" height="50px" width="100%">
      </div>

      <div class="col-md-9 col-xs-10 col-sm-8 col-sm-offset-2 col-xs-offset-1 col-md-offset-0 details">
        <center><h3>Your Details :</h3></center>
        <div class="det">
          <span class="left">Name : </span>
          <span class="right"><?php echo $_SESSION['name'];?></span>  
        </div>
        <div  class="det">
          <span class="left">Email ID : </span>
          <span class="right"><?php echo $_SESSION['email'];?></span>  
        </div>
        <div class="det">
          <span class="left">Contact : </span>
          <span class="right"><?php echo $_SESSION['contact'];?></span>  
        </div>
        <div class="det">
          <span class="left">Department : </span>
          <span class="right"><?php echo $_SESSION['department'];?></span>  
        </div>   
        <div class="det">
          <span class="left">N.O.P - ID : </span>
          <span class="right"><?php echo $_SESSION['id'];?></span>  
        </div><br>       
          <center><p>Found any mistake?<br>Mail us : <a href="mailto:varun@bharathnop.ml?subject=Lecturer%20details%20error&body=I%20found%20some%20errors%20in%20my%20account%20having%20N.O.P-ID%20<?php echo $_SESSION['id']; ?>%20.Error%20details%20are%20:">varun@bharathnop.ml</a></p></center>
      </div>
    </div>
</div>
</form>

<div class="col-md-2 col-md-offset-5">
<a href="../logout.php" class="btn btn-danger btn-lg " style="position:fixed; bottom:0;">LOGOUT</a>
</div>
</body>
</html>	
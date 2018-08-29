<?php
session_start();

if ( !isset ( $_SESSION['nopian'] ) ) {
     header("Location:../login");
}
?>
<!DOCTYPE>
<html lang="en">
<head>
    <title>Home</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  
  <link rel="stylesheet" type="text/css" href="home.css">
  <link rel="stylesheet" type="text/css" href="bootstrap.css">  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="home.js"></script>
</head>
<body background="5.jpg"> 

<!--Request box-->
<div id="request" onclick="expand(this)">
    <div id="req_text">
    	<a href="req.php" class="test">SEND A REQUEST</a>
    </div>
    <img src="request.jpg" class="request">
</div>

<!--daily news including mega hand-->
<div id="news">
  <marquee class="line1" scrollamount="5">hello world</marquee>
  <marquee class="line2" scrollamount="5">hello V</marquee>
  <marquee class="line3" scrollamount="5">line 3 goes here</marquee>
  <marquee class="line4" scrollamount="5">here is your line 4</marquee>
  <marquee class="line5" scrollamount="5">last but not least</marquee>

  <img src="mghand.png" id="hand" onclick="news()">
</div>

<!--Suggestion box at the bottom-->
<div id="suggest" onclick="show(this)">
      <div id="suggest_text">Want to see some changes in this CLUB???<br>
        <a href="suggestion">
          <center>Send a Suggestion <span class="glyphicon glyphicon-edit"></span></center>
        </a>
      </div>
     <img src="suggestion.png" class="suggest">
</div>


<!--Daily Entitles-->
<div class="container form-group">
  <center class="heading_entitle">Daily Entiitles</center>
    <div class="form-group">  
      <div class="col-sm-12 col-md-6" >
        <img src="2.jpg" height="400px" width="100%" class="daily_pic">
      </div>
      <div class="col-sm-12 col-md-6">
        <IFRAME src="comments.php" height="400px" width="100%"></IFRAME>
      </div>
    </div>
!
  <form method="post" action="send.php" CLASS="form-group col-md-6 col-md-offset-3">
    <center>
       <input name="comment" class="form-control" >
       <input type="submit"value="COMMENT" class="btn btn-success btn-lg">
      </center>
  </form>
</div>

<!--chat-->
<div id="chat">
<img src="chat.png" id="chat_icon" onclick="chat()">
<div id="chat_txt">Using NOP Group Chat you can able to text to your lecturer without showing your idendity.<br>
 <center> 
   <a href="../chat"><input type="button" value ="Lets Chat" class="btn btn-danger" ></a>
 </center>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</body>
</html>

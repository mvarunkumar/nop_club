<?php
session_start();

if ( isset ( $_SESSION['nopian'] ) ) {   
  header("Location:nopian.php");

}

elseif (isset($_SESSION['lecturer'])) {    
 header("Location:lecturer.php");

}

else{
     header("Location:../login");
}
?>

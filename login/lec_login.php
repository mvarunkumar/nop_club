<?php
if (isset($_POST['yes'])) {
    
include '../database.php';
    
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $total = mysqli_query($con,"select * from lecturer WHERE uname='$uname' and pass='$pass';");
    
    $array = mysqli_fetch_array($total);



    if ($array == 0) {
             header("refresh:0; url=index.php");
    }
    
    else{    
    $sql = "select * from lecturer WHERE uname='$uname' and pass='$pass'";

    $test = mysqli_query($con,$sql);
    $val = mysqli_query($con,$sql);
    $value = mysqli_query($con,$sql);
    $value2 = mysqli_query($con,$sql);
    $value3 = mysqli_query($con,$sql);

    $id = $test->fetch_object()->id;
    $name = $val->fetch_object()->name;
    $email = $value->fetch_object()->email;
    $contact = $value2->fetch_object()->contact;
    $dep = $value3->fetch_object()->department;

    session_start();
    $check = "yes";
    $_SESSION['lecturer'] = $check;
    $_SESSION['id'] = $id;
    $_SESSION['name'] = $name;
    $_SESSION['uname'] = $uname;
    $_SESSION['email'] = $email;
    $_SESSION['contact'] = $contact;
    $_SESSION['department'] = $dep;

    header("refresh:0; url=../chat");
    }

   }
   else{
    die("Failed");
   }

?>

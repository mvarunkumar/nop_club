<?php

include '../database.php';

session_start();

$id = $_SESSION['id'];
$comment = $_POST['comment'];
$name = $_SESSION['name'];

$sql = "insert into comment (id,name,comment) value ('$id','$name','$comment')";

if (!mysqli_query($con,$sql)) {
echo "failed";
}

header("Location:index.php");
?>
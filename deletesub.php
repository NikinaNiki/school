<?php
include 'connection.php';
$id=$_GET['id'];


mysqli_query($con,"DELETE FROM `subject` where id='$id'");

echo "<script> alert('delete successfully')</script>";
echo "<script>window.location.href='viewsubject.php';</script>";
?>
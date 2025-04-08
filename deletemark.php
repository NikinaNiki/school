<?php
include 'connection.php';
$id=$_GET['student_id'];
mysqli_query($con,"DELETE FROM `mark` where student_id='$id'");

echo "<script> alert('delete successfully')</script>";
echo "<script>window.location.href='viewmarktable.php';</script>";
?>

<?php
include 'connection.php';
$id=$_GET['id'];
mysqli_query($con,"DELETE FROM `teacherreg` where id='$id'");
mysqli_query($con,"DELETE FROM `login` where login_id='$id'");
echo "<script> alert('delete successfully')</script>";
echo "<script>window.location.href='viewteacherregistration.php';</script>";
?>

<?php
include("connection.php");

$ID =$_GET['id'];
$sql = "delete from user where id = $ID";
$result = mysqli_query($conn , $sql);

echo"<script> 
alert('user delete successfully');
window.location.href='user_show.php';
</script>";


?>
<?php
include("connection.php");
$ID = $_GET['id'];
$sql = "delete from authors where id = $ID";
$result = mysqli_query($conn , $sql);

echo"<script> 
alert('Role delete successfully');
window.location.href='author_show.php';
</script>";


?>
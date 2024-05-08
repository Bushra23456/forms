<?php
include("connection.php");
$ID = $_GET['id'];
$sql = "delete from books where id = $ID";
$result = mysqli_query($conn , $sql);

echo"<script> 
alert('book delete successfully');
window.location.href='book_show.php';
</script>";
?>




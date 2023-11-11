<?php
$id=$_REQUEST['sid'];
//echo $id;
include('../connect.php');
$query="delete from tbl_session where sid='$id'";
mysqli_query($con,$query);
header("location:adds.php");
?>
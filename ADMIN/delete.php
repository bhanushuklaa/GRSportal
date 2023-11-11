<?php
$id=$_REQUEST['cid'];
echo $cid;
include('../connect.php');
$query="delete from tbl_college where cid='$id'";
mysqli_query($con,$query);
header("location:acol.php");
?>
<?php
$id=$_REQUEST['uid'];
echo $uid;
include('../connect.php');
$query="delete from tbl_user where uid='$id'";
mysqli_query($con,$query);
header("location:ushow.php");
?>
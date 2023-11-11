<?php
$id=$_REQUEST['ctid'];
//echo $id;
include('../connect.php');
$query="delete from tbl_complain_type where ctid='$id'";
mysqli_query($con,$query);
header("location:comptype.php");
?>
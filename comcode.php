<?php
$complain=$_POST['complain'];
include('../connect.php');
$query="insert into tbl_complain_type (complain_type,status,dor) values('$complain','n',curdate())";
$res=mysqli_query($con,$query);
echo $query;
header("location:acomtype.php");
?>"
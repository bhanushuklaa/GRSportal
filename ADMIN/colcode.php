<?php
$college=$_POST['college'];
//echo $college;
include('../connect.php');
$check="select * from tbl_college where college='$college'";
$res=mysqli_query($con,$check);
if($row=mysqli_fetch_array($res))
{
    //header("location:acol.php");
    echo "<script>alert('Already Present in the Table');window.location.href='acol.php';</script>";
}
else{
$query="insert into tbl_college (college,status,dor) values('$college','n',curdate())";
$res=mysqli_query($con,$query);
//echo $query;
header("location:acol.php");
}
?>"
<?php
$complain=$_POST['complain'];
include('../connect.php');
$check="select * from tbl_complain_type where complain_type='$complain'";
$res=mysqli_query($con,$check);
if($row=mysqli_fetch_array($res))
{
    //header("location:comptype.php");
    echo "<script>alert('Already Present in the Table');window.location.href='comptype.php';</script>";
}
else{
$query="insert into tbl_complain_type (complain_type,doc) values('$complain',curdate())";
$res=mysqli_query($con,$query);
//echo $query;
header("location:comptype.php");
}
?>
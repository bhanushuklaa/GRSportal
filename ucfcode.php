<?php 
session_start();
$complain=$_POST['com'];
//echo $complain;
$add=$_POST['c'];
//echo $add;
$email=$_SESSION['user'];
include('../connect.php');
$query="select uid from tbl_user where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
   $pp=$row['uid'];
}
include('../connect.php');
$query="insert into tbl_complain (ctid,uid,complain,doc,status) values('$complain','$pp','$add',curdate(),'n')";
$res=mysqli_query($con,$query);
echo "<script>alert('Your complain is successfully submitted !! ');window.location.href='ucf.php';</script>";
//echo $query;

?>
<?php
session_start();
$email=$_POST['email'];
//echo $email;
$password=$_POST['password'];
include('../connect.php');
$query="select * from tbl_admin where email='$email' and password='$password'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
   $_SESSION['admin']=$email;
   echo "<script>window.location.href='index.php';</script>";
}
else{
    header("location:adminlog.php");
}
?>
?>
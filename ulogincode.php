<?php
session_start();
$email=$_POST['email'];
//echo $email;
$password=$_POST['password'];
include('connect.php');
$query="select * from tbl_user where email='$email' and password='$password' and status='N'";
$res=mysqli_query($con,$query);
echo $query;
if($row=mysqli_fetch_array($res))
{
   $_SESSION['user']=$email;
   echo "<script>alert('Successfully Login !!');window.location.href='udash.php';</script>";
}
else{
    echo "<script>alert('you are blocked!!');window.location.href='usrlogin.php';</script>";
}
?>

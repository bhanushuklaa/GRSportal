<?php
session_start();
$op=$_POST['op'];
//echo $op;
$np=$_POST['np'];
//echo $np;
$cnp=$_POST['cnp'];
//echo $cnp;
$email=$_SESSION['user'];
//echo $email;
include('../connect.php');
$query="select password from tbl_user where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
   $pp=$row['password'];
}
if($op==$pp)
{
    if($op==$np)
    {
        //header("location:ucp.php");
        echo "<script>alert('Your Old Password and New Password are same ');window.location.href='usrlogin.php';</script>";
    }
else if($np==$cnp) 
{
     $query2="update tbl_user set password='$np' where email='$email'";
    mysqli_query($con,$query2);
    session_destroy();
    echo "<script>alert('PASSWORD UPDATED SUCCESSFULLY ');window.location.href='usrlogin.php';</script>";
}
else
{
    //header("location:ucp.php");
    echo "<script>alert('Your New Password and Confirmed New Password are not same ');window.location.href='ucp.php';</script>";
}
}
else{
//header("location:ucp.php");
echo "<script>alert('Your Old Password and Login Password are not same ');window.location.href='usrlogin.php';</script>";
}

?>
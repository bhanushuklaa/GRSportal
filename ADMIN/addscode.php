<?php
$session=$_POST['session'];
//echo $session;
include('../connect.php');
$check="select * from tbl_session where session='$session'";
$res=mysqli_query($con,$check);
if($row=mysqli_fetch_array($res))
{
    //header("location:adds.php");
    echo "<script>alert('Already Present in the Table');window.location.href='adds.php';</script>";
}
else{
$query="insert into tbl_session (session,status,dor) values('$session','n',curdate())";
$res=mysqli_query($con,$query);
echo $query;
header("location:adds.php");
}
?>"
<?php
$id=$_REQUEST['uid'];
//echo $id;
include("../connect.php");
$query="select * from tbl_user where uid='$id'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
     $status=$row['status'];
}
if($status=='N')
{
    $query2="update tbl_user set status='Y' where uid='$id'";
    mysqli_query($con,$query2);
    echo "<script>alert('Status Updated!');window.location.href='ushow.php'</script>";
}
if($status=='Y')
{
    $query3="update tbl_user set status='N' where uid='$id'";
    mysqli_query($con,$query3);
    echo "<script>alert('Status Updated!');window.location.href='ushow.php'</script>";
}
?>
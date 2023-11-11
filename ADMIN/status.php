<?php
$id=$_REQUEST['id'];
//echo $id;
include('../connect.php');
$query="select * from tbl_complain where cmpid='$id'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
$status=$row['status'];
}
if($status=='N')
{
$query2="update tbl_complain set status='P' where cmpid='$id'";
$res2=mysqli_query($con,$query2);
echo "<script>alert('successfully in pending !!');window.location.href='pc.php';</script>";
}
if($status=='P')
{
$query3="update tbl_complain set status='C',docomplain=curdate() where cmpid='$id'";
$res3=mysqli_query($con,$query3);
echo "<script>alert('successful completed complain');window.location.href='cc.php';</script>";
}
?>
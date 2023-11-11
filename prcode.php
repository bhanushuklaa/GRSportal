<?php
session_start();
$id=$_POST['id'];
//echo $id;
$filename=$_FILES['file']['name'];
//echo $filename;
$size=$_FILES['file']['size'];
//echo $size;
$type=$_FILES['file']['type'];
//echo $type;
$tmp_name=$_FILES['file']['tmp_name'];
//echo $tmp_name;
$email=$_SESSION['user'];
//echo $email;
include("connect.php");
$query="select * from tbl_user where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res)){

$location="student/";
$query2="update tbl_user set profile='$filename' where email='$email'";
mysqli_query($con,$query2);
move_uploaded_file($tmp_name,$location.$filename);
echo "<script>alert('UPLOADED SUCCESSFULLY');window.location.href='udash.php';</script>";
}
else{
    echo "<script>alert('NOT FOUND');window.location.href='udash.php';</script>";
}
?>
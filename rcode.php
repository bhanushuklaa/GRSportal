<?php
$name=$_POST['n'];
//echo $name;
$fname=$_POST['f'];
$gender=$_POST['g'];
$email=$_POST['e'];
$password=$_POST['p'];
$mobile=$_POST['m'];
$dob=$_POST['dob'];
$address=$_POST['add'];
$city=$_POST['city'];
$pincode=$_POST['pin'];
$course=$_POST['course'];
$session=$_POST['session'];
//echo $session;
$college=$_POST['college'];
include('connect.php');
$query="insert into tbl_user(name,fname,gender,email,password,mobile,dob,address,city,pincode,course,sid,cid,status,dor) values('$name','$fname','$gender','$email','$password','$mobile','$dob','$address','$city','$pincode','$course','$session','$college','N',curdate())";
$res=mysqli_query($con,$query);
echo $query;
header('location:register.php');
?>
<?php
$name=$_POST['n'];
//echo $name;
$fname=$_POST['f'];
//echo $fname;
$gender=$_POST['g'];
echo $gender;
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
$query="update tbl_user set name='$name',fname='$fname',gender='$gender',mobile='$mobile',dob='$dob',address='$address',city='$city',pincode='$pincode' where email='$email'";
$res=mysqli_query($con,$query);
//echo $query;
echo "<script>alert('SUCCESSFULLY UPDATED!!!');window.location.href='udash.php';</script>";
?>
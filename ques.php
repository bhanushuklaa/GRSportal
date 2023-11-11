<?php
session_start();
$ques=$_POST['ques'];
//echo $ques;
include("connect.php");
$email=$_SESSION['user'];
//echo $email;
$query="select * from tbl_user where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res)){
    $uid=$row['uid'];
}
$query2="insert into tbl_question (uid,question,date) value('$uid','$ques',curdate())";
$row2=mysqli_query($con,$query2);
echo "<script>alert('question added Successfully');window.location.href='discuss.php';</script>";
?>
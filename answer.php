<?php
$ans=$_POST['ans'];
//echo $ans;
$qid=$_POST['qid'];
//echo $qid;
session_start();
$ques=$_POST['qid'];
//echo $ques;
include("connect.php");
$email=$_SESSION['user'];
//echo $email;
$query="select * from tbl_user where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res)){
    $uid=$row['uid'];
}
$query2="insert into tbl_answer (uid ,qid,answer,date) value('$uid','$qid','$ans',curdate())";
mysqli_query($con,$query2);
echo "<script>alert('Answer submitted successfully');window.location.href='discuss.php';</script>";
?>

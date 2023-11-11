<?php
$qid=$_REQUEST['qid'];
//echo $qid;
include('connect.php');
$query="select * from tbl_answer where qid='$qid'";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res)){
    echo $row['answer'];
    echo "<br>";
}
?>
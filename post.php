<?php
$qid=$_REQUEST['qid'];
include("connect.php");
include("udash.php");
$query="select * from tbl_question";
$res=mysqli_query($con,$query);
//echo $qid;
?>
<style>
.main{
    height: 100%;
    width: 100%;
    display: flex;
}
  .ub{
    height: 130px;
    width: 470px;
    border: 2px solid black;
    text-align: center;
    background-color:lavenderblush;
    border-radius: 10px;
    box-shadow:5px 10px 5px plum; 
    margin-left: 430px;
    margin-top: 80px;   
  }
    </style>
<div class="main">
    <div class="ub">
<form action="answer.php" method="post"><br>
    <input type="hidden" name="qid" value="<?php echo $qid?>"/>
    <?php
    $query1="select * from tbl_question where qid='$qid'";
    $res1=mysqli_query($con,$query);
    if($row1=mysqli_fetch_array($res1)){
        echo $row1['question'];
        echo '</br>';
    }
    ?>
    Post Answer
    <textarea name="ans" placeholder="enter your answer.."></textarea><br>
    <input type="submit" style="padding-left: 10px;padding-right:10px;margin-left:80px;"/>
</form>

</div>
</div>
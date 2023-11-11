<?php
include("connect.php");
include("udash.php");
$query="select * from tbl_question";
$res=mysqli_query($con,$query);

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
<body>
    <div class="main">
        <div class="ub">        
<form action="ques.php" method="post"><br>
    Add Question
    <textarea name="ques"></textarea>
    <br>
    <input type="submit" style="padding-left: 10px;padding-right:10px;margin-left:80px;"/>
</form>

<table border="1" style="margin-top:120px; margin-left:30px;box-shadow:5px 10px 5px plum;text-align:center;">
    <tr>
        <th>S.No</th>
        <th>Question</th>
        <th>Post Answer</th>
        <th>View Answer</th>
    </tr>
    <?php
    $a=1;
    while($row=mysqli_fetch_array($res)){
        ?>
        <tr>
            <td><?php echo $a;?></td>
            <td><b><?php echo $row['question'];?><b></td>
            <td><a href="post.php?qid=<?php echo $row['qid'];?>">POST</a></td>
            <td><a href="view.php?qid=<?php echo $row['qid'];?>">VIEW</a></td>
        </tr>
        <?php
   $a++;
}
        ?>
</table>
</div>
</div>
</body>
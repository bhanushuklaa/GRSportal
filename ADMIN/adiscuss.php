<?php
include("../connect.php");
include("dashboard.php");
//$uid=$_REQUEST['uid'];
$query="select * from tbl_question";
$res=mysqli_query($con,$query);
$query1="select * from tbl_question";
$res1=mysqli_query($con,$query1);
if($row1=mysqli_fetch_array($res1)){
     //$uid=$row1['uid'];
     //echo $uid;
}

?>
<style>
    .box{
        height: 100%;
        margin-left: 270px;
        text-align: center;
    }
    
</style>
<body>
<div class="box">
    <div class="main">
<table border="1">
    <tr>
        <th>S.No</th>
        <th>Question</th>
        <th>Post By</th>
        <th>Answer</th>
        <th>Delete</th>
    </tr>
    <?php
    $a=1;
    while($row=mysqli_fetch_array($res)){
    ?>
        <tr>
            <td><?php echo $a;?></td>
            <td><?php echo $row['question'];?></td>
            <?php $uid=$row['uid'];?>
            
            <td>
                <?php 
                $query2="select  * from tbl_user where uid='$uid'";
                $res2=mysqli_query($con,$query2);
                if($row2=mysqli_fetch_array($res2))
                {
                    $pr=$row2['profile'];  
                }           
                ?>
                <img src="../student/<?php echo $row2['profile'];?>" style="height:50px;width:50px;border-radius:50px;" /><br><p><?php echo $row2['name']; ?></p></td>
            <td><a href="apost.php?qid=<?php echo $row['qid'];?>"><i class="fa-regular fa-eye"></i></a></td>
            <td><a href="aview.php?qid=<?php echo $row['qid'];?>"><i class="fa-solid fa-trash"></i></a></td>
        </tr>
        <?php
        $a++;
    }
    
        ?>
</table>
</div>
</div>
</body>
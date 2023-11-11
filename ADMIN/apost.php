<?php 
include("../connect.php");
$qid=$_REQUEST['qid'];
include('dashboard.php');
$query="select * from tbl_answer where qid='$qid'";
$res=mysqli_query($con,$query);


?>
<style>

</style>
<body>
    <table border="1" style="text-align: center;">
        <tr>
            <th>S.No</th>
            <th>Question</th>
            <th>Answer</th>
            <th>Posted By</th>
        </tr>
        <?php
        $a=1;
        while($row=mysqli_fetch_array($res)){  
            $qid=$row['qid'];
            $uid=$row['uid'];
            // echo $uid;
            $answer=$row['answer'];        
        ?>
        <tr>
            <td><?php echo $a;?></td>
            <?php
            $query2="select * from tbl_question where qid='$qid'";
            $res2=mysqli_query($con,$query2);
            if($row2=mysqli_fetch_array($res2))
            {
                $question=$row2['question'];
            }
            ?>
            <td><?php echo $question;?></td>
            <td><?php echo $row['answer'];?></td>
            <?php 
            $query3="select * from tbl_user where uid='$uid'";
            $res3=mysqli_query($con,$query3);
            if($row3=mysqli_fetch_array($res3)){
                $name=$row3['name'];
                $profile=$row3['profile'];
            }
            ?>
            <td><img src="../student/<?php echo $profile;?>" style="height:50px;width:50px;border-radius:50px;" /><br><p><?php echo $name; ?></p></td>
        </tr>
        <?php
        $a++;
        }
        ?>
    </table>
</body>
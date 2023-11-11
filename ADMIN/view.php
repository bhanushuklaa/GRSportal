<?php
include('../connect.php');
$uid=$_REQUEST['uid'];
//echo $uid;
$query="select * from tbl_user where uid='$uid'";
$res=mysqli_query($con,$query);
//echo $query;
?>
<style>
    .outer{
    height: 100%;
    width: 100%;
    display: flex;
}
  .box{
    width: 100%;
    border: 2px solid black;
    text-align: center;
    background-color:lavenderblush;
    border-radius: 10px;
    box-shadow:5px 10px 5px plum;    
  }
  .btn{
    padding-left: 10px;
    padding-right: 10px;
    
  }
</style>
<div class="outer">
    <div class="box">
        <table border="1" style="margin-left: 78px;margin-top:100px;border: 2px solid black;
    text-align: center;box-shadow:5px 10px 5px plum; ">
    <tr>
        <tr><h1 style="text-align:center;color:purple"><u>Complete Information   </u></h1></tr>
        <th>S.No.</th>
        <th>Name</th>
        <th>Fname</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Address</th>
        <th>City</th>
        <th>Pincode</th>
        <th>Course</th>
        <th>Session</th>
        <th>College</th>
        <th>Status</th>
        <th>DATE OF Resistration</th>
        <th>Profile</th>
    </tr>

        <?php
        while($row=mysqli_fetch_array($res)){
            ?>
            <tr>
            <td><?php echo $row['uid'];?></td>
            <td><b><?php echo $row['name'];?></b></td>
            <td><?php echo $row['fname'];?></td>
            <td><?php echo $row['gender'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['mobile'];?></td>
            <td><?php echo $row['address'];?></td>
            <td><?php echo $row['city'];?></td>
            <td><?php echo $row['pincode'];?></td>
            <td><?php echo $row['course'];?></td>
            <?php $sid=$row['sid'];
    $query2="select * from tbl_session where sid='$sid'";
    $res2=mysqli_query($con,$query2);
    if($row2=mysqli_fetch_array($res2))
    {
        $session=$row2['session'];      
    }
    ?>
    <td><?php echo $session;?></td>
    <?php $cid=$row['cid'];
    $query3="select * from tbl_college where cid='$cid'";
    $res3=mysqli_query($con,$query3);
    if($row3=mysqli_fetch_array($res3))
    {
        $college=$row3['college'];
    }
    ?>
    <td><?php echo $college;?></td>
    <td><a href="block.php?uid=<?php echo $row['uid'];?>"><?php echo $row['status'];?></a></td>
    <td><?php echo $row['dor'];?></td>
    
    

    <td><img src="../student/<?php echo $row['profile'];?>" style="height:100px;width:100px;" /></td>
</tr>
 
<?php
        }
?>
<div class="btn">
<tr><a href="ushow.php"><button type="button" class="btn btn-primary">Back to Dashboard</button></a></tr></div>
</table>
</div>
</div>
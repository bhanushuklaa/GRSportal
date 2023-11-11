<?php
include('dashboard.php');
include('../connect.php');
$query="select * from tbl_complain where status='C'";
$res=mysqli_query($con,$query);
include('../connect.php'); ?>
        
        <table border='1'style="margin-left:350px;margin-top:25px;text-align:center;box-shadow:5px 10px 5px plum;">
      <tr><h2 style="margin-left: 640px;color: purple;"><u>Closed Complains</u></h2></tr>
      <tr>
        <th>S.No</th>
        <th>Complain Type</th>
        <th>User Name</th>
        <th>Reason of Complain</th>
        <th>Status Of Complain</th>
        <th>Date of Complain</th>
        <th>Date of Completion</th>
        
      </tr>
      <?php
      $a = 1;
      while ($row = mysqli_fetch_array($res)) {
      ?>
        <tr>
          <td><?php echo $a; ?></td>
          <?php $com=$row['ctid'];
    $query2="select complain_type from tbl_complain_type where ctid='$com'";
    $res2=mysqli_query($con,$query2);
    if($row2=mysqli_fetch_array($res2))
    {
        $ct=$row2['complain_type'];      
    }
    ?>
    <td><?php echo $ct;?></td>
    <?php $uid=$row['uid'];
    $query3="select name from tbl_user where uid='$uid'";
    $res3=mysqli_query($con,$query3);
    if($row3=mysqli_fetch_array($res3))
    {
        $ud=$row3 ['name'];
    }
    ?>
    <td><b><?php echo $ud;?></b></td>
          <td><?php echo $row['complain']?></td>
          <td><?php echo $row['status'];?></td>
          <td><?php echo $row ['doc']; ?></td>
          <td><?php echo $row ['docomplain']; ?></td>
        </tr>
      <?php

        $a++;
      }
      ?>

    </table>
    </body>
</html>

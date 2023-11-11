<?php

include('dashboard.php');
?>
<style>
.main{
    height: 100%;
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
  }
</style>

<!--add college-->
<div class="main">
  <div class="box">
  <div class="ub">
        <h1 style="color: purple;">Add College:</h1>
        

        
   <form action="colcode.php" method="post">
   <input type="text" name="college" placeholder="Enter New College Here.." style="padding-left: 30px;padding-right:30px;"> <br> <br> 
   <input type="submit" value=" &nbsp;&nbsp;&nbsp;&nbsp Add  &nbsp;&nbsp;&nbsp;&nbsp">
   <br>
 </form>
 </div>
 

 <?php
 include('../connect.php');
 $query="select * from tbl_college";
 $res=mysqli_query($con,$query);
 ?><br>
 <table border='1'>
    <tr style="color: purple;">
        <th>S.No</th>
        <th>Name of the College</th>
        <th>Date of creation</th>
        <th>Created By</th>
        <th>Delete</th>
        <th>Edit</th>
    </tr>
 <?php
 $a=1;
 while($row=mysqli_fetch_array($res))
 {
 ?>
 <tr style="text-align: center;">
 <td><?php echo $a; ?></td>
 <td><b><?php echo $row['college']?></b></td>
 <td><?php echo date("d/m/y")?></td>
 <td><i class="fa-regular fa-user"></i><br>Admin</td>
 <td><a href="delete.php?cid=<?php echo $row['cid'];?>"><i class="fa-solid fa-trash"></i></a></td>
 <td><a href="#">edit</a></td>
 </tr>
 <?php

 $a++;
 }
 ?>

 </table>
 </div>
</div>
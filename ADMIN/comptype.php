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

<!--add complain-->
<div class="main">
  <div class="ub">
        
        <h1 style="color: purple;">Add Complain:</h1>
        <div class="b">

        
<form action="comtypec.php" method="post">
  <input type="text" name="complain" style="padding-left:10px;padding-right:10px;" placeholder="Enter Complain Here..">   <br><br>
   <input type="submit" value=" &nbsp;&nbsp;&nbsp;&nbsp Add  &nbsp;&nbsp;&nbsp;&nbsp"><br>

</form>
</div>
<?php
include('../connect.php');
$query="select * from tbl_complain_type";
$res=mysqli_query($con,$query);
?>
<br><br>
<table border='1'>
    <tr style="color: purple;">
        <th>S.No</th>
        <th>Complain Type</th>
        <th>Date of complain</th>
        <th>Created By</th>
        <th>Delete</th>
    </tr>
<?php
$a=1;
while($row=mysqli_fetch_array($res))
{
?>
<tr>
<td><?php echo $a; ?></td>
<td><?php echo $row['complain_type']?></td>
<td><?php echo date("d/m/y")?></td>
<td><?php echo "Admin"?></td>
<td><a href="cmdelete.php?ctid=<?php echo $row['ctid'];?>"><i class="fa-solid fa-trash"></i></a></td>
</tr>
<?php

$a++;
}
?>

</table>
        </div>
      </div>
<?php
include('dashboard.php');

?>

<!--add complain-->
<div class="main">
        
        <h1>Add Complain:</h1>
        <div class="b">

        
<form action="acomtcode.php" method="post">
  <input type="text" name="complain">   <br>
   <input type="submit" value="Add"><br>

</form>
<?php
include('../connect.php');
$query="select * from tbl_complain_type";
$res=mysqli_query($con,$query);
?>
<table border='1'>
    <tr>
        <th>S.No</th>
        <th>Complain Type</th>
        <th>Date of complain</th>
        <th>Created By</th>
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
</tr>
<?php

$a++;
}
?>

</table>
        </div>
      </div>
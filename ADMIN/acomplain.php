<?php
include('dashboard.php');

?>

<div class="main">
        
        <h1>Add Session:</h1>
        <div class="b">

        
<form action="addscode.php" method="post">
  <input type="text" name="session">   <br>
   <input type="submit" value="Add"><br>

</form>
<?php
include('../connect.php');
$query="select * from tbl_session";
$res=mysqli_query($con,$query);
?>
<table border='1'>
    <tr>
        <th>S.No</th>
        <th>Acadmic Session</th>
        <th>Date of creation</th>
        <th>Created By</th>
    </tr>
<?php
$a=1;
while($row=mysqli_fetch_array($res))
{
?>
<tr>
<td><?php echo $a; ?></td>
<td><?php echo $row['session']?></td>
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
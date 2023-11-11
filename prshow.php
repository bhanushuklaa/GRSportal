<?php
include('connect.php');
$query="select * from tbl_user";
$res=mysqli_query($con,$query);
?>
<table align="center" border="1">
    <tr>
        <th>SrNo</th>
        <th>Name</th>
        <th>Filename</th>
        <th>Status</th>
        <th>DOR</th>
        <th>Download</th>
    </tr>
 <?php 
 $a=1;
 while($row=mysqli_fetch_array($res))
 {
 ?>
 <tr>
<td><?php echo $a ?></td>
<td><?php echo $row['name'] ?></td>
<td><img style="height:200px;"src="upload/<?php echo $row['filename'] ?>"/></td>
<td><?php echo $row['status'] ?></td>
<td><?php echo $row['dor'] ?></td>
<td><a href="http://localhost/file_uploading/upload/<?php echo $row['filename'] ?>">Download</a></td>
 </tr>
 <?php
 $a++;
 }
 ?>

</table>
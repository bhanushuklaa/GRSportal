<?php
include('dashboard.php');
include('../connect.php');
$query="select * from tbl_user order by uid";
$res=mysqli_query($con,$query);
?>
<h1 style="margin-left:650px;color: purple;"><u>All User Data</u></h1>
<table border="1" style="margin-left:280px;margin-top:30px;text-align:center;box-shadow:5px 10px 5px plum;">
    <tr>
    <th>SrNo</th>
    <th>Name</th>
    <th>Fname</th>
    <th>Gender</th>
    <th>Email</th>
    <th>Date of Registration</th>
    <th>View</th>
    <th>Delete</th>

</tr>
<?php
$a=1;
while ($row=mysqli_fetch_array($res))
{
?>
<tr>
    <td><?php echo $a; ?></td>
    <td><b><?php echo strtoupper ($row['name']); ?></b></td>
    <td><?php echo $row['fname'] ?></td>
    <td><?php echo $row['gender'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['dor'] ?></td>
    <td><a href="view.php?uid=<?php echo $row['uid'];?>"><i class="fa-regular fa-eye"></i></a></td>
    <td><a href="udelete.php?uid=<?php echo $row['uid'];?>"><i class="fa-solid fa-trash"></i></a></td>
</tr>
<?php
$a++;
}
?>
</table>
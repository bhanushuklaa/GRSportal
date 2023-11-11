<?php

include('dashboard.php');
?>
<!--add session-->
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
<div class="main">
  <div class="box">
    <div class="ub">
    <h1 style="color: purple;">Add Session:</h1>
   
      <form action="addscode.php" method="post">
       <input type="text" name="session" placeholder="Enter New Session Here.." style="padding-left: 30px;padding-right:30px;"> <br><br>
       <input type="submit" value=" &nbsp;&nbsp;&nbsp;&nbsp  Add   &nbsp;&nbsp;&nbsp;&nbsp"><br>
      </form><br><br> 
    </div>
    <?php
    include('../connect.php');
    $query = "select * from tbl_session";
    $res = mysqli_query($con, $query);
    ?>
    <br>
    <table border='1'>
      <tr style="color: purple;">
        <th>S.No</th>
        <th>Acadmic Session</th>
        <th>Date of creation</th>
        <th>Created By</th>
        <th>Delete</th>
      </tr>
      <?php
      $a = 1;
      while ($row = mysqli_fetch_array($res)) {
      ?>
        <tr style="text-align: center;">
          <td><?php echo $a; ?></td>
          <td><?php echo $row['session'] ?></td>
          <td><?php echo date("d/m/y") ?></td>
          <td><i class="fa-regular fa-user"></i><br>Admin</td>
          <td><a href="sdelete.php?sid=<?php echo $row['sid']; ?>"><i class="fa-solid fa-trash"></i></a></td>
        </tr>
      <?php

        $a++;
      }
      ?>

    </table>
  </div>
</div>
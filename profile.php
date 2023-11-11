<?php
include('udash.php');
include('connect.php'); 
//echo $_SESSION['user'];
$email=$_SESSION['user'];
//echo $email;
$query="select * from tbl_user where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res)){
 //echo $row['uid'];
}
?>
<?php

?>
<html>
    <head>
        <style>
            .box{
                height: 200px;
                width: 300px;
                margin-left: 600px;
                margin-top: 90px;
                border: 2px solid black;
                border-radius: 3px;
                text-align:start;
                box-shadow: 5px 10px 5px plum;
            }
        </style>
    </head>
    <body>
        <div class="box">
        <h2 style="text-align: center;color:purple;">File Uploading</h2><br>
        <form action="prcode.php" method="post" enctype="multipart/form-data">
            ID
            <input type="text" value="<?php echo $row['uid'];?>" name="id"/><br>
            Upload Pic
            <input type="file" name="file" style="margin-left: 20px;"/><br><br>
            <input type="submit" style="margin-left: 130px;"/><br></div>
        </form>
    </body>
</html>
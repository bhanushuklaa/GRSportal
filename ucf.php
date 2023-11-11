<?php
include('udash.php');
?>
<html>
    <head>
        <style>
            .outer{
                height: 100%;
                width: 100%;
                display: flex;
            }
            .box{
                height: 350px;
                width: 600px;
                border: 2px solid black;
                margin-left: 500px;
                margin-top: 100px;
                border-radius: 10px;
                box-shadow:5px 10px 5px plum;           
            }
        </style>
    </head>
    <body>
        <div class="outer">
            <div class="box">
        <form align="center" action="ucfcode.php" method="post">
            
<br/>


<h1 style="color: purple;"><u>Register Your Complain Here<u></h1>
<br>
<br>


Complain Type
<select required name="com">
    <option value="">--select--</option>
    <?php 
      
    include('connect.php');
$query="select * from tbl_complain_type";
$res=mysqli_query($con,$query);
       while($row=mysqli_fetch_array($res))
       {
?>
<option value="<?php echo $row['ctid'];?>">
<?php echo $row['complain_type'];?></option>
<?php

}
                                
?>
</select>
<br/>
<br/>

Complain
<textarea rows="4" cols="20" name="c"></textarea>

<br/>
<br/>
<input type="submit" value="Submit Complain"/>

        </form>
        </div>
        </div>
        
        
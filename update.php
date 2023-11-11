<?php
session_start();
include('connect.php');
   
 //echo $_SESSION['user'];
 $email=$_SESSION['user'];
 $query="select * from tbl_user where email='$email'";
 $res=mysqli_query($con,$query);
 if($row=mysqli_fetch_array($res)){
  //echo $row['uid'];
 }
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Registration Form | PB </title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.container{
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}
      </style>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Updation Form</div>
    <div class="content">
      <form action="ucode.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" name="n" value="<?php echo $row['name'];?>">
          </div>
          <div class="input-box">
            <span class="details">Fname</span>
            <input type="text" name="f" value="<?php echo $row['fname'];?>">
          </div>
          <div class="gender-details">
           <input type="radio" name="g" value="male" <?php if($row['gender'=='male']){ ?> checked <?php } ?> id="dot-1">
           <input type="radio" name="g" value="female" <?php if($row['gender'=='female']){ ?> checked <?php } ?> id="dot-2">
           <span class="gender-title">Gender</span>
            <div class="category">
              <label for="dot-1">
              <span class="dot one"></span>
              <span class="gender">Male</span>
            </label>
            <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
            </label>
          </div>
            </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="e" readonly value="<?php echo $row['email'];?>">
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="p" value="<?php echo $row['password'];?>">
          </div>
          <div class="input-box">
            <span class="details">Mobile</span>
            <input type="text" name="m" value="<?php echo $row['mobile'];?>">
          </div>
          <div class="input-box">
            <span class="details">DOB</span>
            <input type="date" name="dob" value="<?php echo $row['dob'];?>">
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" name="add" value="<?php echo $row['address'];?>">
          </div>
          <div class="input-box">
          <span class="details">City</span>
          <input type="text" name="city" value="<?php echo $row['city'];?>">
          </div>
          <div class="input-box">
            <span class="details">Pincode</span>
            <input type="text" name="pin" value="<?php echo $row['pincode'];?>">
          </div>
          <div class="input-box">
            <span class="details">Course</span>
            <input type="text" name="course" readonly value="<?php echo $row['course'];?>">            
          </div>
          <div class="input-box">
            <span class="details">Session</span>
            <?php
            $sid=$row['sid'];
            $query2="select session from tbl_session where sid='$sid'";
            $res2=mysqli_query($con,$query2);
            if($row2=mysqli_fetch_array($res2)){
              $session=$row2['session'];
            }
            ?>
            <input type="text" name="session" readonly value="<?php echo $session;?>">
          </div>
          <div class="input-box">
            <span class="details">College</span>
            <?php
            $cid=$row['cid'];
            $query3="select college from tbl_college where cid='$cid'";
            $res3=mysqli_query($con,$query3);  
            if($row3=mysqli_fetch_array($res3)){
              $college=$row3['college'];
            }
            ?>
            <input type="text" name="college" readonly value="<?php echo $college;?>">            
          </div>
        <div class="button">
          <input type="submit" value="Update"/>
          <a href="index.php"><input type="button" value="Home"/></a>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
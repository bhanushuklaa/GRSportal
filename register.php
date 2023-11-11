<?php
include('connect.php');
$query="select * from tbl_session";
$res=mysqli_query($con,$query);

$cquery="select * from tbl_college";
$cres=mysqli_query($con,$cquery);
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
    <div class="title">Registration</div>
    <div class="content">
      <form action="rcode.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" name="n" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Fname</span>
            <input type="text" name="f" placeholder="Enter your father's name" required>
          </div>
          <div class="gender-details">
           <input type="radio" name="g" value="male" id="dot-1">
           <input type="radio" name="g" value="female" id="dot-2">
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
            <input type="text" name="e" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="p" placeholder="Enter password" required>
          </div>
          <div class="input-box">
            <span class="details">Mobile</span>
            <input type="text" name="m" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">DOB</span>
            <input type="date" name="dob" placeholder="Enter your dob" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" name="add" placeholder="Enter your address" required>
          </div>
          <div class="input-box">
            <span class="details">City</span>
            <select name="city">
              <option>--select_city--</option>
              <option>Darbhanga</option>
              <option>Muzaffarpur</option>
              <option>Samastipur</option>
              <option>Madhubani</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Pincode</span>
            <input type="text" name="pin" placeholder="Enter your pincode" required>
          </div>
          <div class="input-box">
            <span class="details">Course</span>
            <select name="course">
              <option value="">--select_course--</option>
              <option>B.Sc</option>
              <option>B.A</option>
              <option>B.Com</option>
              <option>M.Sc</option>
              <option>M.A</option>
              <option>M.Com</option>
              <option>MBA</option>
              <option>PHD</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Session</span>
            <select name="session">
              <option value="">--select_session--</option>
              <?php
              while($row=mysqli_fetch_array($res)){
              ?>
              <option value="<?php  echo $row['sid'];?>"><?php echo $row['session']; ?></option>
                <?php
              }
              ?>
              
              
            </select>
          </div>
          <div class="input-box">
            <span class="details">College</span>
            <select name="college">
            <option value="">--select_college--</option>
              <?php
              while($row=mysqli_fetch_array($cres)){
              ?>
              <option value="<?php  echo $row['cid'];?>"><?php echo $row['college']; ?></option>
                <?php
              }
              ?>
             
            </select>
          </div>
        <div class="button">
          <input type="submit" value="Register">
          <a href="home.php"><input type="button" value="Home"></a>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
<?php
include("dashboard.php");
?>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            .home-section .home-content{
  position: relative;
 height:100%;
 
}
.home-content .overview-boxes{
  height:100%;
    background-color: plum;
    margin-left:300px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  padding: 40px 40px;
  margin-bottom: 26px;
}
.overview-boxes .box{
  
  display: flex;
  align-items: center;
  justify-content: center;
  width: calc(100% / 4 - 15px);
  background: lavender;
  padding: 15px 14px;
  border-radius: 12px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.1);
}
.overview-boxes .box-topic{
  font-size: 22px;
  font-family: Arial, Helvetica, sans-serif;;
}
.home-content .box .number{
  display: inline-block;
  font-size: 35px;
  margin-top: -6px;
  font-weight: 500;
}
.home-content .box .indicator{
  display: flex;
  align-items: center;
  justify-content: center;
  
}
.home-content .box .indicator i{
  height: 25px;
  width: 30px;
  /*background: pink;*/
  line-height: 20px;
  text-align: center;
  border-radius: 50%;
  color:black;
  font-size: 40px;
  margin-right: 5px;
}
.box .indicator i.down{
 background: #e87d88;
}
.home-content .box .indicator .text{
  font-size: 28px;
color:palevioletred;
  
}
.home-content .box .cart{
  display: inline-block;
  font-size: 32px;
  height: 50px;
  width: 50px;
  background: #cce5ff;
  line-height: 50px;
  text-align: center;
  color: #66b0ff;
  border-radius: 12px;
  margin: -15px 0 0 6px;
}
.home-content .box .cart.two{
   color: #2BD47D;
   background: #C0F2D8;
 }
.home-content .box .cart.three{
   color: #ffc233;
   background: #ffe8b3;
 }
.home-content .box .cart.four{
   color: #e05260;
   background: #f7d4d7;
 }
.home-content .total-order{
  font-size: 20px;
  font-weight: 500;
}
.home-content .sales-boxes{
  display: flex;
  justify-content: space-between;
  /* padding: 0 20px; */
}

/* left box */
.home-content .sales-boxes .recent-sales{
  width: 65%;
  background: #fff;
  padding: 20px 30px;
  margin: 0 20px;
  border-radius: 12px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}
.home-content .sales-boxes .sales-details{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.sales-boxes .box .title{
  font-size: 24px;
  font-weight: 500;
  /* margin-bottom: 10px; */
}
.sales-boxes .sales-details li.topic{
  font-size: 20px;
  font-weight: 500;
}
.sales-boxes .sales-details li{
  list-style: none;
  margin: 8px 0;
}
.sales-boxes .sales-details li a{
  font-size: 18px;
  color: #333;
  font-size: 400;
  text-decoration: none;
}
.sales-boxes .box .button{
  width: 100%;
  display: flex;
  justify-content: flex-end;
}
.sales-boxes .box .button a{
  color: #fff;
  background: #0A2558;
  padding: 4px 12px;
  font-size: 15px;
  font-weight: 400;
  border-radius: 4px;
  text-decoration: none;
  transition: all 0.3s ease;
}
.sales-boxes .box .button a:hover{
  background:  #0d3073;
}
.overview-boxes .boxa{
  height:200px;
    margin-top: 40px;
    /*display: flex;*/
    align-items: center;
    justify-content: center;
    width:400px;;
    background: lavender;
    padding: 15px 14px;
    border-radius: 12px;
    box-shadow: 0 5px 10px rgba(0,0,0,0.1);
  }
  .overview-boxes .boxa-topic{
    font-size: 22px;
    font-family: Arial, Helvetica, sans-serif;;
  }


.overview-boxes .boxb{
  height:200px;
    margin-top: 40px;
    /*display: flex;*/
    align-items: center;
    justify-content: center;
    width: calc(100% / 4 - 15px);
    background: lavender;
    padding: 15px 14px;
    border-radius: 12px;
    box-shadow: 0 5px 10px rgba(0,0,0,0.1);
  }
  .overview-boxes .boxb-topic{
    font-size: 22px;
    font-family: Arial, Helvetica, sans-serif;;
  }
  
.overview-boxes .boxc{
  height:200px;
    margin-top: 40px;
    /*display: flex;*/
    align-items: center;
    justify-content: center;
    width: calc(100% / 4 - 15px);
    background: lavender;
    padding: 15px 14px;
    border-radius: 12px;
    box-shadow: 0 5px 10px rgba(0,0,0,0.1);
  }
  .overview-boxes .boxc-topic{
    font-size: 22px;
    font-family: Arial, Helvetica, sans-serif;;
  }
  .home-content .boxa .indicator{
  display: flex;
  align-items: center;
  justify-content: center;
  
}
.home-content .boxa .indicator i{
  height: 25px;
  width: 30px;
  /*background: pink;*/
  line-height: 20px;
  text-align: center;
  border-radius: 50%;
  color:black;
  font-size: 40px;
  margin-right: 5px;
}
.home-content .boxb .indicator{
  display: flex;
  align-items: center;
  justify-content: center;
  
}
.home-content .boxb .indicator i{
  height: 25px;
  width: 30px;
  /*background: pink;*/
  line-height: 20px;
  text-align: center;
  border-radius: 50%;
  color:black;
  font-size: 40px;
  margin-right: 5px;
}
.home-content .boxc .indicator{
  display: flex;
  align-items: center;
  justify-content: center;
  
}
.home-content .boxc .indicator i{
  height: 25px;
  width: 30px;
  /*background: pink;*/
  line-height: 20px;
  text-align: center;
  border-radius: 50%;
  color:black;
  font-size: 40px;
  margin-right: 5px;
}
.home-content .boxa .indicator .text{
  font-size: 28px;
color:palevioletred;
  
}
.home-content .boxb .indicator .text{
  font-size: 28px;
color:palevioletred;
  
}
.home-content .boxc .indicator .text{
  font-size: 28px;
color:palevioletred;
  
}

            </style>
</head>
<body>
    
<div class="home-content">
      <div class="overview-boxes">
        <br/><br/>
        <div class="box">
          <div class="right-side">
            <div class="box-topic"><u>NPY COMPLAINTS</u></div>
          
            <p>No of complaints registered</p>
             
            <div class="indicator">
            <i class="fa-sharp fa-solid fa-envelopes-bulk fa-2xl"></i>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="text"><h1 style="text-align: center;"><?php
              include("../connect.php");
              $query="select count(status) from tbl_complain where status='N'";
              $res=mysqli_query($con,$query);
              if($row=mysqli_fetch_array($res))
             { echo $row['count(status)'];}
              ?></h1></span>
            </div>
          </div>
          
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic"><u>PENDING COMPLAINTS</u></div>
            <p>No of complaints pending</p>
            

            <div class="indicator">
            <i class="fa-solid fa-business-time fa-2xl"></i>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="text"><h1 style="text-align: center;"><?php
              include("../connect.php");
              $query="select count(status) from tbl_complain where status='P'";
              $res=mysqli_query($con,$query);
              if($row=mysqli_fetch_array($res))
             { echo $row['count(status)'];}
              ?></h1></span>
              
            </div>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic"><u></b>CLOSED COMPLAINTS</u></b></div>
            
            <p>No of complaints solved</p>
           
            <div class="indicator">
            <i class="fa-solid fa-check-to-slot fa-2xl"></i>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="text"><h1 style="text-align: center;"><?php
              include("../connect.php");
              $query="select count(status) from tbl_complain where status='C'";
              $res=mysqli_query($con,$query);
              if($row=mysqli_fetch_array($res))
             { echo $row['count(status)'];}
              ?></h1></span>
            </div>
          </div>
          
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic"><u>Total USER</u></div>
          
            <p>No of user registered</p>
            
            <div class="indicator">
            <i class="fa-solid fa-users-viewfinder fa-2xl"></i>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text"><h1 style="text-align: justify;"><?php
              include("../connect.php");
              $query="select count(uid) from tbl_user ";
              $res=mysqli_query($con,$query);
              if($row=mysqli_fetch_array($res))
             { echo $row['count(uid)'];}
              ?></h1>
              </span>
            </div>
          </div> 
        </div>
        <div class="boxa">
          <div class="right-side">
            <div class="box-topic"></div>
           <p style="text-align: center;">EMPTY</p>
            <div class="indicator">
            
            </div>
          </div>
          
        </div>
        <div class="boxb">
          <div class="right-side">
            <div class="box-topic"><u>TOTAL SESSION</u></div>
            <p>No of total sessions</p>            
            <br>
            <div class="indicator">
              
            <i class="fa-solid fa-calendar-days"></i>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="text"><h1 style="text-align: center;"><?php
              include("../connect.php");
              $query="select count(session) from tbl_session";
              $res=mysqli_query($con,$query);
              if($row=mysqli_fetch_array($res))
             { echo $row['count(session)'];}
              ?></h1></span>
              
            </div>
          </div>
          
        </div>
        <div class="boxc">
          <div class="right-side">
            <div class="box-topic"><u></b>TOTAL COLLEGE</u></b></div>
            <p>No of total colleges</p>            
            <br/>
            
            <div class="indicator">
            <i class="fa-solid fa-building-columns"></i>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="text"><h1 style="text-align: center;"><?php
              include("../connect.php");
              $query="select count(college) from tbl_college";
              $res=mysqli_query($con,$query);
              if($row=mysqli_fetch_array($res))
             { echo $row['count(college)'];}
              ?></h1></span>
            </div>
          </div>
          
        </div>
      </div>
</body>
</html>
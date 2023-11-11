<?php
session_start();
//echo $_SESSION['admin'];
if ($_SESSION['admin']=="") {
  session_destroy();
  header("location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>AdminDashboard | PB</title>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <link rel="stylesheet" href="../CSS/fontawesome.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

    .logo {
      border-radius: 50px;
    }

    #L {
      float: left;
    }

    #R {
      float: left;
    }

    * {
      margin: 0;
      padding: 0;
      user-select: none;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    .btn {
      position: absolute;
      top: 15px;
      left: 45px;
      height: 45px;
      width: 45px;
      text-align: center;
      background: #1b1b1b;
      border-radius: 3px;
      cursor: pointer;
      transition: left 0.4s ease;
    }

    .btn.click {
      left: 260px;
    }

    .btn span {
      color: white;
      font-size: 28px;
      line-height: 45px;
    }

    .btn.click span:before {
      content: '\f00d';
    }

    .sidebar {
      position: absolute;
      width: 250px;
      height: 100%;
      top: 0;
      left: -250px;
      background: #1b1b1b;
      transition: left 0.4s ease;
    }

    .sidebar.show {
      left: 0px;
    }

    .sidebar .text {
      color: white;
      font-size: 25px;
      font-weight: 600;
      line-height: 65px;
      text-align: center;
      background: #1e1e1e;
      letter-spacing: 1px;
    }

    nav ul {
      background: #1b1b1b;
      height: 100%;
      width: 100%;
      list-style: none;
    }

    nav ul li {
      line-height: 60px;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    nav ul li:last-child {
      border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    nav ul li a {
      position: relative;
      color: white;
      text-decoration: none;
      font-size: 18px;
      padding-left: 40px;
      font-weight: 500;
      display: block;
      width: 100%;
      border-left: 3px solid transparent;
    }

    nav ul li.active a {
      color: white;
      background: #1e1e1e;
      border-left-color: cyan;
    }

    nav ul li a:hover {
      background: #1e1e1e;
    }

    nav ul ul {
      position: static;
      display: none;
    }

    nav ul .feat-show.show {
      display: block;
    }

    nav ul .serv-show.show1 {
      display: block;
    }

    nav ul ul li {
      line-height: 42px;
      border-top: none;
    }

    nav ul ul li a {
      font-size: 17px;
      color: white;
      padding-left: 80px;
    }

    nav ul li.active ul li a {
      color: white;
      background: #1b1b1b;
      border-left-color: transparent;
    }

    nav ul ul li a:hover {
      color: white !important;
      background: #1e1e1e !important;
    }

    nav ul li a span {
      position: absolute;
      top: 50%;
      right: 20px;
      transform: translateY(-50%);
      font-size: 22px;
      transition: transform 0.4s;
    }

    nav ul li a span.rotate {
      transform: translateY(-50%) rotate(-180deg);
    }

    .content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: #202020;
      z-index: -1;
      text-align: center;
    }

    .content .header {
      font-size: 45px;
      font-weight: 600;
    }

    .content p {
      font-size: 30px;
      font-weight: 500;
    }

    .main {
      margin-left: 300px;
      margin-top: 50px;
    }
    .up{
      height: 80px;
      width: 100%;
      background-color:lavenderblush;
      display: flex;
      align-items: center;
      column-gap: 25px;
      /*position: fixed;*/
      margin-bottom: 5px;
    }
    .foot{
      height:20px;
      width: 100%;
      background-color: black;
      color: white;
      margin-top: 800px;
    }
  </style>
</head>

<body>
  <div class="outer">
  <div class="up">

    <h3 style="margin-left:1099px;"><?php echo date('d/m/y'),"          ||";?></h3>
  <h4><?php echo $_SESSION['admin'],"           ||"; ?></h4>
  
<img style="height:50px;width:60px;border-radius:50%;" src="../IMAGES/admin-removebg-preview (1).png"/>
  </div>
  <div class="btn btn-slid">
    <span class="fas fa-bars"></span>
  </div>
  <nav class="sidebar">
    <div class="text">
      <i class="fa-regular fa-user"></i>
      Admin
    </div>
    <ul>
    <li><a href="index.php">Dashboard</a></li>
      <li><a href="adds.php">Session Management</a></li>
      <li><a href="acol.php">College Management</a></li>
      <li><a href="ushow.php">User Management</a></li>
      <li><a href="comptype.php">Complain Type Management</a></li>
      <li>
        <a href="#" class="feat-btn">Complain Management
          <span class="fas fa-caret-down first"></span>
        </a>
        <ul class="feat-show">
          <li><a href="npc.php">Non-Process Yet</a></li>
          <li><a href="pc.php">Pending Complains</a></li>
          <li><a href="cc.php">Closed Complains</a></li>
          <li><a href="report.php">Download Report</a></li>
        </ul>
      </li>
      <li><a href="changep.php">Change Password</a></li>
      <li><a href="adiscuss.php">Discuss Forum</a></li>
      <li><a href="logout.php">Log out</a></li>
    </ul>
  </nav>
  <div class="content">
    <div class="header">

    </div>

  </div>
 

  <script>
    $('.btn').click(function() {
      $(this).toggleClass("click");
      $('.sidebar').toggleClass("show");
    });
    $('.feat-btn').click(function() {
      $('nav ul .feat-show').toggleClass("show");
      $('nav ul .first').toggleClass("rotate");
    });
    $('.serv-btn').click(function() {
      $('nav ul .serv-show').toggleClass("show1");
      $('nav ul .second').toggleClass("rotate");
    });
    $('nav ul li').click(function() {
      $(this).addClass("active").siblings().removeClass("active");
    });
  </script>
  
  </div>
</body>

</html>
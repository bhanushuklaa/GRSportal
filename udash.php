<?php
session_start();
$_SESSION['user'];
if ($_SESSION["user"] == "") {
  session_destroy();
  header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Dashboard | PB</title>
    <link rel="stylesheet" href="style.css" />
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  <style>
  /* Import Google font - Poppins */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
.outer{
  height: 100%;
  width: 100%;
  display: flex;
}
.sidebar {
  position:fixed;
  height: 100%;
  width: 260px;
  background: #11101d;
  padding: 15px;
  z-index: 99;
}
.logo {
  font-size: 25px;
  padding: 0 15px;
}
.sidebar a {
  color: #fff;
  text-decoration: none;
}
.menu-content {
  position: relative;
  height: 100%;
  width: 100%;
  margin-top: 40px;
  overflow-y: scroll;
}
.menu-content::-webkit-scrollbar {
  display: none;
}
.menu-items {
  height: 100%;
  width: 100%;
  list-style: none;
  transition: all 0.4s ease;
}
.submenu-active .menu-items {
  transform: translateX(-56%);
}
.menu-title {
  color: #fff;
  font-size: 14px;
  padding: 15px 20px;
}
.item a,
.submenu-item {
  padding: 16px;
  display: inline-block;
  width: 100%;
  border-radius: 12px;
}
.item i {
  font-size: 12px;
}
.item a:hover,
.submenu-item:hover,
.submenu .menu-title:hover {
  background: rgba(255, 255, 255, 0.1);
  color: plum;
}
.submenu-item {
  display: flex;
  justify-content: space-between;
  align-items: center;
  color: #fff;
  cursor: pointer;
}
.submenu {
  position: absolute;
  height: 100%;
  width: 100%;
  top: 0;
  right: calc(-100% - 26px);
  height: calc(100% + 100vh);
  background: #11101d;
  display: none;
}
.show-submenu ~ .submenu {
  display: block;
}
.submenu .menu-title {
  border-radius: 12px;
  cursor: pointer;
}
.submenu .menu-title i {
  margin-right: 10px;
}
.navbar,
.main {
  left: 260px;
  width: calc(100% - 260px);
  transition: all 0.5s ease;
  z-index: 1000;
}
.sidebar.close ~ .navbar,
.sidebar.close ~ .main {
  left: 0;
  width: 100%;
}
.navbar {
  position: fixed;
  color: #fff;
  padding: 15px 20px;
  font-size: 25px;
  background: black;
  cursor: pointer;
}
.navbar #sidebar-close {
  cursor: pointer;
}
.up{
      height: 80px;
      width: 100%;
      background-color:lavenderblush;
      display: flex;
      align-items: center;
      column-gap: 25px;
      position: relative;
    }

  </style>
  </head>
  <body>
    <div class="outer">
    <div class="up">

<h3 style="margin-left:890px;"><?php echo date('d/m/y'),"          ||";?></h3>
<h4><?php echo "Welcome Home USER:", $_SESSION['user'],"           ||"; ?></h4>
<?php  
$email=$_SESSION['user'];
include("connect.php");
$query="select profile from tbl_user where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res)){


?>

<img style="height:50px;width:60px;border-radius:50%;" src="student/<?php echo $row['profile'];?>"/>
<?php  } ?>
</div>
    <nav class="sidebar">
      <a href="#" class="logo">User Dashboard</a>

      <div class="menu-content">
        <ul class="menu-items">
          <div class="menu-title"></div>

          <li class="item">
            <a href="uindex.php">Dashboard</a>
          </li>
		  
		  <li class="item">
            <a href="update.php">Update Profile</a>
          </li>

          <li class="item">
            <a href="profile.php">Update Profile Pic</a>
          </li>
		  
		  <li class="item">
            <a href="ucf.php">Add Complain</a>
          </li>
		  
		  <li class="item">
            <a href="closed.php">Closed Complain</a>
          </li>
		  
		  <li class="item">
            <a href="mycomplain.php">My Complains</a>
          </li>
		  
		  <li class="item">
            <a href="ucp.php">Change Password</a>
          </li>
		  
		  <li class="item">
            <a href="discuss.php">Discussion Forum</a>
          </li>
          

          <li class="item">
            <a href="ulogout.php">Logout</a>
          </li>
        </ul>
      </div>
    </nav> 
  </div>

    
  </body>
  <script>
  const sidebar = document.querySelector(".sidebar");
const sidebarClose = document.querySelector("#sidebar-close");
const menu = document.querySelector(".menu-content");
const menuItems = document.querySelectorAll(".submenu-item");
const subMenuTitles = document.querySelectorAll(".submenu .menu-title");

sidebarClose.addEventListener("click", () => sidebar.classList.toggle("close"));

menuItems.forEach((item, index) => {
  item.addEventListener("click", () => {
    menu.classList.add("submenu-active");
    item.classList.add("show-submenu");
    menuItems.forEach((item2, index2) => {
      if (index !== index2) {
        item2.classList.remove("show-submenu");
      }
    });
  });
});

subMenuTitles.forEach((title) => {
  title.addEventListener("click", () => {
    menu.classList.remove("submenu-active");
  });
});
  </script>
</html>
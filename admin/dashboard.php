<?php
session_start();

if($_SESSION['is_user'] == 1) {
  //run code
}
else{
  echo "<script>window.location.href= 'login.php';window.alert('Please login first');</script>";
}

?> 

<!DOCTYPE html>

<html>
<head>
  <title>Admin Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  
  padding: 6px 12px;
  /*border: 1px solid #ccc;*/
  border-top: none;
}
.container{
  width: auto;
  min-width: auto;
  border-radius: 10px;
  display: table;
  margin: auto;
  /*background-color: #dbf3ff;*/
  padding: 15px;
  display: table;
  margin: auto;
  text-align: left;

}
</style>
</head>
<body>

<div class="container">
  <div class="inner" style="display: flex; width: 100px">
    <h2>Dashboard</h2>
    
  </div>
  
  <h3>Hello <?php echo $_SESSION['username'] ?>!</h3>
  
  <!-- <p>Click on the buttons inside the tabbed menu:</p> -->

  <div class="tab">
    <script type="text/javascript">openCity(event, 'Slider');</script>
    
    <button class="tablinks active" onclick="openCity(event, 'Slider')">Slider</button>
    <button class="tablinks" onclick="openCity(event, 'Our Benefits')">Our Benefits</button>
    <button class="tablinks" onclick="openCity(event, 'Gingerade')">Gingerade</button>
    <button class="tablinks" onclick="openCity(event, 'Our Products')">Our Products</button>
    <button class="tablinks" onclick="openCity(event, 'Lastest Blogs')">Lastest Blogs</button>
    <button class="tablinks" onclick="openCity(event, 'Logout')">Logout</button>
  </div>

  <div id="Slider" class="tabcontent active" >
    <?php include('sliderpanel.php');  ?>
  </div>

  <div id="Our Benefits" class="tabcontent" style="display: none;">
    <?php include('ourbenefitspanel.php');  ?> 
  </div>

  <div id="Gingerade" class="tabcontent" style="display: none;">
    <?php include('gingeradepanel.php');  ?>
  </div>

  <div id="Our Products" class="tabcontent" style="display: none;">
    <?php include('ourproductpanel.php');  ?>
  </div>

  <div id="Lastest Blogs" class="tabcontent" style="display: none;">
    <?php include('blogpanel.php');  ?>
  </div>

  <div id="Logout" class="tabcontent" style="display: none;">
    <form><a href='#' onclick="myFunction()"><button type='button' class='btn btn-default' style='margin-top:20px;'>Logout</button></a></form>
    <script>
    function myFunction() {
      var txt;
      var r = confirm("You will be logged out");
      if (r == true) {
        txt = "You pressed OK!";
        window.location.href = "logout.php";

      } else {
        txt = "cancel";
      }
      
    }
    </script>
  </div>
</div>


<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
   
</body>
</html> 

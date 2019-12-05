
<html>
 <head>
	<title><?php session_start();
	echo $_SESSION['NAME']; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
	<style>
	html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
	</style>
 </head>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey  w3-right" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-left">Logo</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <!--<div class="w3-container w3-row">
    <div class="w3-col s4">
      <i class="fas fa-user-circle fa-7x"></i>
    </div>
   <div class="w3-col s8 w3-bar">
	
		<span>Welcome, <strong>Mike</strong></span><br>
       
      <!--<a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>-
    </div>
  </div>-->
  <center><i class="fas fa-user-circle fa-10x"></i></center>
  <br>
  <h3 class="w3-padding-12 "><center><?php echo "Welcome ".($_SESSION['NAME']) ?></h3></center>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" style="text-decoration:none" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="overview.php" style="text-decoration:none" class="w3-bar-item w3-button w3-padding "><i class="fa fa-users fa-fw"></i>  Overview</a>
    <a href="leaveform.php" style="text-decoration:none"  class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>Apply Leave</a>
    <a href="excludingsundays.php"  style="text-decoration:none"  class="w3-bar-item w3-button w3-padding"><i class="fas fa-chart-pie"></i>  Leave Tracker</a>
	<a href="task.php"  style="text-decoration:none"  class="w3-bar-item w3-button w3-padding"><i class="fas fa-tasks"></i> Task Completed</a>
    <a href="hours.php"  style="text-decoration:none"  class="w3-bar-item w3-button w3-padding"><i class="fas fa-hourglass-start"></i>  Hours Tracker</a>
	<a href="logout.php" style="text-decoration:none" class="w3-bar-item w3-button w3-padding"><i class="fas fa-sign-out-alt"></i> Logout</a>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>



 
 
  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
  <!--  <h4>FOOTER</h4>
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>-->
  </footer>

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>
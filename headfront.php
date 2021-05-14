<?php
	session_start();
	require 'connect_db.php';
?>
<!DOCTYPE html>

<html>
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      body {margin:0;}

			.topnav {

  			position: relative;
  			background-color: #f3f3f3;
  			overflow: hidden;
				width: 100%;
			}

			/* Style the links inside the navigation bar */
			.topnav a {
  			float: left;
  			color: #666;
  			text-align: center;
  			padding: 14px 16px;
				border-radius: 25px;
  			border: 2px solid #FF4500;
  			text-decoration: none;
  			font-size: 20px;
				margin: 8px 0;
			}

			/* Change the color of links on hover */
			.topnav a:hover {
  			background-color: #ddd;
  			color: black;
			}

	/* Add a color to the active/current link */
			.topnav a.active {
				color: white;
	      background-color: #FF4500;
			}

			/* Right-aligned section inside the top navigation */
			.topnav-right {
  			float: right;
			}
			.topnav .search-container {
				float: left;
			}
			.topnav input[type=text] {
				width: 80%;
				padding: 6px;
  			margin-top: 8px;
  			font-size: 20px;
  			border: 2px solid #FF4500;

			}
			.topnav .search-container button {
  			padding: 8px;
  			margin-top: 8px;
  			margin-right: 16px;
  			background: #FF4500;
  			font-size: 20px;
				border-radius: 25px;
  			border: 2px solid #FF4500;
  			cursor: pointer;
			}
			.topnav .search-container button:hover {
  		background: #ddd;
			}

			form {
			  border: 3px solid #f1f1f1;
			}

			/* Full width inputs*/
			input[type=text], input[type=password]{
			  width: 100%;
			  padding: 12px 20px;
			  margin: 8px 0;
			  display: inline-block;
			  border: 1px solid #ff4500;
			  box-sizing: border-box;
			}

			/* Set a style for all buttons */
			.login-but {
			  background-color: #ff4500;
			  color: white;
			  padding: 14px 20px;
			  margin: 8px 0;
			  border: none;
			  cursor: pointer;
			  width: 100%;
			}
			.l-but{
				float: left;
				color: #666;
				text-align: center;
				padding: 14px 16px;
				border-radius: 25px;
				border: 2px solid #FF4500;
				text-decoration: none;
				font-size: 20px;
				background-color: #f3f3f3;
				margin: 8px 0;

			}
			.l-but:hover{
				background-color: #ddd;
				color: black;
				cursor: pointer;
			}

			/* Add a hover effect for buttons */
			.login-but:hover {
			  opacity: 0.8;
			}

			/* Extra style for the cancel button (red) */
			.cancelbutton {
			  width: auto;
			  padding: 10px 18px;
			  background-color: green;
			}
			.cancelbutton:hover {
			  opacity: 0.8;
			}


			/* Center the avatar image inside this container */
			.imgcontainer {
			  text-align: center;
			  margin: 24px 0 12px 0;
			  position: relative;
			}

			img.avatar {
			  width: 20%;
			  height: 20%;
			  border-radius: 40%;
			}

			/* Add padding to containers */
			.container {
			  padding: 16px;
			}

			/* The "Forgot password" text */
			span.psw {
			  float: right;
			  padding-top: 16px;
			}

			.modal {
			  display: none; /* Hidden by default */
			  position: fixed; /* Stay in place */
			  z-index: 1; /* Sit on top */
			  left: 0;
			  top: 0;
			  width: 100%; /* Full width */
			  height: 100%; /* Full height */
			  overflow: auto; /* Enable scroll if needed */
			  background-color: rgb(0,0,0); /* Fallback color */
			  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
			  padding-top: 60px;
			}

			.mod-content {
			  background-color: #fefefe;
			  margin: 5px auto 15% auto; /* 15% from the top and centered */
			  border: 1px solid #888;
			  width: 80%; /* Could be more or less, depending on screen size */
			}

			/* The Close Button */
			.close {
			  /* Position it in the top right corner outside of the modal */
			  position: absolute;
			  right: 25px;
			  top: 0;
			  color: #000;
			  font-size: 35px;
			  font-weight: bold;
			}

			/*When hovering over close button*/
			.close:hover, .close:focus{
			  color: #ff4500;
			  cursor: pointer;
			}

			/* Add Zoom Animation */
			.animate {
			  -webkit-animation: animatezoom 0.6s;
			  animation: animatezoom 0.6s
			}

			@-webkit-keyframes animatezoom {
			  from {-webkit-transform: scale(0)}
			  to {-webkit-transform: scale(1)}
			}

			@keyframes animatezoom {
			  from {transform: scale(0)}
			  to {transform: scale(1)}
			}

			/* Change styles for span and cancel button on extra small screens */
			@media screen and (max-width: 300px) {
			  span.psw {
			    display: block;
			    float: none;
			  }

			}

    </style>

  </head>
  <body>

		<?php
				if (isset($_SESSION['user_id'])) {
					if (!$conn) {
						session_destroy();

					}
					$session_id=$_SESSION['session_id'];
					$q= "select user_id, (unix_timestamp-session_time) sessionAge from session where session_id='$session_id'";
					$res =mysqli_query($conn, $q);
					if (mysqli_errno($conn))
							{
								session_destroy();

							}
					if (mysqli_num_rows($res) == 0)
							{
								session_destroy();
							}

					$row= mysqli_fetch_assoc($res);
					if ($row['sessionAge']>3600) {
						session_destroy();
					}

				}

		 ?>

    <div class="topnav">
					<a href="#home" class="fa fa-home active">Home</a>
      		<a href="#news">News</a>
				<div class="topnav-right">
					<div class="search-container">
		    		<form action="/action_page.php">
		      		<input type="text" placeholder="Search.." name="search">
		      		<button type="submit"><i class="fa fa-search"></i></button>
		    		</form>
	  			</div>
					<?php
					if (isset($_SESSION['user_id'])) {
					 ?>
					 <form action="logout.php" method="post">
								<button class="l-but" type="submit" name="logout-submit" <i class="fa fa-user"></i>Logout</button>
					 </form>
					 <?php
			 	  }else {
					  ?>
					<button class="l-but" type="button"
					onclick="document.getElementById('myModal').style.display='block'"
					style="width:auto;" <i class="fa fa-user"></i> Login</button>
					<?php
			   	}
					 ?>
					<a href="sign_up.php">Sign up</a>
				</div>
    </div>
					<?php
							if (isset($_GET['error'])) {
								if ($_GET['error']=="sqlerror") {
									echo '<script type="text/javascript">';
									echo ' alert("SQL error- User not found")';  //not showing an alert box.
									echo '</script>';
								}
								else if ($_GET['error']=="incorrectpsw") {
									echo '<script type="text/javascript">';
									echo ' alert("Incorrect password")';  //not showing an alert box.
									echo '</script>';
								}

							}
							?>


		<div id="myModal" class="modal fade">

		  <form class="mod-content animate" action="login.php" method="post">
		    <div class="imgcontainer">
		      <span onclick="document.getElementById('myModal').style.display='none'"
		      class="close" title="Close">&times;</span>
		      <img src="/Forum_1/rsc/sign_in.png" alt="Sign-in icon" class="avatar"></img>
		    </div>

		    <div class="container">
		      <label for="usname"><b>Username</b></label>
		      <input class="s-input" type="text" name="usname" placeholder="Enter Username" required>

		      <label for="psw">Password</label>
		      <input class="s-input" type="password" name="psw" placeholder="Enter Password" required>

		      <button onclick="myFunc()" class="login-but"type="submit" name="login-submit" data-toggle="tooltip" title="At the touch of a button">Login</button>
		      <label>
		          <input type="checkbox" name="remember" checked="checked">Remember me
		      </label>
		    </div>

		    <div class="container" style="background-color:#f1f1f1">
		      <button type="button" class="cancelbutton">Cancel</button>
		      <span class="psw"><a href="#">Forgot password?</span>
		    </div>
		  </form>
		</div>

		<script>

		function myFunc(){
			<?php
			 if ($_GET['error']=="nomatch") {?>
				 alert("You dont have an account yet. Please sign up to create an account.");
				 <?php
			    }
				 ?>


		}

		</script>
		<script>
		$(document).ready(function(){
		  $('[data-toggle="tooltip"]').tooltip();
		});
		</script>

		<script>
		// Get the modal
		var modal = document.getElementById('myModal');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		if (event.target == modal) {
		  modal.style.display = "none";
		}
		}
		</script>



  </body>

  </html>

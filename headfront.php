<?php
	session_start();
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
  			float: right;

			}
			.topnav input[type=text] {
  			padding: 6px;
  			margin-top: 8px;
  			font-size: 20px;
				border-radius: 25px;
  			border: 2px solid #FF4500;

			}
			.topnav .search-container button {
  			float: right;
  			padding: 6px;
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
    </style>

  </head>
  <body>

    <div class="topnav">
					<a href="#home" class="fa fa-home active">Home</a>
      		<a href="#news">News</a>
				<div class="topnav-right">
      		<a href="#login" <i class="fa fa-user"></i>Login</a>
					<a href="#sign up">Sign up</a>
				</div>
				<div class="search-container">
    		<form action="/action_page.php">
      		<input type="text" placeholder="Search.." name="search">
      		<button type="submit"><i class="fa fa-search"></i></button>
    		</form>
  			</div>
    </div>
	


  </body>

  </html>

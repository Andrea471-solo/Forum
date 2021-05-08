<!DOCTYPE html>

<html>
	<head>
    <style>
      body{
        -moz-background-size: cover;
        -webkit-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-color: grey;
      }
      ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
        position: -webkit-sticky; /* Safari */
        position: sticky;
        top: 0;
      }

      li {
        float: left;
      }

      li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
      }

      li a:hover {
        background-color: #111;
      }

      .active {
        background-color: #4CAF50;
      }
    </style>

  </head>
  <body>
    <div class="header">
      <h2>Scroll Down</h2>
      <p>Scroll down to see the sticky effect.</p>
    </div>

    <ul>
      <li><a class="active" href="#home">Home</a></li>
      <li><a href="#news">News</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>

  </body>

  </html>

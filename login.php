<!DOCTYPE html>
<html>
<head>
<style>

/*Bordered form*/
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
button {
  background-color: #ff4500;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbutton {
  width: auto;
  padding: 10px 18px;
  background-color: green;
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
  .cancelbtn {
    width: 100%;
  }
}

</style>
</head>
<body>



<button type="button" onclick="document.getElementById('myModal').style.display='block'"
style="width:auto;">Login</button>

<div id="myModal" class="modal fade">



  <form class="mod-content animate" action="/connect_db.php" method="post">

    <div class="imgcontainer">
      <span onclick="document.getElementById('myModal').style.display='none'"
      class="close" title="Close">&times;</span>
      <img src="/Forum/Forum.git/rsc/sign_in.png" alt="Sign-in icon" class="avatar"></img>
    </div>

    <div class="container">
      <label for="usname"><b>Username</b></label>
      <input class="s-input" type="text" name="usname" placeholder="Enter Username" required>

      <label for="psw"><b>Password</b></label>
      <input class="s-input" type="password" name="psw" placeholder="Enter Password" required>

      <button type="submit" data-toggle="tooltip" title="At the touch of a button">Login</button>
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

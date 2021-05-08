<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input type="text" name="text1">
<input type="submit" value="Post this form">
</form>

<?php if ($_POST['text1']): ?>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "forum";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // sql to add rows in table
  $sql = "INSERT INTO USER (user_name, user_pass, user_email, user_date, user_level)
  VALUES ('" . addslashes($_POST['text1']) . "', 'fiorita', 'andreafiorita15@gmail.com', 'unix_timestamp()', '1')";


  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error creating table: " . mysqli_error($conn);
  }

  mysqli_close($conn);
  ?>

<?php endif; ?>

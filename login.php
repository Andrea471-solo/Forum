<?php
if (isset($_POST['login-submit'])) {
  require 'connect_db.php';

  $username= $_POST['usname'];
  $password=$_POST['psw'];

  if (isset($_POST['usname']) && isset($_POST['psw'])) {
				$q= "select * from user where user_name='".addslashes($_POST['usname'])."'";
				$res= mysqli_query($conn, $q);
				if ($res) {
            if (mysqli_num_rows($res)==1) {
              $row= mysqli_fetch_assoc($res);
              $passcheck= password_verify($password,$row['user_pass']);
              if ($passcheck==false) {
                header("Location:headfront.php?error=incorrectpsw");
                exit();
              }
              else if($passcheck==true){
                session_start();
                $_SESSION['userID']   = $row['user_id'];
					      $_SESSION['userName'] = $row['user_name'];
                $session_id= hash('sha256',time().$row['user_id']);
                $q="insert into sessions (user_id, session_id, session_time) values (".$row['user_id'].", '$session_id', unix_timestamp())";
                $res=mysqli_query($conn, $q);
                $_SESSION['session_id']=$session_id;
                header("Location:headfront.php?login=success");
                exit();
              }
  					}
            else {
              header("Location:headfront.php?error=nomatch");
  			      exit();
            }
				}
        else {
          header("Location:headfront.php?error=sqlerror");
          exit();
        }
			}
			mysqli_close($db);

}




 ?>

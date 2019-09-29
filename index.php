<?php
require "connection.php";
$span="";
if(isset($_POST["submit"])){
  if(!empty($_POST["username"]) && !empty($_POST["password"])){
    $sql = "select * from admin where ad_username='".$_POST['username']."'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
      while($row = mysqli_fetch_assoc($result)){
        $auth = password_verify($_POST["password"], $row["ad_password"]);
        if($auth){
          header("Location: http://localhost/onlineexam/ad_home.php");
        }else{
          echo "Password is not matching";
        }
      }
    }
    else{
      echo "No records found";
    }

  }
  else{
    $span="Please enter all fields";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>online exam</title>
     <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <h1 align="center">Hire the best</h1><hr>
    <div class="login-container">
      <form class="" action="" method="post">
        <h3>Admin login</h3>
        <table>
          <tr> <span id="sp2"><?php echo $span; ?></span>
            <td>Username</td>
            <td> <input type="text" id="username" name="username" value="" placeholder="Enter username"></td>
          </tr>
          <tr>
            <td>Password</td>
            <td> <input type="password" id="password" name="password" value="" placeholder="Enter password"></td>
          </tr>
          <tr>
            <td> <input type="submit" name="submit" value="Login" > </td>
          </tr>
        </table>
      </form>
    </div>
    <script type="text/javascript">
    </script>
  </body>
</html>

<?php
session_start();
if(isset($_POST['admin_name']))
{
  $url='localhost';
  $username='root';
  $password='';
  $dbname="smart_card";

  $conn=mysqli_connect($url, $username, $password, $dbname);
  if(!$conn){
      die('Could not Connect My Sql:' .mysql_error());
  }

  extract($_POST);
  $sql="SELECT * FROM admin_data where admin_name='$admin_name' and admin_pass='$admin_pass'";
  echo $sql;
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if ($row['admin_name'] === $admin_name && $row['admin_pass'] === $admin_pass) {
        //echo "Logged in!";
        header("Location: admin_view.php");
    }
    else  {
        //echo "invalid";
        echo '<script>alert("Username or Password Incorrect")</script>';
    }
  }
  else  {
    //echo "invalid";
    echo '<script>alert("Username or Password Incorrect")</script>';
  }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Parivahan | Admin Login</title>
    <link rel="shortcut icon" href=images/flag.png>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link id="pagestyle" rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/more_nav.css">
    <link rel="stylesheet" href="navigation/styles.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="navigation/script.js"></script>
    <script type="text/javascript">
        function changesheet(sheet) {
            document.getElementById('pagestyle').setAttribute('href', sheet); 
        }
    </script>
  </head>

  <body>

    <div class="top-header">
      <div class="container">
          <div class="row">
            <div class="col-md-4 col-12 text-md-left text-center leftmy">
                <ul class="top_nav1">
                  <li><i class="fa fa-calendar"></i> <span id="datedisplay"></span></li>
                  <li><i class="fa fa-clock-o"></i> <span id="clockDisplay"></span></li>
                </ul>
            </div>
            <div class="col-md-8 col-12 text-md-right text-center righthd">
                <ul class="top_nav">
                <li><a href="#"><i class="fa fa-reply-all"></i> Skip To Main Content</a></li>
                <li><a href="#"><i class="fa fa-sitemap"></i> Sitemap</a></li>
                <li class="tbg"><a href="javascript:void(0);" onclick="set_font_size('decrease')">A-</a></li>
                <li class="tbg"><a href="javascript:void(0);" onclick="set_font_size('')">A </a></li>
                <li class="tbg"><a href="javascript:void(0);" onclick="set_font_size('increase')">A+</a></li>
                </ul>
            </div>
          </div>
      </div>
    </div>

    <div class="header">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-12 text-left">
            <a href="#"><img src="images/logo.png" /></a></div>
          <div class="col-md-6 h_right text-right">
              <div class="right_box">
                <p><i class="fa fa-phone"></i> 0522-2237498</p>
                <p><i class="fa fa-envelope"></i> parivahansmartcard@gmail.com</p>
              </div>
          </div>
        </div>
      </div>
    </div>
    
    <div id="myheader" class="main_navigation">
      <div class="container">
        <div class="row">
          <div id='cssmenu'>
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="admin_login.php">Login </a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <form action="admin_login.php" method="post">
      <br>
      <br>
      <div class="imgcontainer">
        <img src="images/login_icon.png" alt="Avatar" class="avatar">
      </div>
      <div class="lcontainer">
        <label for="uname"><b>Admin Login Id</b></label>
        <input type="text" name="admin_name" id="admin_name" placeholder="Enter Username" name="uname" required>
        <label for="psw"><b>Password</b></label>
        <input type="password" name="admin_pass" id="admin_pass" placeholder="Enter Password" name="psw" required>
        <button type="submit">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </div>
      <br>
      <br>
    </form>

    <script>
        window.onscroll = function () { myFunction() };

        var header = document.getElementById("myheader");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
    </script>
    <script src="js/main.js"></script>
    <script src="js/font.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  </body>
</html>

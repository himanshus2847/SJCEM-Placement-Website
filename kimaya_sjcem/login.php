<?php
  session_start();
  if(isset($_POST['pid_number'])) {
    $url='localhost';
    $username='root';
    $password='';
    $dbname = "sjcem_placement";

    $conn=mysqli_connect($url, $username, $password, $dbname);
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }

    extract($_POST);
    $sql="SELECT * FROM users where pid_number='$pid_number' and password='$pass'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
      $row = mysqli_fetch_assoc($result);
      if ($row['pid_number'] === $pid_number && $row['password'] === $pass) {
          header("Location: index.html");
      }
      else  {
          //echo "invalid";
          echo '<script>alert("Username or Password Incorrect")</script>';
      }
    }
    else  {      
      echo '<script>alert("Username or Password Incorrect")</script>';
    }
  }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SJCEM - Placement Portal | Login</title>
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
          <a href="#"><img src="images/logo.png" /></a></div>
      </div>
    </div>

    <section id="block-block-12" class="block block-block clearfix">
      <marquee direction="left">
        <!--<h5><span><h1>Due to maintenance of Vahan Report System, the portal will be unavailable from 20:00 to 21:00 on 07-6-2021..</span></h5>
        <div>Faceless Services have been launched in Delhi. Citizens are not required to visit the RTO for availing any of these services.</div>-->
        <div>Important Notice: TCS on-campus Job drive is going to be held on 26th April 2022.</div>
      </marquee>
    </section>
      
      
    <form action="login.php" method="post">
      <br>
      <br>
      <div class="imgcontainer">
        <img src="images/user.png" alt="Avatar" class="avatar">
      </div>
      <div class="lcontainer">
        <label for="uname"><b>Email Id / PID Number</b></label>
        <input type="text" name="pid_number" id="pid_number" placeholder="Enter Username" name="uname" required>
        <label for="psw"><b>Password</b></label>
        <input type="password" name="pass" id="pass" placeholder="Enter Password" name="psw" required>
        <button type="submit">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </div>
      <label for="account" style="text-align: center; width: 100%;"><b>Don't have an account? </b><a href="signup.php"><b> Signup</b></a></label>
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

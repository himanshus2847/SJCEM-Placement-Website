<?php
$insert = false;
if(isset($_POST['name'])) {
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con) {
        die("Connection to this database failed due to" . 
        mysqli_connect_error());
    }
    // echo "Success connecting to the db.";

    /*INSERT INTO `smart_card` (`serial_number`, `pid_number`, `name`, `email`, `mobile_number`, `password`, `date`) 
    VALUES ('1', 'MH04EE1357', 'Himanshu Sharma', 'himanshus2847@gmail.com', '1972017465', '2c4640#J', current_timestamp());*/

    $pid_number= $_POST['pid_number'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile_number = $_POST['mobile_number'];
    $pass = $_POST['pass'];

    $sql = "INSERT INTO `sjcem_placement`.`users` (`pid_number`, `name`, `email`, `mobile_number`, `password`) 
    VALUES ('$pid_number', '$name', '$email', '$mobile_number', '$pass');";

    //echo $sql;

    if($con->query($sql) == true) {
      echo '<script>alert("Your account created successfully! Now try to Login.")</script>';
    }
    else  {
      echo '<script>alert("An error occured while creating you account.")</script>';
    }

    $con->close();
  }
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SJCEM - Placement Portal | Signup</title>
    <link rel="shortcut icon" href=images/flag.png>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link id="pagestyle" rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/signup.css">
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

    <form action="signup.php" method ="post" style="border:1px solid #ccc">
      <br>
      <br>
      <div class="scontainer">
        <h1>Sign Up</h1>
        <br>
        <p>Please fill in this form to create an account.</p>
        <hr>
 
        <label for="psw"><b>PID Number</b></label>
        <input type="text" name="pid_number" id="pid_number" placeholder="Enter PID Number" name="pid" required>

        <label for="name"><b>Full name</b></label>
        <input type="text" name="name" id="name" placeholder="Enter Full Name" name="name" required>

        <label for="email"><b>Email</b></label>
        <input type="text" name="email" id="email" placeholder="Enter Email" name="email" required>

        <label for="phno"><b>Mobile Number</b></label>
        <input type="text" name="mobile_number" id="mobile_number" placeholder="Enter Mobile Number" name="phno" required>
    
        <label for="psw"><b>Password</b></label>
        <input type="password" name="pass" id="pass" placeholder="Enter Password" name="psw" required>
    
        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    
        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
    
        <button type="submit">Signup</button>
        </div>
        <label for="account" style="text-align: center; width: 100%;"><b>Already have an account? </b><a href="login.php"><b> Login</b></a></label>
        <br>
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

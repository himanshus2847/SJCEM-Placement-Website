
<?php

$url='localhost';
$username='root';
$password='';
$dbname = "sjcem_placement";

$mysqli = new mysqli($url, $username, $password, $dbname);

// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' . 
    $mysqli->connect_errno . ') '. 
    $mysqli->connect_error);
}

// SQL query to select data from database
$sql = "SELECT * FROM `2020-2021` ORDER BY sr_no ASC";
$result = $mysqli->query($sql);
$mysqli->close(); 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Parivahan | User View</title>
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
    <meta charset="UTF-8">
        <title>GFG User Details</title>
        <!-- CSS FOR STYLING THE PAGE -->
        <style>
            table {
                margin: 0 auto;
                font-size: large;
                border: 1px solid black;
            }
    
            h1 {
                text-align: center;
                color: #333;
                font-size: xx-large;
                font-family: 'Gill Sans', 'Gill Sans MT', 
                ' Calibri', 'Trebuchet MS', 'sans-serif';
            }

            .center {
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 70%;
                }
    
            td {
                background-color: #fcd08b;
                border: 1px solid black;
            }
    
            th,
            td {
                font-weight: bold;
                border: 1px solid black;
                padding: 10px;
                text-align: center;
            }
    
            td {
                font-weight: lighter;
            }
        </style>
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

<div id="myheader" class="main_navigation">
  <div class="container">
    <div class="row">
      <div id='cssmenu'>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="#">Director's Desk</a></li>
          <li><a href="#">Company eligibility</a></li>
          <li><a href="#">Current Vacancies</a></li>
          <li class='active'><a href="#">Placements</a>
            <ul>
                <li><a href="2019-2020.php">2019-2020</a></li>
                <li><a href="2020-2021.php">2020-2021</a></li> 
            </ul>
          </li>
          <li><a href="login.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<section>
    <br>
    <br>
    <h1>Placements in 2020-2021</h1>
    <br>
    <br>

    <img src="images/2020-2021.png" alt="Uttar Pradesh National Health Mission" width="70%" class="center">

    <br>
    <br>

    <!-- TABLE CONSTRUCTION-->
    <table>
        <tr>
            <th>Sr No.</th>
            <th>Full Name</th>
            <th>Company</th>
            <th>Designation</th>
            <th>Annual Package</th>
        </tr>
        <!-- PHP CODE TO FETCH DATA FROM ROWS-->
        <?php   // LOOP TILL END OF DATA 
            while($rows=$result->fetch_assoc())
            {      
        ?>
        <tr>
            <!--FETCHING DATA FROM EACH 
                ROW OF EVERY COLUMN-->
            <td><?php echo $rows['sr_no'];?></td>
            <td><?php echo $rows['student_name'];?></td>
            <td><?php echo $rows['company_name'];?></td>
            <td><?php echo $rows['designation'];?></td>
            <td><?php echo $rows['ctc'];?></td>
        </tr>
        <?php
            }
        ?>
    </table>
</section>
<br>
<br>

    

    <!----------------------------------------------------Footer---------------------------------------------------->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <div class="widget">
          <h5 class="widgetheading">Social Media</h5>
          <ul class="link-list">
            <li><a href="https://www.facebook.com/aldel.sjcem"><i class="fa fa-facebook icred"></i> Facebook</a></li>
            <li><a href="https://twitter.com/john_management"><i class="fa fa-twitter icred"></i> Twitter</a></li>
            <li><a href="https://www.linkedin.com/company/st-john-college-of-engineering-and-management/"><i class="fa fa-linkedin icred"></i> LinkedIn</a></li>
            <li><a href="https://www.youtube.com/channel/UCsEe78mCNLLXELVWBcvKrkg"><i class="fa fa-youtube icred"></i> Youtube</a></li>
          </ul>
        </div>
      </div>

      <div class="col-md-2">
        <div class="widget">
          <h5 class="widgetheading">Quick Links</h5>
          <ul class="link-list">
          <li><a href="login.html"><i class="fa fa-chevron-right icred"></i> Logout</a></li>
          <li><a href="https://www.aldel.in/"><i class="fa fa-chevron-right icred"></i> Aldel.in</a></li>
          <li><a href="https://www.sjipr.edu.in/"><i class="fa fa-chevron-right icred"></i> About us</a></li>
          <li><a href="#"><i class="fa fa-chevron-right icred"></i> Trainings Update</a></li>
          </ul>
        </div>
      </div>

      <div class="col-md-3">
        <div class="widget">
          <h5 class="widgetheading">Address</h5>
          <ul class="link-list">
          <li><a href="#"><i class="fa fa-map-marker icred"></i> St. John Educational & Technical Complex, Village Vevoor, Manor Road,
            Palghar (East), Palghar District - 401404, Maharashtra, India </a></li>
          </ul>
        </div>
      </div>

      <div class="col-md-2">
        <div class="widget">
          <h5 class="widgetheading">Contact Us</h5>
          <ul class="link-list">
            <li><a href="#"><i class="fa fa-phone icred"></i> +91-2525-297279/75 </a></li>
            <li><a href="#"><i class="fa fa-envelope icred"></i> office@sjcem.edu.in </a></li>
          </ul>
          <div class="clear"></div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="widget">
          <h5 class="widgetheading">Find Us</h5>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.1545022506107!2d72.78131921530056!3d19.706045236985258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be71c92fbd91e67%3A0x2a3ce68676417a45!2sSt.%20John%20College%20of%20Engineering%20and%20Management!5e0!3m2!1sen!2sin!4v1645641896851!5m2!1sen!2sin" 
          width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </div>

  <div id="sub-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="copyright">
            <p>
              <span>Copyright © 2019, St. John College of Engineering & Management.</span>
            </p>   
          </div>
        </div>
        <div class="col-md-3">
          <div class="credits">
              Designed by <a href="https://www.youtube.com/engineerselectronics">Kimaya Sankhe</a>
          </div>
        </div>
      </div>
    </div>
  </div>

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
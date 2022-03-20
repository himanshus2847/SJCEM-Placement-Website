<?php
$insert = false;
if(isset($_POST['vehicle_number'])) {
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "smart_card";
    $sr_no = "1";

    $con = mysqli_connect($server, $username, $password, $dbname);

    if(!$con)   {
        die("Connection to this database failed due to" . 
        mysqli_connect_error());
    }
    // echo "Success connecting to the db.";

    /*INSERT INTO `smart_card` (`serial_number`, `vehicle_number`, `name`, `email`, `mobile_number`, `password`, `date`) 
    VALUES ('1', 'MH04EE1357', 'Himanshu Sharma', 'himanshus2847@gmail.com', '1972017465', '2c4640#J', current_timestamp());*/

    $vehicle_number = $_POST['vehicle_number'];
    $exp_date = $_POST['exp_date'];


    $sql = "UPDATE smart_card SET exp_date='$exp_date' WHERE vehicle_number='$vehicle_number'";
    $sql2 = "UPDATE admin_data SET rfid_data='$exp_date' WHERE sr_no='$sr_no'";

    //echo $sql;

    if($con->query($sql) and $con->query($sql2) == true)   {
        //echo "Successfully inserted";
        echo '<script>alert("Data updated Successfully")</script>';
    }
    else    {
        //echo "Error: $sql <br> $con->error";
        echo '<script>alert("An error occured while updating data")</script>';
    }
    $con->close();
  }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Parivahan | Admin View</title>
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
                            <li><a href="index.html"> Home </a></li>
                            <li><a href="admin_login.php"> Logout </a></li>
                            <li><a href="admin_view.php"> View Data </a></li>
                            <li><a href="change_data.php"> Change Data </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    
        <form action="change_data.php" method="post">
            <br>
            <br>
            <div class="imgcontainer">
                <img src="images/edit.png" alt="Avatar" class="avatar">
            </div>
            <div class="lcontainer">
                <label for="uname"><b>Enter Vehicle Number</b></label>
                <input type="text" name="vehicle_number" id="vehicle_number" placeholder="Enter Vehicle Number" name="uname" required>
                <label for="psw"><b>Enter Expiry date of Insurance & PUC</b></label>
                <input type="text" name="exp_date" id="exp_date" placeholder="Enter Expiry date of Insurance & PUC" name="psw" required>
                <button type="submit">Save Changes</button>
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
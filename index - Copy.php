<?php
$host       = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname     = "Travel_Agency";
$conn       = new mysqli($host, $dbusername, $dbpassword, $dbname);
session_start();
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Travel Agency</title>
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
</head>
<body class="bak">
    <header >
        <div class="container">
        <div class="margin">
        
            
            <div class="header-left" > 
                <a href="#"><img src="images/1a.png" alt="" /></a>
            
            </div>
            <div class="header-right">
             <nav>
                 <ul>
                    <li><a href="">HOME</a></li>
                     
                     <li><a href="">USER</a>
                             <ul class="dropdown">
                            <li><a href="signin1.php">SIGN IN</a></li>
                            <li><a href="signup.html">SIGN UP</a></li>                            
                            <li><a href="logout.php">LOG OUT</a></li>
                           
                          </ul>

                     </li>
                    <li><a href="">ABOUT</a></li>    
                     <li><a href="">CONTACT</a></li>
                 </ul>
             </nav>
             
            </div>
            </div>
            </div>
    </header>
    <form method="post" action="destination.php">
        
    <center >
        <div class="container">
        <div class="pagol">
        
        <div class="container-img">
            <img src="images/tumblr_ncsceqt4qx1rpuw07o1_500.jpg" alt="" />
                <div class="search-bar">
                            <div class="wrap">
                               <div class="search">
                                  <input type="text" class="searchTerm" placeholder="Where are you going?" name="destination">
                                  <button type="submit" class="searchButton">
                                    <i class="fa fa-search"></i>
                                 </button>
                               </div>
                            </div>
                    
                </div>
                        <div class="center-logo">
                <!-- <ul>
                    <li><a href="#"> <img src="images/4.png" alt="" />  </a></li>
                    <li><a href="#">  <img src="images/5.png" alt="" /> </a></li>
                    <li><a href="#"> <img src="images/6.png" alt="" />  </a></li>
                </ul>-->
            </div>
            
        </div>
    </form>

        
        
        
        
        </div>
        </div>
    </center>
    <!--
    <section class="one">
        <div class="container">
        <div class="Hello">
            <div class="writing">
                    <h2>Independent-IT</h2>
                    <p>Donec nec justo eget <strong>felis</strong> facilisis fermentumpelle ntesque felis lorem ipsum dolor</p>
                    <a href="#"> MORE ABOUT ME</a>
            </div>
            
            -->
            
            
            
        </div>
        </div>
    </section >
    
    <footer class="two">
        <div class="container">
        <div class="lorem"> <h1>ALL PACKAGE</h1>
            <p>The below packages are avilable currently.<p>
                <ul>
                    <li><a href="package.php">All package info</a></li>
                </ul>
                
        </div>
        
        <div class="photo">
        <ul>
        <?php 
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "travel_agency";
        $btn = "btnsora";
        $i = 1;
        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
        if (mysqli_connect_error())
        {
        die('Connect Error (' . mysqli_connect_errno() . ')' . mysqli_connect_error());
        }
        else
        {
            $sql = "select pack_img from package;";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            while ($row = mysqli_fetch_assoc($result))
            {
                $btn .= "$i";
                ?><li>
                    <img src="<?php echo $row['pack_img'];?>">
                <?php $pID              = 2000 + $i;?>
                <div class="<?php echo $btn;?>"><a href="book1.php?name=<?=$pID;?>"><button class ="butn">Book</button></a></div>
           </li>
           
           <?php 
           $i++;
           $btn = "btnsora";
            }
                            
            $conn->close();
                
        }
        ?>
        </div>
    </footer>

    <footer class="three">
        <div class="container">
        <h2> Travel Agency, copyright &copy; 2019 </h2>
        
        
        
        
        </div>
    </footer>
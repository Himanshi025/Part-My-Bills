<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part My Bills</title>
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@500&display=swap" rel="stylesheet"> 
</head>
<body>
     <header id="body-header">
        <nav>
            <div class = "dropdown-menu text-right">
                <div class="bars">
                    <i class="fas fa-bars"></i>
                </div>
                <div class ="dropdown-list nav-menu">
                    <ul class = "no-list-style">
                        <li >
                            <a href="#"> Home </a>
                        </li>
                        <li>
                            <a href="#about"> About us </a>
                        </li>
                        <li>
                            <a href="#calculator">Calculator</a>
                        </li>
                        <li>
                            <a href="#team">Team Members</a>
                        </li>
                        <li>
                            <a href="#contact">Contact us</a>
                        </li>
                    </ul>
                </div>
                </div>
                <div id="navi">  
                    <!-- <ul class="no-list-style horizontal-list nav-menu" style="float: left;">
                        <li><img src="img/headlogo.png" style="height: 300px; width: 300px;"></li>
                    </ul> -->
                    <ul class="no-list-style horizontal-list text-right nav-menu" style="float: right; font-size: 45px">
                        <li >
                            <a href="#"> Home </a>
                        </li>
                        <li>
                            <a href="#about"> About us </a>
                        </li>
                        <li>
                            <a href="#calculator">Calculator</a>
                        </li>
                        <li>
                            <a href="#team">Team Members</a>
                        </li>
                        <li>
                            <a href="#contact">Contact us</a>
                        </li>
                     </ul>

                </div>

        </nav>

        <div id="name-social-container">
            <div class="text-center">
           <span id="uname"><?php echo "<p>Welcome " . $_SESSION['username'] . "</p>"; ?></span>
            
            </div>
            <a href="logout.php" id="uname2"> Logout</a>
        </div>
        <img src="img/headlogo.png" style="height: 350px; width: 380px;margin-left : 100px;float: left;">
        <h2 style="float: right;margin-top: 165px;margin-right: 100px;font-family: 'Courgette', cursive;font-size: 2.8rem;letter-spacing: 4px;">Building the Future of Finance</h2>
    <!-- <img src="img/line.png" style="height: 100px; width: 800px;margin-left: 100px;float: left;"> -->

        </header>

    <section id="about">
        <div id="divAbout" data-aos="fade-in">
            <center><p style="font-size: 2.5rem;font-weight: bold;font-family: 'Teko', sans-serif;letter-spacing: 2px">About</p></center>
            <h6 style="font-style: oblique">PartMyBills is a service that allows you to easily settle expenses with a group of people.
            	<br><br>
            	We will be overwhelmed when people will begin to use our little project.
				I'm sure it'll be a hugely enjoyable journey
				<br><br>
            With PartMyBills you can manage a list with your shared expenses. Easily enter your expenses and check the group balance. Settle the list and we calculate exactly who has to pay what to whom!</h6>
        </div>
    </section>

<section id="calculator">
    
<div class="navbar">
  <div class="subnav">
    <button class="subnavbtn">Categories<i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
    <a href="javascript:Entertainment()">Entertainment</a>
    <a href="javascript:Foodanddrink()">Food and drink</a>
    <a href="javascript:Home()">Home</a>
    <a href="javascript:Life()">Life</a>
    <a href="javascript:Transportation()">Transportation</a>
    <a href="javascript:Uncategorized()">Uncategorized</a>
    <a href="javascript:Utilities()">Utilities</a>
    </div>
  </div>
</div>
<h2 id="cat"></h2>
        <h3 id="calchead" data-aos="slide-up">Enter the Total number of members:</h3>
        <input type="number" id="aa" placeholder="Enter value..." data-aos="slide-up">
        <br>
        <button onclick="func1();" class="btn" style="border-radius: 10px"><img id="img"></button>
        <br><br>
        <table id="mem" border="2px"></table>
        <p id="abc"></p>
        <p id="pay"></p>
    </section>
  

    <section id="team">
            <h1 class="section-heading mb75px">
            <div data-aos="zoom-in">
                <span>
                    <i class="fas fa-th-list"></i>
                </span>
                <span> TEAM MEMBERS </span>
            </h1>

            <div id="portfolio-container" data-aos="zoom-in">

                <div class="portfolio-image-container">
                    <img src="img/anime4.png">
                    <div class="portfolio-details">
                        <p>
                            SURAJ DHAWAN &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br>
                            I am a smart-working and passionate individual who isn't afraid to face a challenge.<br>
                        </p>
                    </div>

                </div>
                <div class="portfolio-image-container">
                    <img src="img/anime5.png">
                    <div class="portfolio-details">
                        <p>
                            RAHUL GROVER &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br>
                            A Man who Encourage, educate and entertains with a creative spirit.<br>
                        </p>
                    </div>

                </div>
                <div class="portfolio-image-container">
                    <img src="img/anime2.png">
                    <div class="portfolio-details">
                        <p>
                            HIMANSHI MENDIRATTA <br><br>
                            An Artist, Designer and Illustrator, passionate about the web.<br>
                        </p>
                    </div>

                </div>
                <div class="portfolio-image-container">
                    <img src="img/anime1.png">
                    <div class="portfolio-details">
                        <p>
                            TUSHAR ARORA &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br>
                            I am an ambitious workaholic, but apart from that, pretty simple person.<br>
                            <!-- <a href="https://instagram.com/tushar_arora25_?igshid=11l1hmc0o4v6x">tushar_arora25_</a> --> 
                        </p>
                    </div>
                    </div>

            </div>
        </section>

        <section id="contact">
            <h1 class="section-heading mb50px">
                <span>
                    <i class="far fa-address-card"></i>
                </span>
                <span> Contact us </span> 
            </h1>
            
            <div id="contact-container">
          
                <div id="contact-form-container">
                    <form id="contact-form" method="POST">
                        <input id="input-name" name="name" type="text" required placeholder="Your Name">
                        <input id="input-email" name="input-email" type="text" required placeholder="Your Email">
                        <textarea id="input-message" name="input-message" rows="2" cols=40 placeholder="Message"></textarea>
                        <button class="sub-btn" type="submit" onclick='alert("Message Sent Successfully!")'>SEND MESSAGE</button> 
                    </form>
                </div>
        </section>
    
</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        offset:300,
        duration:1000,
    });
</script>
<script src="JS/mainJS.js"></script>

</html>
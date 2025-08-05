<?php
include 'php/shared/connection.php';
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="header">
        <div class="navbar">
            <img id="logo" src="logo.png" alt="Car Rental">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="About Us.pdf">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="php\shared\cars.php">Cars</a></li>
                <li><a href="#">Cart</a></li>
                <li><a id="login" onclick="loginpage()" href="login.html">Login</a></li>
                <li class="round_btn"><a id="signup" href="signup.html">Sign up</a></li>
                <li class="round_btn"><a id="member" href="be_a_member.html">Be a partener</a></li>
                <!-- <li><div class="profile-container">
                    <img src="circle-user-solid.svg" alt="Profile Picture">
                  </div></li> -->
            </ul>
            
        </div>
    </div>
    <div class="slideshow">
        <!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
    <div class="ws_images"><ul>
            <li><img src="data1/images/altroz.jpg" alt="altroz" title="altroz" id="wows1_0"/></li>
            <li><img src="data1/images/tigor.jpg" alt="tigor" title="tigor" id="wows1_1"/></li>
            <li><img src="data1/images/tiago.jpg" alt="tiago" title="tiago" id="wows1_2"/></li>
            <li><img src="data1/images/nexon.jpg" alt="nexon" title="nexon" id="wows1_3"/></li>
            <li><img src="data1/images/brezza.jpg" alt="brezza" title="brezza" id="wows1_4"/></li>
            <li><img src="data1/images/ertiga.jpg" alt="ertiga" title="ertiga" id="wows1_5"/></li>
            <li><img src="data1/images/wagonr.jpg" alt="wagonr" title="wagonr" id="wows1_6"/></li>
            <li><img src="data1/images/verna.jpg" alt="verna" title="verna" id="wows1_7"/></li>
            <li><img src="data1/images/xuv500.jpg" alt="xuv500" title="xuv500" id="wows1_8"/></li>
            <li><img src="data1/images/scorpion.jpg" alt="scorpioN" title="scorpioN" id="wows1_9"/></li>
            <li><img src="data1/images/gloster.jpg" alt="gloster" title="gloster" id="wows1_10"/></li>
            <li><img src="data1/images/mercedes.jpg" alt="mercedes" title="mercedes" id="wows1_11"/></li>
            <li><img src="data1/images/gwagon.jpg" alt="gwagon" title="gwagon" id="wows1_12"/></li>
            <li><img src="data1/images/creta.jpg" alt="creta" title="creta" id="wows1_13"/></li>
            <li><img src="data1/images/bolero.jpg" alt="bolero" title="bolero" id="wows1_14"/></li>
            <li><a href="http://wowslider.net"><img src="data1/images/thar.jpg" alt="html slideshow" title="thar" id="wows1_15"/></a></li>
            <li><img src="data1/images/fortuner.jpg" alt="fortuner" title="fortuner" id="wows1_16"/></li>
        </ul></div>
    <div class="ws_script" style="position:absolute;left:-99%"><a href="#">css slideshow</a> by WOWSlider.com v9.0</div>
    <div class="ws_shadow"></div>
    </div>	
    <script type="text/javascript" src="engine1/wowslider.js"></script>
    <script type="text/javascript" src="engine1/script.js"></script>
    <!-- End WOWSlider.com BODY section -->
    </div class="car_type">
    <div class="blank"><div></div></div>
    <div id="Luxury">
        <img class="div_image" src="luxury car pic.jpg" alt="car picture">
        <h3>Luxury</h3>
        <a href="#" class="click">View Details</a>
        <a href="#" class="click">Read Now</a>
    </div>
    <div id="Premium">
        <img class="div_image" src="fortuner.jpg" alt="car picture">
        <h3>Premium</h3>
        <a href="#" class="click">View Details</a>
        <a href="#" class="click">Read Now</a>
    </div>
    <div id="Normal">
        <img class="div_image" src="normal_car.avif" alt="car picture">
        <h3>Normal</h3>
        <a href="#" class="click">View Details</a>
        <a href="#" class="click">Read Now</a>
    </div>
    <!-- <div>
        <div class="outer_midnav">
            <h3 class="head">Book Auto Rental</h3>
            <div class="midnav">
            
                <form action="php\customer\submit.php" method="post">
                    <ul>
                    <li><select class="dropdown-container" name="car_type">
                        <option class="dropdown-trigger">Choose Car Type</option>
                        
                        <option class="item">SUV</option>
                        <option class="item">SEDAN</option>
                        <option class="item">HATCHBACK</option>
                        <option class="item">MPV</option>
        
                </select></li>
                <li><select class="dropdown-container" name="pickup">
                    <option class="dropdown-trigger">Pickup Location</option>
                    
                        <option class="item">ARGODA</option>
                        <option class="item">BARIYATU</option>
                        <option class="item">HARMU</option>
                        <option class="item">KANKE</option>
                        <option class="item">KANTATOLI</option>
                        <option class="item">RATU ROAD</option>
                        <option class="item">SUJTA CHOWK</option>
                    
                </select></li>
                <li><label class="label">Pickup Date <br>and Time</label></li>
                <li><input name="pickup_date" class="item" type="datetime-local"></li>
                
                <li><select class="dropdown-container" name="drop">
                    <option class="dropdown-trigger">Drop Off Location</option>
                    
                    <option class="item">ARGODA</option>
                    <option class="item">BARIYATU</option>
                    <option class="item">HARMU</option>
                    <option class="item">KANKE</option>
                    <option class="item">KANTATOLI</option>
                    <option class="item">RATU ROAD</option>
                    <option class="item">SUJTA CHOWK</option>
                    
                </select></li>
                <li><label class="label">Drop Off Date <br>and time</label></li>
                <li><input class="item" name="drop_date" type="datetime-local"></li>
                
                <li><a id="click" class="click" href="#">Book Rent</a></li>
            </ul>
            </form>
            </div>
        </div>
    </div> -->
    <div class="steps">
        <h6 id="steps">Steps</h6>
        <h4>Car Rental Process</h4>
        <div class="steps1">
            <p><b>Step 1</b></p>
            <span>login our website then select car type and which car do you want to rent.</span>
        </div>
        <div class="steps1">
            <p><b>Step 2</b></p>
            <span>After selecting the car the Choose the Pickup date and location and also select the Drop off date and location. </span>
        </div>
        <div class="steps1">
            <p><b>Step 3</b></p>
            <span>After selecting date locaton and car type click on "RENT" button to cofirme your request.</span>
        </div>
        <h6>If you've never rented a car before. We'll guide you through the process.</h6>
    </div>
    <div class="testimonial">
        <h2>What Clients Say</h2>
        <div class="testimonial_div">
            <p><i class="fa-solid fa-user"></i><b> <u>Nikku</u></b></p>
            <span>Came in for walk-in inspection and oil change. 
                Brown is delight to deal with. He took my car right in, and completed work in a short time. 
                Highly recommend the shop.
            </span>
        </div>
        <div class="testimonial_div">
            <p><i class="fa-solid fa-user"></i><b> <u>Aditya</u></b></p>
            <span>Came in for walk-in inspection and oil change. 
                Brown is delight to deal with. He took my car right in, and completed work in a short time. 
                Highly recommend the shop.
            </span>
        </div>
        <div class="testimonial_div">
            <p><i class="fa-solid fa-user"></i><b> <u>Vaibhaw</u></b></p>
            <span>Came in for walk-in inspection and oil change. 
                Brown is delight to deal with. He took my car right in, and completed work in a short time. 
                Highly recommend the shop.
            </span>
        </div>
    </div>
    <div class="blog"> 
        <h6>OUR BLOG</h6>
        <h2>Latest News</h2>
        <div class="news">
            <div class="news_div">New cars added</div>
        </div>
        <div class="news">
            <div class="news_div">Luxury car features</div>
        </div>
        <div class="news">
            <div class="news_div">Know about driving experiences</div>
        </div>
    </div>
    <div class="car_brand_logo">
        <a href="https://www.audi.in/en/"><img class="logo" src="brand logo\audi-logo.png" alt="logo"></a>
        <a href="https://www.landrover.in/index.php"><img class="logo" src="brand logo\Land-Rover.png" alt="logo"></a>
        <a href="https://www.mercedes-benz.co.in/"><img class="logo" src="brand logo\Mercedes-logo.jpg" alt="logo"></a>
        <a href="https://www.toyotabharat.com/"><img class="logo" src="brand logo\toyota-logo.png" alt="logo"></a>
        <a href="https://www.mahindra.com/"><img class="logo" src="brand logo\Mahindra-logo.jpg" alt="logo"></a>
        <a href="https://cars.tatamotors.com/"><img class="logo" src="brand logo\Tata-logo.png" alt="logo"></a>
        <a href="https://www.marutisuzuki.com/"><img class="logo" src="brand logo\Suzuki-logo.jpg" alt="logo"></a>
        <a href="https://www.hyundai.com/in/en"><img class="logo" src="brand logo\hyundai-logo.png" alt="logo"></a>
        <a href="https://www.ford.com/"><img class="logo" src="brand logo\ford-logo.png" alt="logo"></a>
    </div>  
    <footer>
    <div class="info">
        <div class="contact">
            <img src="font\call_20dp_E8EAED_FILL0_wght400_GRAD0_opsz20.svg" alt="call_symbol">
            <span><b>Call us</b> <br>+916201674012</span>
        </div>
        <div class="email">
            <img src="font\mail.svg" alt="message_symbol">
            <span><b>Write for us</b> <br>info@roadsquad</span>
        </div>
        <div class="address">
            <img src="font\location.svg" alt="address_symbol">
            <span><b>Address</b> <br>Lalpur,Ranchi,Jharkhand</span>
        </div>
    </div>
    <br><br>    
    <div class="brand_slogan">
        <span>ROAD SQUAD</span>
        <span>Rent a car through our website effortlessly</span><br>
        <a href="#"><img src="font\facebook-brands-solid.svg" alt="facebook"></a><br>
        <a href=""><img src="font\x-twitter.svg" alt="Xhandle"></a><br>
        <a href="https://www.instagram.com/siddhantkumar_203/"><img src="font\instagram.svg" alt="Instagram">siddhant_203</a><br>
    </div>
    <div class="quick_links">
        <h4>Quick links</h4>
        <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Cars</a></li>
            <li><a href="#">Car Types</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="Car_Rental_Terms_and_Conditions.pdf">Terms & Conditions</a></li>
    </div>
    <div class="subscribe">
        <h4>Subscribe</h4>
        <span>Want to be notified about our services.Just Sign up and we will send you a notification by email.</span><br>
        <input type="email" placeholder="Your email address">
    </div>
    <hr>
    <h5><img src="font\copyright.svg" alt="logo">2024<a href="#">RoadSquad</a>.All Rights Resesrved.</h5>
</footer>


<script>
// let isLoggedIn = false; // Change to true when a user logs in
// function updateNav() {
//     if (isLoggedIn) {
//         document.getElementById("services").style.display = "inline";
//         document.getElementById("cars").style.display = "inline";
//         document.getElementById("cart").style.display = "inline";
//         document.getElementById("login").style.display = "none";
//         document.getElementById("signup").style.display = "none";
//         document.getElementById("be-partner").style.display = "none";
//     } else {
//         document.getElementById("services").style.display = "none";
//         document.getElementById("cars").style.display = "none";
//         document.getElementById("cart").style.display = "none";
//         document.getElementById("login").style.display = "inline";
//         document.getElementById("signup").style.display = "inline";
//         document.getElementById("be-partner").style.display = "inline";
//     }
// }
// // Call updateNav function initially to set the correct display
// updateNav();
// // Example function to simulate the log in action
// function logIn() {
//     isLoggedIn = true;
//     updateNav();
// }

</script>
</body>
</html>
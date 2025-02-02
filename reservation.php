<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reservation</title>
        <link rel="icon" href="images/coffee-shop.png">
        <!-- CSS file  -->
         <link rel="stylesheet" href="CSS/Reservation.css">
        <!-- font-awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Fonts  -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Dancing+Script:wght@400..700&family=Funnel+Display:wght@300..800&family=Lora:ital,wght@0,400..700;1,400..700&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Geist+Mono:wght@100..900&family=Host+Grotesk:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,400;0,500;1,400&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet"> 
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=groups" />
    
        <!-- Animation  -->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    </head>
    
<body>
    <!-- Header start  -->
    <header>
        <div class="logo1">
            <img src="images/logo-1.png" alt="">
        </div>
        <div class="menu-icon"><i class="fa-solid fa-bars"></i></div>
        <div class="menu-bar ">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="reservation.php"  style="color:#BA946D !important;">Reservation</a></li>
                <li class="pages2">
                    <a href="#">Pages</a>
                    <ul class="pages-content2">
                        <li><a href="pages/offer.php">WHAT WE OFFER</a></li>
                        <li><a href="pages/our_team.php">MEET OUR TEAM</a></li>
                        <li><a href="pages/Our_process.php">OUR PROCESS</a></li>
                        <li><a href="pages/contact_us.php">CONTACT US</a></li>
                    </ul>
                </li>

                <li><a href="about_us.php">About Us</a></li>
                <li class="pages2">
                    <a href="#">Shop</a>
                    <ul class="pages-content2">
                        <li><a href="shop/acount.php">MY ACCOUNT</a></li>
                        <li><a href="shop/cart.php">CART</a></li>
                        <li><a href="shop/products.php">PRODUCTS</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="logo">
            <img id="logo" src="images/logo-2.png" alt="">
        </div>

        <div class="box">
            <div class="links">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="menu.php">MENU</a></li>
                    <li><a href="reservation.php"  style="color:#BA946D !important;">RESERVATON</a></li>
                    <li class="pages">
                        <a href="#">PAGES</a>
                        <ul class="pages-content">
                            <li><a href="pages/offer.php">WHAT WE OFFER</a></li>
                            <li><a href="pages/our_team.php">MEET OUR TEAM</a></li>
                            <li><a href="pages/Our_process.php">OUR PROCESS</a></li>
                            <li><a href="pages/contact_us.php">CONTACT US</a></li>
                        </ul>
                    </li>
                    <li><a href="about_us.php">About Us</a></li>
                    <li class="pages">
                        <a href="#">SHOP</a>
                        <ul class="pages-content">
                            <li><a href="shop/acount.php">MY ACCOUNT</a></li>
                            <li><a href="shop/cart.php">CART</a></li>
                            <li><a href="shop/products.php">PRODUCTS</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="icons">
                <a href="shop/cart.php"><i class="fa-solid fa-cart-shopping"><span class="Span_Cart">0</span></i></a>
                <a class="user_login"><i class="fa-solid fa-user"></i></a>
                <i id="bar" class="fa-solid fa-bars"></i>
            </div>
            <form action="" class="search-bar-container">
                <input type="search" id="search-bar" placeholder="Search Here...." >
                <label for="search-bar" class="fas fa-search"></label>
            </form>
        </div>
        
        <div class="sidebar" id="sidebar">
            <button id="closeSidebar" class="close-btn"><i class="fa-solid fa-xmark"></i></button> <!-- Close button -->
            <div class="img-bar"><img src="images/sidearea-logo.png" alt=""></div>
            <div class="text-bar">
                <p>Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis, hinc partem.</p>
                <div class="icon-bar">
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-tumblr"></i>
                </div>
            </div>
        </div>
        <div class="user_login_logout display_login">
            <div class="user_img"><img src="images/user2.png" alt=""></div>
            <p id="userName1">Your Name</p>
            <a href="shop/acount.php" class="login" id="login">Login</a>
            <a href="shop/logout.php" class="logout display_login" id="logout">Logout</a>
        </div>
    </header>
    <!-- Header end -->
    <div class="landing">
        <div class="content">
            <h1>booking page</h1>
        </div>
    </div>
    <!-- landing end -->


    <div class="reserve dark">
        <div class="cont">
            <h1>RESERVE YOUR TABLE HERE</h1>
            <hr>
            <p>
                Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei.
                 Mei an pericula euripidis,  hinc partem ei est. Eos ei nisl graecis, vix aperiri nsequat an. 
                 Eius lorem tincidunt vix at, vel pertinax sensibus id.error epicurei mea.</p>
        </div>
        <div class="image">
            <img src="images/open-table-img-1.png">
        </div>
    </div>

    <div class="book">

        <div class="book1">
            <div class="people">
                <select name="" id="" class="person">
                    <option value="1">1 Person</option>
                    <option value="2">2 People</option>
                    <option value="3">3 People</option>
                    <option value="4">4 People</option>
                    <option value="5">5 People</option>
                    <option value="6">6 People</option>
                    <option value="7">7 People</option>
                    <option value="8">8 People</option>
                    <option value="9">9 People</option>
                    <option value="10">10 People</option>
                </select>
                <span class="material-symbols-outlined">
                    groups
                </span>
                
            </div>
            
        </div>
        <span class="word for">For</span>

        <div class="book2">
            <div class="dates">
                <input type="text" id="date-input" class="date-input" placeholder="Enter a date (dd-mm-yyyy)">
            <div class="date-picker" id="date-picker">
                <div class="header">
                    <button id="prev">&lt;</button>
                    <span id="current-month-year">December 2024</span>
                    <button id="next">&gt;</button>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>M</th>
                            <th>T</th>
                            <th>W</th>
                            <th>T</th>
                            <th>F</th>
                            <th>S</th>
                            <th>S</th>
                        </tr>
                    </thead>
                    <tbody id="calendar-body"></tbody>
                </table>
            </div>
            <span class="fas fa-calendar"></span>
            </div>
            
        </div>
        <span class="word at">At</span>
        
        <div class="book3">
            
            <div class="hours">
                <select name="" id="" class="hour">
                    <option value="6:30am">6:30 am</option>
                    <option value="7:00am">7:00 am</option>
                    <option value="7:30am">7:30 am</option>
                    <option value="8:00am">8:00 am</option>
                    <option value="8:30am">8:30 am</option>
                    <option value="9:00am">9:00 am</option>
                    <option value="9:30am">9:30 am</option>
                    <option value="10:00am">10:00 am</option>
                    <option value="10:30am">10:30 am</option>
                    <option value="11:00am">11:00 am</option>
                    <option value="11:30am">11:30 am</option>
                    <option value="12:00am">12:00 am</option>
                    <option value="12:30am">12:30 am</option>
                    <option value="1:00pm">1:00 pm</option>
                    <option value="1:30pm">1:30 pm</option>
                    <option value="2:00pm">2:00 pm</option>
                    <option value="2:30pm">2:30 pm</option>
                    <option value="3:00pm">3:00 pm</option>
                    <option value="3:50pm">3:50 pm</option>
                    <option value="4:00pm">4:00 pm</option>
                    <option value="4:30pm">4:30 pm</option>
                    <option value="5:00pm">5:00 pm</option>
                    <option value="5:30pm">5:30 pm</option>
                    <option value="6:00pm">6:00 pm</option>
                    <option value="6:30pm">6:30 pm</option>
                    <option value="7:30pm">7:30 pm</option>
                    <option value="8:00pm">8:00 pm</option>
                    <option value="8:30pm">8:30 pm</option>
                    <option value="9:00pm">9:00 pm</option>
                    <option value="9:30pm">9:30 pm</option>
                    <option value="10:00pm">10:00 pm</option>
                    <option value="10:30pm">10:30 pm</option>
                    <option value="11:00pm">11:00 pm</option>
                    <option value="11:30pm">11:30 pm</option>
    
                </select>
                <!-- <i class="fas fa-stopwatch"></i> -->
                <span class="fas fa-clock"></span>
            </div>
        </div>
        <div class="btn">
            <button>BOOK A TABLE</button>
        </div>
    </div>
      

    <!--start footer-->

    <footer class="footer">
        <div class="container">
            <div class="first-footer">
                <div class="ff-section" id="ff-section-1" style="margin-left: 0; margin-right: 1.6rem;">
                    <h3 style="background-color: #56412ccd; text-shadow: 2px 2px 5px #211D1A; padding-left: 5px;">OPENING HOURS</h3>
                    <div class="days">
                    <div class="day">
                        <span class="day-name">Monday</span>
                        <span class="time closed" style="color: #BA946D;">CLOSED</span>
                    </div>
                    <div class="day">
                        <span class="day-name">Tuesday</span>
                        <span class="time">9:00 - 22:00</span>
                    </div>
                    <div class="day">
                        <span class="day-name">Wednesday</span>
                        <span class="time">9:00 - 22:00</span>
                    </div>
                    <div class="day">
                        <span class="day-name">Thursday</span>
                        <span class="time">9:00 - 22:00</span>
                    </div>
                    <div class="day">
                        <span class="day-name">Friday</span>
                        <span class="time">9:00 - 1:00</span>
                    </div>
                    <div class="day">
                        <span class="day-name">Saturday</span>
                        <span class="time">12:00 - 1:00</span>
                    </div>
                    <div class="day">
                        <span class="day-name">Sunday</span>
                        <span class="time">9:00 - 22:00</span>
                    </div>
                    </div>
                </div>
                <div class="ff-section" id="ff-section-2" style="margin-left: 0rem">
                    <h3 style="background-color: #56412ccd; text-shadow: 2px 2px 5px #211D1A; padding-left: 5px;">LATEST POSTS</h3>
                    <div class="blog-posts">
                    <div class="blog-post">
                        <h2 class="post">EXPAND YOUR MIND, CHANGE EVERYTHING</h2>
                        <p class="date">14.02.2017</p>
                      </div>
                      <div class="blog-post">
                        <h2 class="post">PLACES TO GET LOST</h2>
                        <p class="date">14.02.2017</p>
                      </div>
                      <div class="blog-post">
                        <h2 class="post">LEWIS HOWES</h2>
                        <p class="date">14.02.2017</p>
                      </div>
                      <div class="blog-post">
                        <h2 class="post">ELEVATE YOUR EXPECTATIONS</h2>
                        <p class="date">14.02.2017</p>
                      </div>
                    </div>
                 
                </div>
                <div class="ff-section" id="ff-section-3">
                    <h3 style="background-color:#56412ccd; text-shadow: 2px 2px 5px #211D1A; padding-left: 5px;">GET IN TOUCH</h3>
                    <div class="addresses">
                        <div class="address">
                          <a href="mailto:xyz@gmail.com" class="mail">xyz@gmail.com</a>
                           <p class="disc">1-444-123-4559</p>
                        <p class="disc">Raymond Boulevard 224,<br>New York</p>
                        <p class="date" style="border:none; font-weight: 500; font-size: 0.9rem;">Available 24/7</p>
                        </div>
                    
                    </div>
                </div>
                <div class="ff-section" id="ff-section-4" style="margin-left: 1rem;
                ">
                    <h3 style="background-color: #56412ccd; text-shadow: 2px 2px 5px #211D1A; padding-left: 5px;">OTHER LOCATIONS</h3>
                    <div class="article">
                            <p class="title">BARISTA COFFEE SHOP</p>
                            <p class="disc">2606 Saints Alley</p>
                            <p class="disc">Tampa, FL 33602</p>
                    </div>
                    <div class="article" id="article-2">
                            <p class="title">BARISTA CAFE</p>
                            <p class="disc">2606 Saints Alley</p>
                            <p class="disc">Tampa, FL 33602</p>
                    </div>
                </div>
            </div>
            <div class="second-footer">
                <div class="s1"><p>© Team11</p></div>
                <div class="s2">
                    <a href="" class="icons"><i class="fa-brands fa-twitter"></i></a>
                    <a href="" class="icons"><i class="fa-brands fa-instagram"></i></a>
                    <a href="" class="icons"><i class="fa-brands fa-facebook"></i></a>
                    <a href="" class="icons"><i class="fa-brands fa-linkedin-in"></i> </a>
                    <a href="" class="icons"><i class="fa-brands fa-vimeo-v"></i></a>
                    <a href="" class="icons"><i class="fa-brands fa-tumblr"></i></a>
                </div>
                <div class="s3"><p>2024 All Rights Reserved</p></div>
            </div>
        </div>
    </footer>

    <!--end footer-->

    <button id="scrollToTopBtn" title="Go to top"><i class="fa-solid fa-arrow-up"></i></button>
    <!-- <button id="DarkBtn"><i class="fa-solid fa-circle-half-stroke"></i></button> -->

    <script src="JS/ALL.js"></script>
    <!-- <script src="/Coffee_Shop/JS/index.js"></script> -->
    <script src="JS/reservation.js"></script>
    <?php if (isset($_SESSION["user"]) && $_SESSION["user"] == "yes"): ?>
    <script>
        // Ensure you safely echo the value of $_POST["fullname"] within the JavaScript
        var fullname = <?php echo json_encode($_SESSION["name"]); ?>;
        document.getElementById('userName1').innerHTML =  "Hi "+ fullname + " !";
        document.getElementById('login').classList.add('display_login');
        document.getElementById('logout').classList.remove('display_login');
    </script>
    <?php endif; ?>


     <!-- Animation start -->
     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
     <script>
         // AOS.init({
         //     offset:1
         // });
         // Initialize AOS
             AOS.init({
                 duration: 1200,
                 easing: 'ease-in-out',
                 once: true,
                 offset: 100, // Trigger animations earlier for better visibility
             });
 
             // Example: Dynamically change AOS effects for smaller screens
             if (window.innerWidth <= 768) {
                 document.querySelectorAll('.box').forEach(function(element) {
                     element.setAttribute('data-aos', 'zoom-in');
                 });
             }
 
             // Add resize event listener to dynamically change AOS settings based on screen size
             window.addEventListener('resize', function() {
                 if (window.innerWidth <= 768) {
                     document.querySelectorAll('.box').forEach(function(element) {
                         element.setAttribute('data-aos', 'zoom-in');
                     });
                 } else {
                     document.querySelectorAll('.box').forEach(function(element) {
                         element.setAttribute('data-aos', 'fade-up');
                     });
                 }
                 AOS.refresh(); // Refresh AOS on resize
             });
     </script>
     <!-- Animation end  -->
</body>
</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geist+Mono:wght@100..900&family=Host+Grotesk:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/pages.css">
    <title>About Us</title>
    <link rel="icon" href="images/coffee-shop.png">
    <!-- Animation  -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
<!-- start header -->
<header>
        <div class="logo1">
            <img src="images/logo-1.png" alt="">
        </div>
        <div class="menu-icon"><i class="fa-solid fa-bars"></i></div>
        <div class="menu-bar">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="reservation.php">Reservation</a></li>
                <li class="pages2">
                    <a href="#">Pages</a>
                    <ul class="pages-content2">
                        <li><a href="pages/offer.php">WHAT WE OFFER</a></li>
                        <li><a href="pages/our_team.php">MEET OUR TEAM</a></li>
                        <li><a href="pages/Our_process.php">OUR PROCESS</a></li>
                        <li><a href="pages/contact_us.php">CONTACT US</a></li>
                    </ul>
                </li>

                <li><a href="about_us.php"  style="color:#BA946D !important;">About Us</a></li>
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
                    <li><a href="reservation.php">RESERVATON</a></li>
                    <li class="pages">
                        <a href="#">PAGES</a>
                        <ul class="pages-content">
                            <li><a href="pages/offer.php">WHAT WE OFFER</a></li>
                            <li><a href="pages/our_team.php">MEET OUR TEAM</a></li>
                            <li><a href="pages/Our_process.php">OUR PROCESS</a></li>
                            <li><a href="pages/contact_us.php">CONTACT US</a></li>
                        </ul>
                    </li>
                    <li><a href="about_us.php"  style="color:#BA946D !important;">About Us</a></li>
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
    <!-- end header -->
    <!-- start aboutUs -->
    <div class="aboutUs">
        <h2>About Us</h2>
    </div>
    <!-- end aboutUs -->

    <!-- start content -->
    <div class="aboutUs_content sec2 dark">
        <div class="container">
            <div class="image"
            data-aos="fade-right"
            data-aos-duration="1400"><img src="images/About-img-1.png" alt=""></div>
            <div class="text"
            data-aos="fade-left"
            data-aos-duration="1400">
                <h1>FEDERICO HICKMAN</h1>
                <p>Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri consequat an. Eius lorem tincidunt vix at, vel pertinax sensibus id, error epicurei mea et. Mea facilisis urbanitas moderatius id. Vis ei rationibus definiebas, eu qui purto zril laoreet. Ex error omnium interpretaris pro, alia illum ea vim.</p>
                <h3>Aenean eu leo quam. Pellentesque ornare sem lacinia quavenenatis estibacenas sed diam eget</h3>
                <p>Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri consequat an. Eius lorem tincidunt vix at, vel pertinax sensibus id, error epicurei mea et. Mea facilisis urbanitas moderatius id. Vis ei rationibus definiebas, eu qui purto zril laoreet. Ex error omnium interpretaris pro, alia illum ea vim.</p>
                <div class="icon">
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-tumblr"></i>
                </div>
            </div>
        </div>

    </div>
    <!-- end content -->
    
    
    <!-- Footer start  -->
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
                <div class="ff-section" id="ff-section-4" style="margin-left: 1rem;">
                
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
    <!-- Footer end -->

    <button id="scrollToTopBtn" title="Go to top"><i class="fa-solid fa-arrow-up"></i></button>
    <script src="JS/ALL.js"></script>
    <?php if (isset($_SESSION["user"]) && $_SESSION["user"] == "yes"): ?>
    <script>
        // Ensure you safely echo the value of $_POST["fullname"] within the JavaScript
        var fullname = <?php echo json_encode($_SESSION["name"]); ?>;
        document.getElementById('userName1').innerHTML = "Hi "+  fullname + " !";
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
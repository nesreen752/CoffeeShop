<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="icon" href="images/coffee-shop.png">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Fonts  -->
    <link rel="stylesheet" href="CSS/menu.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Dancing+Script:wght@400..700&family=Funnel+Display:wght@300..800&family=Lora:ital,wght@0,400..700;1,400..700&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Geist+Mono:wght@100..900&family=Host+Grotesk:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,400;0,500;1,400&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Dancing+Script:wght@400..700&family=Funnel+Display:wght@300..800&family=Lora:ital,wght@0,400..700;1,400..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Oswald:wght@200..700&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <div class="menu-bar">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="menu.php" style="color:#BA946D !important;">Menu</a></li>
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
                    <li><a href="menu.php" style="color:#BA946D !important;">MENU</a></li>
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
            <h1>our menu</h1>
        </div>
    </div>

    <!-- Header end -->



    <div class="cont dark">
        <div class="title">
            <h1>coffee menu</h1>
            <hr>
        </div>
        <div class="menu">
            <div class="item">
                <div class="img"
                data-aos="zoom-out" 
                data-aos-duration="1000">
                    <img src="images/h-1-list-icon-img-300x300.jpg">
                    <div class="text">
                        <h3>Caffe Latte</h3>
                        <p>Fresh brewed coffee and steamed milk</p>
                    </div>
                </div>
                <div class="price">
                    <p class="pri">$2.95</p>
                    <p class="new">New</p>
                </div>
            </div>
    
    
            <div class="item">
                <div class="img"
                data-aos="zoom-out" 
                data-aos-duration="1000">
                    <img src="images/h-1-list-icon-img-8-300x300.jpg">
                    <div class="text">
                        <h3>Iced Caramel Latte</h3>
                        <p>Espresso, Milk, Ice and Caramel Sauce</p>
                    </div>
                </div>
                <div class="price"><p class="pri">$4.67</p></div>
            </div>
    
            <div class="item">
                <div class="img"
                data-aos="zoom-out" 
                data-aos-duration="1000">
                    <img src="images/h-1-list-icon-img-2-300x300.jpg">
                    <div class="text">
                        <h3>Caffe Mocha</h3>
                        <p>Espresso With Milk, and Whipped Cream</p>
                    </div>
                </div>
                <div class="price"><p class="pri">$3.67</p></div>
            </div>
    
            <div class="item">
                <div class="img"
                data-aos="zoom-out" 
                data-aos-duration="1000">
                    <img src="images/h-1-list-icon-img-7-300x300.jpg">
                    <div class="text">
                        <h3>Espresso Macchiato</h3>
                        <p>Rich Espresso With Milk and Foam</p>
                    </div>
                </div>
                <div class="price"><p class="pri">$2.98</p></div>
            </div>
    
            <div class="item">
                <div class="img"
                data-aos="zoom-out" 
                data-aos-duration="1000">
                    <img src="images/h-1-list-icon-img-3-300x300.jpg">
                    <div class="text">
                        <h3>White Chocolate Mocha</h3>
                        <p>Espresso, White Chocolate, Milk, Ice and Cream</p>
                    </div>
                </div>
                <div class="price"><p class="pri">$2.79</p></div>
            </div>

            <div class="item">
                <div class="img"
                data-aos="zoom-out" 
                data-aos-duration="1000">
                    <img src="images/h-1-list-icon-img-8-300x300.jpg">
                    <div class="text">
                        <h3>Iced Caramel Latte</h3>
                        <p>Espresso, Milk, Ice and Caramel Sauce</p>
                    </div>
                </div>
                <div class="price"><p class="pri">$4.67</p></div>
            </div>
    
            <div class="item">
                <div class="img"
                data-aos="zoom-out" 
                data-aos-duration="1000">
                    <img src="images/h-1-list-icon-img-9-300x300.jpg">
                    <div class="text">
                        <h3>Caramel Macchiato</h3>
                        <p>Espresso, vanilla-flavored syrup and milk</p>
                    </div>
                </div>
                <div class="price"><p class="pri">$2.54</p></div>
            </div>
    
            <div class="item">
                <div class="img"
                data-aos="zoom-out" 
                data-aos-duration="1000">
                    <img src="images/h-1-list-icon-img-4-300x300.jpg">
                    <div class="text">
                        <h3>Caffe Americano</h3>
                        <p>Espresso Shots and Light Layer of Crema</p>
                    </div>
                </div>
                <div class="price"><p class="pri">$3.06</p></div>
            </div>

            <div class="item">
                <div class="img"
                data-aos="zoom-out" 
                data-aos-duration="1000">
                    <img src="images/h-1-list-icon-img-6-300x300.jpg">
                    <div class="text">
                        <h3>Vanilla Latte</h3>
                        <p>Espresso Milk With Flavor,and Cream</p>
                    </div>
                </div>
                <div class="price"><p class="pri">$3.65</p></div>
            </div>
    
            <div class="item">
                <div class="img"
                data-aos="zoom-out" 
                data-aos-duration="1000">
                    <img src="images/h-1-list-icon-img-10-300x300.jpg">
                    <div class="text">
                        <h3>Iced Smoked Latte</h3>
                        <p>Espresso, ice, with smoked butterscotch</p>
                    </div>
                </div>
                <div class="price">
                    <p class="pri">$3.05</p>
                    <p class="new">New</p>
                </div>
            </div>
    
            <div class="item">
                <div class="img"
                data-aos="zoom-out" 
                data-aos-duration="1000">
                    <img src="images/h-1-list-icon-img-5-300x300.jpg">
                    <div class="text">
                        <h3>Cappuccino</h3>
                        <p>Espresso, and Smoothed Layer of Foam</p>
                    </div>
                </div>
                <div class="price"><p class="pri">$4.03</p></div>
            </div>

            <div class="item">
                <div class="img"
                data-aos="zoom-out" 
                data-aos-duration="1000">
                    <img src="images/h-1-list-icon-img-9-300x300.jpg">
                    <div class="text">
                        <h3>Caramel Macchiato</h3>
                        <p>Espresso, vanilla-flavored syrup and milk</p>
                    </div>
                </div>
                <div class="price"><p class="pri">$2.54</p></div>
            </div>
    
            <div class="item">
                <div class="img"
                data-aos="zoom-out" 
                data-aos-duration="1000">
                    <img src="images/h-1-list-icon-img-11-300x300.jpg">
                    <div class="text">
                        <h3>Iced Caffe Mocha</h3>
                        <p>Espresso, bittersweet mocha sauce, milk and ice</p>
                    </div>
                </div>
                <div class="price"><p class="pri">$2.60</p></div>
            </div>
    
            <div class="item">
                <div class="img"
                data-aos="zoom-out" 
                data-aos-duration="1000">
                    <img src="images/h-1-list-icon-img-6-300x300.jpg">
                    <div class="text">
                        <h3>Vanilla Latte</h3>
                        <p>Espresso Milk With Flavor,and Cream</p>
                    </div>
                </div>
                <div class="price"><p class="pri">$3.65</p></div>
            </div>
    
            <div class="item">
                <div class="img"
                data-aos="zoom-out" 
                data-aos-duration="1000">
                    <img src="images/h-1-list-icon-img-12-300x300.jpg">
                    <div class="text">
                        <h3>Iced Gingerbread Latte</h3>
                        <p>Espresso, Milk, Ice, and Gingerbread Flavor</p>
                    </div>
                </div>
                <div class="price"><p class="pri">$3.92</p></div>
            </div>
    
        </div>
    </div>


    <!-- end menu -->


    <!-- Footer start -->
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

    <!-- end footer -->
    <button id="scrollToTopBtn" title="Go to top"><i class="fa-solid fa-arrow-up"></i></button>

    <!-- <script src="/Coffee_Shop/JS/script.js"></script>
    <script src="/Coffee_Shop/JS/pages.js"></script> -->
    <script src="JS/ALL.js"></script>
    <?php if (isset($_SESSION["user"]) && $_SESSION["user"] == "yes"): ?>
    <script>
        // Ensure you safely echo the value of $_POST["fullname"] within the JavaScript
        var fullname = <?php echo json_encode($_SESSION["name"]); ?>;
        document.getElementById('userName1').innerHTML = "Hi "+ fullname + " !";
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
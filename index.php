<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="images/coffee-shop.png">
    <!-- CSS file  -->
     <link rel="stylesheet" href="CSS/css.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Fonts  -->
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
        <div class="menu-bar ">
            <ul>
                <li><a href="index.php" style="color:#BA946D !important;">Home</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="reservation.php">Reservation</a></li>
                <li class="pages2">
                    <a href="#">Pages</a>
                    <ul class="pages-content2">
                        <li><a href="pages/offer.php">WHAT WE OFFER</a></li>
                        <li><a href="pages/our_team.php">MEET OUR TEAM</a></li>
                        <li><a href="">OUR PROCESS</a></li>
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
                    <li><a href="index.php" style="color:#BA946D !important;">HOME</a></li>
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
            <!-- <p id="userName1"><?php echo htmlspecialchars($username); ?></p> -->
            <p id="userName1">Your Name</p>
            <a href="shop/acount.php" class="login" id="login">Login</a>
            <a href="shop/logout.php" class="logout display_login" id="logout">Logout</a>
        </div>
    </header>
    <!-- Header end -->

    <!-- Start_page Start -->    
    <div class="landing">
        <div class="left"> <i class="fa-solid fa-arrow-left"></i> </div>
        <video id="background-video" muted loop style="display: none;" ></video>
        <div class="content">
            <div class="home-img">
                <img src="images/home-1-slider-img-2.png" alt="">
            </div>
            <div class="text">
                <h1>Special Coffee Beans</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Nostrum voluptas eos illo facere.</p>
                <button>
                Read More
                <div class="star-1">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xml:space="preserve"
                    version="1.1"
                    style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                    viewBox="0 0 784.11 815.53"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    >
                    <defs></defs>
                    <g id="Layer_x0020_1">
                        <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                        <path
                        class="fil0"
                        d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                        ></path>
                    </g>
                    </svg>
                </div>
                <div class="star-2">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xml:space="preserve"
                    version="1.1"
                    style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                    viewBox="0 0 784.11 815.53"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    >
                    <defs></defs>
                    <g id="Layer_x0020_1">
                        <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                        <path
                        class="fil0"
                        d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                        ></path>
                    </g>
                    </svg>
                </div>
                <div class="star-3">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xml:space="preserve"
                    version="1.1"
                    style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                    viewBox="0 0 784.11 815.53"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    >
                    <defs></defs>
                    <g id="Layer_x0020_1">
                        <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                        <path
                        class="fil0"
                        d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                        ></path>
                    </g>
                    </svg>
                </div>
                <div class="star-4">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xml:space="preserve"
                    version="1.1"
                    style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                    viewBox="0 0 784.11 815.53"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    >
                    <defs></defs>
                    <g id="Layer_x0020_1">
                        <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                        <path
                        class="fil0"
                        d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                        ></path>
                    </g>
                    </svg>
                </div>
                <div class="star-5">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xml:space="preserve"
                    version="1.1"
                    style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                    viewBox="0 0 784.11 815.53"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    >
                    <defs></defs>
                    <g id="Layer_x0020_1">
                        <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                        <path
                        class="fil0"
                        d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                        ></path>
                    </g>
                    </svg>
                </div>
                <div class="star-6">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xml:space="preserve"
                    version="1.1"
                    style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                    viewBox="0 0 784.11 815.53"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    >
                    <defs></defs>
                    <g id="Layer_x0020_1">
                        <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                        <path
                        class="fil0"
                        d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                        ></path>
                    </g>
                    </svg>
                </div>
                </button>
            </div>
        </div>
        <div class="right"><i class="fa-solid fa-arrow-right"></i></div>
        
    </div>
    <!-- Start_page end -->

    
    
    <!-- Section2 start -->
    <section class="Section2 sec2 dark">
        <div class="title">
            <h2>What Happens Here</h2>
            <h1>COFFEE BUILD YOUR BASE.</h1>
            <hr>
        </div>
        
        <div class="container">
            <div class="Card" 
            data-aos="fade-right"
            data-aos-duration="1400">
                <div class="image">
                    <img src="images/Sec2.1.jpg" alt="">
                    <div class="btn">
                        <button class="button">READ MORE</button>
                    </div>
                </div>
                <div class="Card_info">
                    <h1><span>01 </span>Beautiful Place</h1>
                    <p>Alienum phaedrum to rquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. 
                        Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri consequat an. Eius lorem tincidunt vix atle.</p>
                        <a href="">READ MORE <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
            </div>
                
                
            <div class="Card"
            data-aos="zoom-out" 
            data-aos-duration="1000">
                <div class="image">
                    <img src="images/image.png" alt="">
                    <div class="btn">
                        <button class="button">READ MORE</button>
                    </div>
                </div>
                <div class="Card_info">
                    <h1><span>02 </span>FEEL THE COFFEE</h1>
                    <p>Alienum phaedrum to rquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. 
                        Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri consequat an. Eius lorem tincidunt vix atle.</p>
                        <a href="">READ MORE <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
            </div>

            <div class="Card"
                data-aos="fade-left"
                data-aos-duration="1400">
                    <div class="image">
                        <img src="images/sec2.3.jpg" alt="">
                        <div class="btn">
                            <button class="button"
                            data-aos="flip-down" 
                            data-aos-duration="1000">READ MORE</button>
                        </div>
                    </div>
                    <div class="Card_info">
                        <h1><span>03 </span>FULL TASTE</h1>
                    <p>Alienum phaedrum to rquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. 
                        Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri consequat an. Eius lorem tincidunt vix atle.</p>
                        <a href="">READ MORE <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
            </div>
        </div>
        
    </section>
    <!-- Section2 end -->
    
    
    <!-- Section4 start -->
    <section class="Section4 ">
        <div class="Card" 
        data-aos="fade-right"
        data-aos-duration="1400">
            <div class="image">
                <img src="images/sec4.1.png" alt="">
            </div>
            <div class="Card_info">
                <h1>Coffeemaker</h1>
                <p>Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei an pericula.</p>
            </div>
        </div>
        
        
        <div class="Card"
        data-aos="fade-right"
        data-aos-duration="1400">
            <div class="image">
                <img src="images/sec4.2.png" alt="">
            </div>
            <div class="Card_info">
                <h1>COFFEE GRINDER</h1>
                <p>Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei an pericula.</p>
            </div>
        </div>
        
        <div class="Card"
        data-aos="fade-left"
        data-aos-duration="1400">
            <div class="image">
                <img src="images/sec4.3.png" alt="">
            </div>
            <div class="Card_info">
                <h1>COFFEE Cups</h1>
                <p>Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei an pericula.</p>
            </div>
        </div>
        <div class="Card"
        data-aos="fade-left"
        data-aos-duration="1400">
            <div class="image">
                <img src="images/sec4.4.png" alt="">
            </div>
            <div class="Card_info">
                <h1>ESPRESSO MACHINE</h1>
                <p>Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei an pericula.</p>
            </div>
        </div>
        
    </section>
    <!-- Section4 end -->

    <!-- Home_slider start  -->
    <div class="home_slider">
        <div class="left">
        
            <div class="content">
                <h3>TRY THE BEST COFFEE IN THE CITY</h3>
                <br><br>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum odio rem laboriosam praesentium pariatur asperiores itaque tempore, incidunt fuga expedita.</p>
                <br> 
                <a href="#">Read More  <span><i style="color: white;" class="fa-solid fa-arrow-right"></i></span></a>
            </div>
        </div>
        
        <div class="right">  
            
            <div class="slider-wrapper">
            
              <div class="slider">
                <img src="images/s1.jpg" alt="Image 1" id="img1">
                <img src="images/s2.jpg" alt="Image 2" id="img2">
                <img src="images/s3.jpg" alt="Image 3" id="img3">
              </div>

              <div class="slider-nav">
                    <a href="#img1"></a>
                    <a href="#img2"></a>
                    <a href="#img3"></a>
              </div>
           
            </div>
        </div>

    </div>
    <!-- Home_slider end  -->
     
     
    <!-- Section6 Start -->
    <div class="cont">
        <div class="title">
            <h3>What Happens Here</h3>
            <h1>Favourite Coffee flavours.</h1>
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
        <div class="btn">
            <a href="menu.php"><button data-aos="flip-down" 
            data-aos-duration="1400">view menu</button></a>
        </div>
    </div>
    <!-- Section6 end -->

    <!-- Gallary start  -->
    <div class="gallery">
        <div class="col">
            <img src="images/home-1-gallery-1.jpg" alt="" class="img1">
        </div>
        <div class="col">
            <img src="images/home-1-gallery-2.jpg" class="img2" alt="">
            <img src="images/home-1-gallery-5-633x633.jpg" class="img2" alt="">
        </div>
        <div class="col">
            <img src="images/home-1-gallery-3.jpg" alt="" class="img3">
            <img src="images/home-1-gallery-6-633x633.jpg" alt="" class="img3">
        </div>
        <div class="col">
            <img src="images/home-1-gallery-4-500x1000.jpg" alt="" class="img4">
        </div>
    </div>

    <div id="popup" class="popup" style="display:none;">
        <div id="closePopup"><i class="fa-solid fa-xmark"></i></div>
        <img id="popupImage" src="" alt="Popup Image">
        <div id="imageCounter"></div>
        <button id="prevButton"><i class="fa-solid fa-chevron-left"></i></button>
        <button id="nextButton"><i class="fa-solid fa-chevron-right"></i></button>
    </div>
    <!-- Gallary end  -->
     
    <!-- Section7 start -->
    <section class="Section7">
        <div class="title">
            <h2>What Happens Here</h2>
            <h1>COFFEE BUILD YOUR BASE.</h1>
            <hr>
        </div>
        
        <div class="container">
            <div class="Card product-img add_to_cart"
            data-aos="zoom-in" 
            data-aos-duration="1000">
                <div class="image">
                    <span class="sale">Sale</span>
                    <div class="pic"
                    data-product="1"
                    data-quantity=1>
                        <a class="product_1" href="shop/single_product.php" >
                            <img src="images/product-image-1.jpg" alt="">
                        </a>
                    </div>
                    <div class="btn">
                        <button class="ADD_TO_CART"
                        data-id="1"
                        data-title="Paper Pouch"
                        data-image="../images/product-image-1.jpg"
                        data-price="46.00"
                        data-quantity="1">
                            <i class="bi bi-bag" ></i>   Add To Cart
                        </button>
                    </div>
                </div>
                <div class="Card_info">
                    <h1>Paper Pouch</h1>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="price">
                        <span class="new">$46.00</span>
                    </div>
                    </div>
                </div>


            <div class="Card product-img add_to_cart"
            data-aos="zoom-in" 
            data-aos-duration="1000" >
                <div class="image">
                    <div class="pic"
                     data-product="2"
                     data-quantity=1>
                        <a class="product_2" href="shop/single_product.php">
                            <img  src="images/product-image-2.jpg" alt="">
                        </a>
                    </div>
                    <div class="btn">
                        <button class="ADD_TO_CART"
                        data-id="2"
                        data-title="Paper Bag"
                        data-image="../images/product-image-2.jpg"
                        data-price="79.00"
                        data-quantity="1">
                            <i class="bi bi-bag" ></i>   Add To Cart
                        </button> 
                    </div>
                </div>
                <div class="Card_info">
                    <h1>Paper Bag</h1>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="price">
                        <span class="new">$79.00</span>
                    </div>
                    </div>
                </div>


            <div class="Card product-img add_to_cart"
            data-aos="zoom-in" 
            data-aos-duration="1000">
                <div class="image">
                    <div class="pic"
                     data-product="3"
                     data-quantity=1>
                        <a class="product_3" href="shop/single_product.php" >
                            <img src="images/product-image-3-633x633.jpg" alt="">
                        </a>
                    </div>
                    <div class="btn">
                        <button class="ADD_TO_CART"
                        data-id="3"
                        data-title="Paper Pouch"
                        data-image="../images/product-image-3-633x633.jpg"
                        data-price="27.00"
                        data-quantity="1">
                            <i class="bi bi-bag" ></i>   Add To Cart
                        </button>
                    </div>
                </div>
                <div class="Card_info">
                    <h1>Paper Pouch</h1>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="price">
                        <span class="new">$27.00</span>
                    </div>
                </div>
            </div>


            <div class="Card product-img add_to_cart" 
            data-aos="zoom-in" 
            data-aos-duration="1000">
                <div class="image">
                    <div class="pic"
                     data-product="4"
                     data-quantity=1>
                        <a class="product_4" href="shop/single_product.php" > 
                            <img src="images/product-image-4-633x633.jpg" alt="">
                        </a>
                    </div>
                    <div class="btn">
                        <button class="ADD_TO_CART"
                        data-id="4"
                        data-title="Coffee Pot"
                        data-image="../images/product-image-4-633x633.jpg"
                        data-price="71.00"
                        data-quantity="1">
                            <i class="bi bi-bag" ></i>   Add To Cart
                        </button>
                    </div>
                </div>
                <div class="Card_info">
                    <h1>Coffee Pot</h1>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="price">
                        <span class="new">$71.00</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn2">
            <a href="shop/products.php"><button data-aos="flip-down" 
            data-aos-duration="1400">More Products</button></a>
        </div>
        
    </section>
    <!-- Section7 end -->

    <!-- Section9 start -->
    <section class="Section9 Section2">
        <div class="title">
            <h2>What Happens Here</h2>
            <h1>COFFEE BUILD YOUR BASE.</h1>
            <hr>
        </div>

        <div class="container">
            <div class="Card">
                <div class="image"
                data-aos="zoom-out"
                data-aos-duration="1400">
                    <img src="images/sec9.1.jpg" alt="">
                    <div class="btn">
                        <button class="button">READ MORE</button>
                    </div>
                </div>
                <div class="Card_info">
                    <h1>Make it Simple</h1>
                    <p class="p1">by Jane Doe / Competition / 23.01.2017</p>
                    <p>Alienum phaedrum to rquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. 
                        Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri consequat an. Eius lorem tincidunt vix atle.</p>
                        <a href="">READ MORE <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            
            
            <div class="Card">
                <div class="image"
                data-aos="zoom-out"
                data-aos-duration="1400">
                    <img src="images/sec9.2.jpg" alt="">
                    <div class="btn">
                        <button class="button">READ MORE</button>
                    </div>
                </div>
                <div class="Card_info">
                    <h1>Coffee Shop</h1>
                    <p class="p1">by Jane Doe / Competition / 23.01.2017</p>
                    <p>Alienum phaedrum to rquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. 
                        Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri consequat an. Eius lorem tincidunt vix atle.</p>
                        <a href="">READ MORE <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="Card">
                <div class="image"
                data-aos="zoom-out"
                data-aos-duration="1400">
                    <img src="images/sec9.3.jpg" alt="">
                    <div class="btn">
                        <button class="button">READ MORE</button>
                    </div>
                </div>
                <div class="Card_info">
                    <h1>Coffee Bar</h1>
                    <p class="p1">by Jane Doe / Competition / 23.01.2017</p>
                    <p>Alienum phaedrum to rquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. 
                        Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri consequat an. Eius lorem tincidunt vix atle.</p>
                    <a href="">READ MORE <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Section9 end -->
    
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
    <!-- Footer end -->
    <button id="scrollToTopBtn" title="Go to top"><i class="fa-solid fa-arrow-up"></i></button>
    <!-- <button id="DarkBtn"><i class="fa-solid fa-circle-half-stroke"></i></button> -->

    <script src="JS/index.js"></script>
    <script src="JS/ALL.js"></script>
    <script src="JS/Gallary.js"></script>
    <script src="JS/home_slider.js"></script>
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
    <!-- <script src="JS/pages.js"></script> -->
</body>
</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="icon" href="../images/coffee-shop.png">
    <!-- CSS file  -->
     <link rel="stylesheet" href="../CSS/shop.css">
     <!-- <link rel="stylesheet" href="/Coffee_Shop/CSS/css.css"> -->
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
            <img src="../images/logo-1.png" alt="">
        </div>
        <div class="menu-icon"><i class="fa-solid fa-bars"></i></div>
        <div class="menu-bar">
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../menu.php">Menu</a></li>
                <li><a href="../reservation.php">Reservation</a></li>
                <li class="pages2">
                    <a href="#">Pages</a>
                    <ul class="pages-content2">
                        <li><a href="../pages/offer.php">WHAT WE OFFER</a></li>
                        <li><a href="../pages/our_team.php">MEET OUR TEAM</a></li>
                        <li><a href="../pages/Our_process.php">OUR PROCESS</a></li>
                        <li><a href="../pages/contact_us.php">CONTACT US</a></li>
                    </ul>
                </li>

                <li><a href="../about_us.php">About Us</a></li>
                <li class="pages2">
                    <a href="#" style="color:#BA946D !important;">Shop</a>
                    <ul class="pages-content2">
                        <li><a href="../shop/acount.php">MY ACCOUNT</a></li>
                        <li><a href="../shop/cart.php">CART</a></li>
                        <li><a href="../shop/products.php" style="color:#BA946D !important;">PRODUCTS</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="logo">
            <img id="logo" src="../images/logo-2.png" alt="">
        </div>

        <div class="box">
            <div class="links">
                <ul>
                    <li><a href="../index.php">HOME</a></li>
                    <li><a href="../menu.php">MENU</a></li>
                    <li><a href="../reservation.php">RESERVATON</a></li>
                    <li class="pages">
                        <a href="#">PAGES</a>
                        <ul class="pages-content">
                            <li><a href="../pages/offer.php">WHAT WE OFFER</a></li>
                            <li><a href="../pages/our_team.php">MEET OUR TEAM</a></li>
                            <li><a href="../pages/Our_process.php">OUR PROCESS</a></li>
                            <li><a href="../pages/contact_us.php">CONTACT US</a></li>
                        </ul>
                    </li>
                    <li><a href="../about_us.php">About Us</a></li>
                    <li class="pages">
                        <a href="#" style="color:#BA946D !important;">SHOP</a>
                        <ul class="pages-content">
                            <li><a href="../shop/acount.php">MY ACCOUNT</a></li>
                            <li><a href="../shop/cart.php">CART</a></li>
                            <li><a href="../shop/products.php" style="color:#BA946D !important;">PRODUCTS</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="icons">
                <a href="cart.php"><i class="fa-solid fa-cart-shopping"><span class="Span_Cart">0</span></i></a>
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
            <div class="img-bar"><img src="../images/sidearea-logo.png" alt=""></div>
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
            <div class="user_img"><img src="../images/user2.png" alt=""></div>
            <p id="userName1">Your Name</p>
            <a href="../shop/acount.php" class="login" id="login">Login</a>
            <a href="../shop/logout.php" class="logout display_login" id="logout">Logout</a>
        </div>
    </header>
    <!-- Header end -->

    <!-- start Shop -->
    <div class="aboutUs">
        <h2>Shop</h2>
    </div>
    <!-- end Shop -->

     <!-- Section7 start -->
     <section class="Section7 dark">
        <!-- <div class="title">
            <h2>What Happens Here</h2>
            <h1>COFFEE BUILD YOUR BASE.</h1>
            <hr>
        </div> -->
        

        <div class="side1">
            <!-- <div class="item_list">
                <ul>
                    <li><a class="item_link menu-active" data-name="all">h</a></li>
                    <li><a class="item_link" data-name="B">nk</a></li>
                    <li><a class="item_link" data-name="C">;l</a></li>
                    <li><a class="item_link" data-name="D">l</a></li>
                </ul>
                <select name="" id="">
                    <option value=""><button class="item_link menu-active" data-name="all" >Popularity</button></option> 
                    <option value=""><button class="item_link" data-name="B">Average Rating</button></option>
                    <option value=""><button class="item_link" data-name="C">Latest</button></option>
                    <option value=""><button class="item_link" data-name="D">Price: Low to High</button></option>
                    <option value=""><button class="item_link" data-name="D">Price: High to Low</button></option>
                </select>
            </div> -->
            
            <div class="select">
                <div
                  class="selected"
                  data-default="Popularity"
                  data-one="Average Rating"
                  data-two="Latest"
                  data-three="Price: Low to High"
                  data-four="Price: High to Low"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    height="1em"
                    viewBox="0 0 512 512"
                    class="arrow"
                  >
                    <path
                      d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"
                    ></path>
                  </svg>
                </div>
                <div class="item_list">
                    <div class="options">
                        <div title="all">
                            <input id="all" name="option" type="radio" checked="" />
                            <label class="option item_link menu-active" for="all" data-txt="Popularity" data-name="all"></label>
                        </div>
                        <div title="option-1">
                            <input id="option-1" name="option" type="radio" />
                            <label class="option item_link" for="option-1" data-txt="Average Rating" data-name="B"></label>
                        </div>
                        <div title="option-2">
                            <input id="option-2" name="option" type="radio" />
                            <label class="option item_link" for="option-2" data-txt="Latest" data-name="C"></label>
                        </div>
                        <div title="option-3">
                            <input id="option-3" name="option" type="radio" />
                            <label class="option item_link" for="option-3" data-txt="Price: Low to High" data-name="D"></label>
                        </div>
                        <div title="option-4">
                            <input id="option-4" name="option" type="radio" />
                            <label class="option item_link" for="option-4" data-txt="Price: High to Low" data-name="E"></label>
                        </div>
                    </div>
                </div>  
            </div>
              
            <div class="container">
                <div class="Card product-img"
                data-name="B"
                data-aos="fade-right"
                data-aos-duration="1400">
                    <div class="image">
                        <span class="sale">Sale</span>
                        <div class="pic" data-product="1"
                        data-quantity="1">
                            <a class="product_1" href="../shop/single_product.php" >
                                <img src="../images/product-image-1.jpg" alt="">
                            </a>
                        </div>
                        <div class="btn">
                            <button class="ADD_TO_CART"
                            data-id="1"
                            data-title="Paper Pouch"
                            data-image="../images/product-image-1.jpg"
                            data-price="46.00"
                            data-quantity=1>
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


                <div class="Card product-img" 
                data-name="B"
                data-aos="zoom-out"
                data-aos-duration="1400">
                    <div class="image">
                        <div class="pic" data-product="2">
                            <a class="product_2" href="../shop/single_product.php">
                                <img  src="../images/product-image-2.jpg" alt="">
                            </a>
                        </div>
                        <div class="btn">
                            <button class="ADD_TO_CART"
                            data-id="2"
                            data-title="Paper Bag"
                            data-image="../images/product-image-2.jpg"
                            data-price="79.00"
                            data-quantity=1>
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


                <div class="Card product-img"
                 data-name="B"
                 data-aos="fade-left"
                 data-aos-duration="1400">
                    <div class="image">
                        <div class="pic" data-product="3">
                            <a class="product_3" href="../shop/single_product.php" >
                                <img src="../images/product-image-3-633x633.jpg" alt="">
                            </a>
                        </div>
                        <div class="btn">
                            <button class="ADD_TO_CART"
                            data-id="3"
                            data-title="Paper Pouch"
                            data-image="../images/product-image-3-633x633.jpg"
                            data-price="27.00"
                            data-quantity=1>
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


                <div class="Card product-img" 
                data-name="C"
                data-aos="fade-right"
                data-aos-duration="1400">
                    <div class="image">
                        <div class="pic" data-product="4">
                            <a class="product_4" href="../shop/single_product.php" > 
                                <img src="../images/product-image-4-633x633.jpg" alt="">
                            </a>
                        </div>
                        <div class="btn">
                            <button class="ADD_TO_CART"
                            data-id="4"
                            data-title="Coffee Pot"
                            data-image="../images/product-image-4-633x633.jpg"
                            data-price="71.00"
                            data-quantity=1>
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
                        <span class="old">$98.00</span>
                            <span class="new">$71.00</span>
                        </div>
                    </div>
                </div>


                <div class="Card product-img"
                data-name="D"
                data-aos="zoom-out"
                data-aos-duration="1400">
                    <div class="image">
                        <div class="pic" data-product="5">
                          <a class="product_5" href="../shop/single_product.php" >
                            <img src="../images/product-image-7-1-550x550.jpg" alt="">
                        </a>
                        </div>
                        <div class="btn">
                            <button class="ADD_TO_CART"
                            data-id="5"
                            data-title="Choco Bites"
                            data-image="../images/product-image-7-1-550x550.jpg"
                            data-price="54.00"
                            data-quantity=1>
                                <i class="bi bi-bag" ></i>   Add To Cart
                            </button>
                        </div>
                    </div>
                    <div class="Card_info">
                        <h1>Choco Bites</h1>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                        <div class="price">
                            <span class="new">$54.00</span>
                        </div>
                    </div>
                </div>


                <div class="Card product-img" 
                data-name="C"
                data-aos="fade-left"
                data-aos-duration="1400">
                    <div class="image">
                        <span class="sale">Sale</span>
                        <div class="pic" data-product="6">
                            <a class="product_6" href="../shop/single_product.php" >
                                <img src="../images/product-image-6-633x633.jpg" alt="">
                            </a>
                        </div>
                        <div class="btn">
                            <button class="ADD_TO_CART"
                            data-id="6"
                            data-title="Paper Cup"
                            data-image="../images/product-image-6-633x633.jpg"
                            data-price="31.00"
                            data-quantity=1>
                                <i class="bi bi-bag" ></i>   Add To Cart
                            </button>
                        </div>
                    </div>
                    <div class="Card_info">
                        <h1>Paper Cup</h1>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                        <div class="price">
                            <span class="new">$31.00</span>
                        </div>
                    </div>
                </div>


                <div class="Card product-img" 
                data-name="D"
                data-aos="fade-right"
                data-aos-duration="1400">
                    <div class="image">
                        <div class="pic" data-product="7">
                          <a class="product_7" href="../shop/single_product.php" >
                            <img src="../images/product-image-8-1-633x633.jpg" alt="">
                        </a>
                        </div>
                        <div class="btn">
                            <button class="ADD_TO_CART"
                            data-id="7"
                            data-title="Ground Coffe"
                            data-image="../images/product-image-8-1-633x633.jpg"
                            data-price="63.00"
                            data-quantity=1>
                                <i class="bi bi-bag" ></i>   Add To Cart
                            </button>
                        </div>
                    </div>
                    <div class="Card_info">
                        <h1>Ground Coffee</h1>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                        <div class="price">
                            <span class="new">$63.00</span>
                        </div>
                        </div>
                    </div>


                <div class="Card product-img" 
                data-name="E"
                data-aos="zoom-out"
                data-aos-duration="1400">
                    <div class="image">
                        <div class="pic" data-product="8">
                            <a class="product_8" href="../shop/single_product.php" >
                                <img src="../images/product-image-9-1-633x633.jpg" alt="">
                            </a>
                        </div>
                        <div class="btn">
                            <button class="ADD_TO_CART"
                            data-id="8"
                            data-title="Moka Pot"
                            data-image="../images/product-image-9-1-633x633.jpg"
                            data-price="75.00"
                            data-quantity=1>
                                <i class="bi bi-bag" ></i>   Add To Cart
                            </button>
                        </div>
                    </div>
                    <div class="Card_info">
                        <h1>Moka Pot</h1>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                        <div class="price">
                            <span class="new">$75.00</span>
                        </div>
                        </div>
                    </div>

                <div class="Card product-img" 
                data-name="E"
                data-aos="fade-left"
                data-aos-duration="1400">
                    <div class="image">
                        <div class="pic" data-product="9">
                            <a class="product_9" href="../shop/single_product.php" >
                                <img src="../images/product-image-10-1-633x633.jpg" alt="">
                            </a>
                        </div>
                        <div class="btn">
                            <button class="ADD_TO_CART"
                            data-id="9"
                            data-title="Cafe Bags"
                            data-image="../images/product-image-10-1-633x633.jpg"
                            data-price="18.00"
                            data-quantity=1>
                                <i class="bi bi-bag" ></i>   Add To Cart
                            </button>
                        </div>
                    </div>
                    <div class="Card_info">
                        <h1>Cafe Bags</h1>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                        <div class="price">
                        <span class="old">$32.00</span>
                            <span class="new">$18.00</span>
                        </div>
                        </div>
                    </div>
                    
                    <div class="Card product-img" 
                    data-name="E"
                    data-aos="fade-right"
                    data-aos-duration="1400">
                        <div class="image">
                            <span class="sale">Sale</span>
                            <div class="pic" data-product="10">
                                <a class="product_10" href="../shop/single_product.php" >
                                    <img src="../images/product-image-11-1-633x633.jpg" alt="">
                                </a>
                            </div>
                            <div class="btn">
                                <button class="ADD_TO_CART"
                                data-id="10"
                                data-title="Tea Cup"
                                data-image="../images/product-image-11-1-633x633.jpg"
                                data-price="26.00"
                                data-quantity=1>
                                    <i class="bi bi-bag" ></i>   Add To Cart
                                </button>
                            </div>
                    </div>
                    <div class="Card_info">
                        <h1>Tea Cup</h1>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                        <div class="price">
                            <span class="new">$26.00</span>
                        </div>
                        </div>
                    </div>
                     
                    
                <div class="Card product-img"
                data-name="C"
                data-aos="zoom-out"
                data-aos-duration="1400">
                    <div class="image">
                        <div class="pic" data-product="11">
                             <a class="product_11" href="../shop/single_product.php" >
                                <img src="../images/product5.jpg" alt="">
                            </a>
                        </div>
                        <div class="btn">
                            <button class="ADD_TO_CART"
                            data-id="11"
                            data-title="Tea Pot"
                            data-image="../images/product5.jpg"
                            data-price="46.00"
                            data-quantity=1>
                                <i class="bi bi-bag" ></i>   Add To Cart
                            </button>
                        </div>
                    </div>
                    <div class="Card_info">
                        <h1>Tea Pot</h1>
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

                <div class="Card product-img" 
                data-name="D"
                data-aos="fade-left"
                data-aos-duration="1400">
                        <div class="image">
                            <div class="pic" data-product="12">
                                <a class="product_12" href="../shop/single_product.php" >
                                    <img src="../images/product-image-12-633x633.jpg" alt="">
                                </a>
                            </div>
                            <div class="btn">
                                <button class="ADD_TO_CART"
                                data-id="12"
                                data-title="Recycled Bags"
                                data-image="../images/product-image-12-633x633.jp"
                                data-price="22.00"
                                data-quantity=1>
                                    <i class="bi bi-bag" ></i>   Add To Cart
                                </button>
                            </div>
                        </div>
                        <div class="Card_info">
                            <h1>Recycled Bags</h1>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span class="new">$22.00</span>
                            </div>
                            </div>
                </div>
            </div>
        </div>

        <div class="side2">
            <div class="first">
                <div class="title">
                    <h3>Recently Viewed Products</h3>
                    <!-- <hr> -->
                </div>

                <div class="info">
                    <div class="sec">
                        <div class="image"><img src="../images/product-image-1.jpg" alt=""></div>
                        <div class="price">
                            <p style="text-transform: uppercase; letter-spacing: -1px;">Paper Bag</p>
                            <span class="new">$46.00</span>
                        </div>
                    </div>
                </div>
                <div class="info">
                    <div class="sec">
                        <div class="image"><img src="../images/product-image-2.jpg" alt=""></div>
                        <div class="price">
                            <p style="text-transform: uppercase; letter-spacing: -1px;">Paper Bag</p>
                            <span class="old">$98.00</span>
                            <span class="new">$79.00</span>
                        </div>
                    </div>
                </div>
                
                <div class="info">
                    <div class="sec">
                        <div class="image"><img src="../images/product5.jpg" alt=""></div>
                        <div class="price">
                            <p style="text-transform: uppercase; letter-spacing: -1px;">Paper Bag</p>
                            <span class="new">$46.00</span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="first">
                <div class="title">
                    <h3>Top Rated Products</h3>
                    <!-- <hr> -->
                </div>

                <div class="info">
                    <div class="sec">
                        <div class="image"><img src="../images/product-image-9-1-633x633.jpg" alt=""></div>
                        <div class="price">
                            <p style="text-transform: uppercase; letter-spacing: -1px;">Moka Pot</p>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <span class="old">$98.00</span>
                            <span class="new">$75.00</span>
                        </div>
                    </div>
                </div>
                <div class="info">
                    <div class="sec">
                        <div class="image"><img src="../images/product-image-3-633x633.jpg" alt=""></div>
                        <div class="price">
                            <p style="text-transform: uppercase; letter-spacing: -1px;">Plastic Pouch</p>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <span class="new">$27.00</span>
                        </div>
                    </div>
                </div>

                <div class="info">
                    <div class="sec">
                        <div class="image"><img src="../images/product-image-10-1-633x633.jpg" alt=""></div>
                        <div class="price">
                            <p style="text-transform: uppercase; letter-spacing: -1px;">Cafe Bags</p>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <span class="new">$18.00</span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="first">
                <div class="title">
                    <h3>Tags</h3>
                    <!-- <hr> -->
                </div>

                <div class="info">
                    <div class="p">
                        <p>Coffee Cup</p>
                        <p>Coffee Pot</p>
                        <p>Coffee Treats</p>
                        <p>Ground Coffee</p>
                        <p>Paper Bag</p>  
                    </div>
                </div>                
            </div>
            <div class="first">
                <div class="image_widget">
                    <img src="../images/shop-sidebar-widget.jpg" alt="">
                </div>            
            </div>


            <!-- <div class="second">
                <div class="title">
                    <h3>Recently Viewed Products</h3>
                    <hr>
                </div>

                <div class="info">
                    <div class="sec">
                        <p>H</p>
                        <p>g</p>
                        <p>hh</p>
                        <p>k</p>
                    </div>
                </div>
                <div class="info">
                    <div class="sec">
                        <p>H</p>
                        <p>g</p>
                        <p>hh</p>
                        <p>k</p>
                    </div>
                </div>
                

            </div> -->
        </div>
        
        
    </section>
    <!-- Section7 end -->
    
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

    <!-- <script src="/Coffee_Shop/JS/script.js"></script>
    <script src="/Coffee_Shop/JS/pages.js"></script> -->
    <script src="../JS/ALL2.js"></script>
    <script src="../JS/products.js"></script>
    <?php if (isset($_SESSION["user"]) && $_SESSION["user"] == "yes"): ?>
    <script>
        // Ensure you safely echo the value of $_POST["fullname"] within the JavaScript
        var fullname = <?php echo json_encode($_SESSION["name"]); ?>;
        document.getElementById('userName1').innerHTML =  "Hi "+ fullname + " !";
        document.getElementById('login').classList.add('display_login');
        document.getElementById('logout').classList.remove('display_login');
    </script>
    <?php endif; ?>

    <!-- <script src="/Coffee_Shop/JS/cart.js"></script> -->
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
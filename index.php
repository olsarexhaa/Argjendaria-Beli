<?php
    session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<html lang="en">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Ephesis:wght@400;700&display=swap">
        <link rel="stylesheet" href="dizajni.css">
        <script src="main.js"></script>
        <title>Argjendaria Beli</title>
        <script src="https://kit.fontawesome.com/3b161c540c.js" crossorigin="anonymous"></script>
    </head>
    <header>
        <div class="header">       
        <button
            class="button1"
            link
            rel="stylesheet"
            href="login.php"
        >
            <span>
              <a href="cart.php">
                <ion-icon name="cart-outline" class="icon"></ion-icon>
              </a>
            </span>
        </button>
        <button class="loginform">
            <h1 style="display: inline; font-size:25px; ">
                    <?php echo $_SESSION['user']['username'] ?? ""; ?>
            </h1>
                <?php 
                    if(!isset($_SESSION['user'])){
                        ?>
                        <a href="login.php">

                            <span class="icon1">
                                <ion-icon name="person-outline">Log in</ion-icon>
                            </span>
                        </a>
                        <?php
                    }
                ?>
            <button class="kontakt">
                <a href="kontakt.php">
                    <span class="icon1">
                        <iconify-icon icon="ion:chatbubbles-outline"></iconify-icon>
                    </span>
                </a>
        </button>
        <h1>Argjendaria Beli</h1>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="shopnow.php">Shop</a></li>
            <li><a href="earrings.php">Earings</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <?php

                if(isset($_SESSION['user']) && $_SESSION['user']['usertype'] == 'admin'){
                    echo '<li><a href="admin/dashboard.php">Admin</a></li>';
                }
            ?>
            <?php
                if(isset($_SESSION['user'])){
                    ?>
                    <li><a href="actions/logout.php">Logout</a></li>
                    <?php
                }

            ?>
          </ul>
        </div>
    <body> 
        <div class="slider-container">
            <div class="slides">
              <div class="slide">
                <img src="fotot/slide4.jpg" alt="Slide 1">
                <div class="slide-content">
                  <h2> Enjoy 20% Off on Our Exquisite Valentine's Day Jewelry Collection – Elevate Your Romance with Timeless Elegance!"</h2>
                  <a href="shopnow.php">
                    <button class="btn">Shop now</button>
                </a>
                </div>
              </div>
              <div class="slide">
                <img src="fotot/slide5.jpg" alt="Slide 2">
                <div class="slide-content">
                  <h2>"Adorn Your Elegance: Where Every Pair of Earrings Tells a Story of Style and Sophistication!"</h2>
                  <a href="earrings.php">
                    <button class="btn">Earings</button>
                </a>
                </div>
              </div>
              <div class="slide">
                <img src="fotot/slide6.jpg" alt="Slide 3">
                <div class="slide-content">
                  <h2>"Discover Our Story: Crafting Moments, Connecting Lives - Unveiling the Heart and Passion Behind Argjendaria Beli."</h2>
                  <a href="aboutus.php">
                    <button class="btn">About Us</button>
                </a>
                </div>
              </div>
            </div>
            
            <button class="slider-btn prev-btn" onclick="prevSlide()">❮</button>
            <button class="slider-btn next-btn" onclick="nextSlide()">❯</button>
          
            <div class="nav-btns">
              <span class="dot" onclick="currentSlide(1)"></span>
              <span class="dot" onclick="currentSlide(2)"></span>
              <span class="dot" onclick="currentSlide(3)"></span>
            </div>
          </div>
        <div class="bodyifaqes">
            <h2 class="quote">
                "Crafting Elegance, Glistening Dreams: Gjakova's Finest Gold Jewelers"
              </h2>
            <div class="foto2">
                <img
                    src="fotot/IMG_7603.jpg"
                    class="foto2a"
                    width="400px"
                    height="400px"
                >
                <h1>Set i qafes dhe dores</h1>
                <p class="price">390.90 $</p>
                <p>
                    <button>Add to Cart</button>
                </p>
            </div>
            <div class="foto3">
                <img
                    src="fotot/IMG_7604.jpg"
                    class="foto3a"
                    width="400px"
                    height="400px"
                >
                <h1>Set i qafes dhe dores</h1>
                <p class="price">390.90 $</p>
                <p>
                    <button>Add to Cart</button>
                </p>
            </div>
            <div class="foto4">
                <img
                    src="fotot/IMG_7605.jpg"
                    class="foto4a"
                    width="400px"
                    height="400px"
                >
                <h1>Set i qafes dhe dores</h1>
                <p class="price">390.90 $</p>
                <p>
                    <button>Add to Cart</button>
                </p>
            </div>
            <div class="foto5">
                <img
                    src="fotot/IMG_7606.jpg"
                    class="foto5a"
                    width="400px"
                    height="400px"
                >
                <h1>Set i qafes dhe dores</h1>
                <p class="price">390.90 $</p>
                <p>
                    <button>Add to Cart</button>
                </p>
            </div>
            <div class="foto6">
                <img
                    src="fotot/IMG_7607.jpg"
                    class="foto6a"
                    width="400px"
                    height="400px"
                >
                <h1>Set i qafes dhe dores</h1>
                <p class="price">390.90 $</p>
                <p>
                    <button>Add to Cart</button>
                </p>
            </div>
            <div class="foto7">
                <img
                    src="fotot/IMG_7608.jpg"
                    class="foto7a"
                    width="400px"
                    height="400px"
                >
                <h1>Set i qafes dhe dores</h1>
                <p class="price">390.90 $</p>
                <p>
                    <button>Add to Cart</button>
                </p>
            </div>
        </div>
        </section>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    </body>
        <footer>
        <p>&copy; 2023 Argjendaria Beli</p>
        <div class="words">
            <a href="aboutus.php">About Us</a>
            <a href="findus.php">Find Us</a>
            <a href="#contact">Contact</a>
        </div>
        <div class="social-icons">
            <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="#" target="_blank"><i class="fab fa-tiktok"></i></a>
            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
        </footer>
</html>
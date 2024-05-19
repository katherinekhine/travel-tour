<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Custom CSS Link -->
    <link rel="stylesheet" href="./css/style.css?<?php echo time(); ?>">
    <!-- swiper css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
    <!-- header section start -->
    <section class="header">
        <a href="index.php" class="logo">travel.</a>
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Packages</a>
            <a href="book.php">Book</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- header section end -->

    <!-- Home section start -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background: url(img/home.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel around the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background: url(img/home-1.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>discover the new places</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background: url(img/home-2.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>make your tour worthwhile</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- Home section end -->

    <!-- service section start -->
    <section class="services">
        <h1 class="heading-title"> Our Services</h1>
        <div class="box-container service-ani">
            <div class="box">
                <img src="img/adventure.png" alt="">
                <h3>adventure</h3>
            </div>
            <div class="box">
                <img src="img/path.png" alt="">
                <h3>tour guide</h3>
            </div>
            <div class="box">
                <img src="img/mountain.png" alt="">
                <h3>trekking</h3>
            </div>
            <div class="box">
                <img src="img/fire.png" alt="">
                <h3>camp fire</h3>
            </div>
            <div class="box">
                <img src="img/signpost.png" alt="">
                <h3>off road</h3>
            </div>
            <div class="box">
                <img src="img/tent.png" alt="">
                <h3>camping</h3>
            </div>
        </div>
    </section>
    <!-- service section end -->

    <!-- home about section start -->
    <section class="home-about">
        <div class="image">
            <img src="img/travel-2.jpg" alt="">
        </div>
        <div class="content">
            <h3>about us</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas culpa ut repellendus, nesciunt delectus maiores consectetur asperiores ex laboriosam molestiae.</p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </section>
    <!-- home about section end -->

    <!-- home package section start  -->
    <section class="home-package">
        <h1 class="heading-title">Our Package</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="img/travel.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="img/travel-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="img/travel-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
        </div>
        <div class="load-more">
            <a href="package.php" class="btn">Load More</a>
        </div>
    </section>
    <!-- home package section start  -->


    <!-- home offer section start -->
    <section class="home-offer">
        <div class="content">
            <h3>Upto 30% off</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur, deserunt. Assumenda rem temporibus dolorum beatae?</p>
            <a href="book.php" class="btn">Book Now</a>
        </div>
    </section>
    <!-- home offer section end -->

    <!-- footer section start  -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="index.php"><i class="fas fa-angle-right"></i>Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
                <a href="package.php"><i class="fas fa-angle-right"></i>Packages</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
            </div>
            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
                <a href="#"><i class="fas fa-angle-right"></i>about us</a>
                <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>

            </div>
            <div class="box">
                <h3>Contact info</h3>
                <a href="#"><i class="fas fa-phone"></i>+95-798-183-084</a>
                <a href="#"><i class="fas fa-envelope"></i>khaingkatherine@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i>Yangon, Myanmar</a>
            </div>
            <div class="box">
                <h3>Contact info</h3>
                <a href="#"><i class="fab fa-facebook"></i>Facebook</a>
                <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
                <a href="#"><i class="fab fa-github"></i>Github</a>
                <a href="#"><i class="fab fa-facebook"></i>Facebook</a>

            </div>
        </div>
        <div class="credit">Copyright &copy; <span>Khine Shun Lae</span></div>
    </section>

    <!-- footer section end  -->

    <!-- swiper js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Custom js Link -->
    <script src="./js/main.js"></script>
</body>

</html>
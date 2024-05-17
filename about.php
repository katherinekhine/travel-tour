<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <!-- swiper css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- Custom CSS Link -->
    <link rel="stylesheet" href="./css/style.css?<?php echo time(); ?>">
</head>

<body>
    <!-- header section start -->
    <section class="header">
        <a href="home.php" class="logo">travel.</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Packages</a>
            <a href="book.php">Book</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- header section end -->
    <div class="heading" style="background: url(img/travel-1.jpg) no-repeat;">
        <h1> About Us</h1>
    </div>

    <!-- about section start -->
    <section class="about">
        <div class="image">
            <img src="img/travel-2.jpg" alt="">
        </div>
        <div class="content">
            <h3>Why Choose Us?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto voluptatibus eum sunt illo, sequi excepturi ducimus nulla quam voluptate accusamus asperiores vitae maiores explicabo animi libero dolores labore ullam doloribus?</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus tempore veritatis obcaecati illo temporibus quia officiis.</p>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-map"></i>
                    <span>top destinations</span>
                </div>
                <div class="icons">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span>affordable price</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 guide service</span>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->

    <!-- reviews section start -->
    <section class="reviews">
        <div class="swiper reviews-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus omnis ex minus vero numquam, vitae earum corrupti dolore iste eaque, ipsa facilis nam a in praesentium suscipit reprehenderit aliquam dolorem!</p>
                    <h3>john deo</h3>
                    <span>traveler</span>
                    <img src="img/review-1.jpg" alt="">
                </div>
                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, exercitationem voluptatum voluptate blanditiis, ut quasi modi mollitia eum, ipsum ab deleniti enim! Adipisci, commodi. Eum ex optio sit iusto quisquam, reiciendis ipsam minus amet reprehenderit dolore possimus at, commodi vero!</p>
                    <h3>Kathy</h3>
                    <span>traveler</span>
                    <img src="img/review-2.jpg" alt="">
                </div>
                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus omnis ex minus vero numquam, vitae earum corrupti dolore iste eaque, ipsa facilis nam a in praesentium suscipit reprehenderit aliquam dolorem!</p>
                    <h3>Smith</h3>
                    <span>traveler</span>
                    <img src="img/review-3.jpg" alt="">
                </div>
                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt laudantium aliquam repellat veniam molestiae neque.</p>
                    <h3>Willam Thon</h3>
                    <span>traveler</span>
                    <img src="img/review-4.jpg" alt="">
                </div>
                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum, perferendis. Voluptate, ad! Aspernatur optio assumenda error laudantium ullam aliquam illum ipsam numquam! Facilis id corporis veniam dolorem aperiam voluptates a maiores omnis quo! Ullam, reprehenderit!</p>
                    <h3>Maria</h3>
                    <span>traveler</span>
                    <img src="img/review-5.jpg" alt="">
                </div>
                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eos sed optio?</p>
                    <h3>Kelvin</h3>
                    <span>traveler</span>
                    <img src="img/review-6.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- reviews section end -->

    <!-- footer section start  -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
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
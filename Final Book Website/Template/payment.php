<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Page</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="HTML Template\index.css">
    <link rel="stylesheet" href="HTML Template\payment.css">

    <!-- Swiper CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>


</head>
<body>

<!-- header section -->

<header class="header">

    <div class="header-1">
        <a href="#" class="logo"><img src="../assets/logo/BOOK (4).png" alt=""></a>

        <form action="" class="search-form">
            <input type="search" name="" placeholder="search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>
            <a href="#" class="fa-solid fa-heart"></a>
            <a href="cart.html" class="fas fa-shopping-cart"></a>
            <div id="login-btn" class="fas fa-user"></div>
        </div>
    </div>

    <div class="header-2">
        <nav class="navbar">
            <a href="index.php#home">Home</a>
            <a href="index.php#featured">Featured</a>
            <a href="index.php#arrivals">Arrivals</a>
            <a href="index.php#reviews">Reviews</a>
            <a href="index.php#blogs">Blogs</a>
            <a href="catalog.php">Catalog</a>
        </nav>
    </div>

</header>

<!-- !header section -->


<!-- bottom navbar -->

<nav class="bottom-navbar">
    <a href="#home" class="fas fa-home"></a>
    <a href="#featured" class="fas fa-list"></a>
    <a href="#arrivals" class="fas fa-tags"></a>
    <a href="#reviews" class="fas fa-comments"></a>
    <a href="#blogs" class="fa-solid fa-blog"></a>
</nav>

<!-- !bottom navbar -->


<!-- Cart Section -->

<!-- Product Display -->
<?php
$item_id = $_GET['item_id'] ?? 1;
foreach($product->getData() as $item):
    if($item['item_id'] == $item_id):
?>

<section id="cart" class="section-p1">
    <table width="100%">
        <thead>
            <tr>
                <td>Image</td>
                <td>Product</td>
                <td>Price</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="<?php echo $item['item_image']?>" alt="images"></td>
                <td><?php echo $item['item_brand'],$item['item_name'];?></td>
                <td>₹<?php echo $item['item_price']?></td>
                <td><button class="btn">Proceed to Buy</button></td>
            </tr>
        </tbody>
    </table>
</section>
<?php
    endif;
    endforeach;
?>
<!-- !Product Display -->


<!-- !Cart Section -->









<!-- Footer Section -->

<section class="footer">

    <div class="box-container">
        <div class="box">
            <h3>Our Location</h3>
            <a href="#"><i class="fa-solid fa-location-dot"></i>India</a>
            <a href="#"><i class="fa-solid fa-location-dot"></i>USA</a>
            <a href="#"><i class="fa-solid fa-location-dot"></i>Russia</a>
            <a href="#"><i class="fa-solid fa-location-dot"></i>France</a>
            <a href="#"><i class="fa-solid fa-location-dot"></i>Japan</a>
            <a href="#"><i class="fa-solid fa-location-dot"></i>Africa</a>
        </div>

        <div class="box">
            <h3>Quick Links</h3>
            <a href="#"><i class="fas fa-arrow-right"></i>Home</a>
            <a href="#"><i class="fas fa-arrow-right"></i>Features</a>
            <a href="#"><i class="fas fa-arrow-right"></i>Arrivals</a>
            <a href="#"><i class="fas fa-arrow-right"></i>Reviews</a>
            <a href="#"><i class="fas fa-arrow-right"></i>Blogs</a>
        </div>

        <div class="box">
            <h3>Extra Links</h3>
            <a href="#"><i class="fas fa-arrow-right"></i>Account Info</a>
            <a href="#"><i class="fas fa-arrow-right"></i>Ordered Items</a>
            <a href="#"><i class="fas fa-arrow-right"></i>Privacy Policy</a>
            <a href="#"><i class="fas fa-arrow-right"></i>Payment Method</a>
            <a href="#"><i class="fas fa-arrow-right"></i>Our Services</a>
        </div>

        <div class="box">
            <h3>Contect Info</h3>
            <a href="#"><i class="fas fa-phone"></i>+123-456-7890</a>
            <a href="#"><i class="fas fa-phone"></i>+111-222-3333</a>
            <a href="#"><i class="fas fa-envelope"></i>magicbook@gmail.com</a>
            <img src="/assets/image/world-map.png" class="map" alt="images">
        </div>

    </div>

    <div class="share">
        <a href="#" class="fa-brands fa-facebook"></a>
        <a href="#" class="fa-brands fa-twitter"></a>
        <a href="#" class="fa-brands fa-instagram"></a>
        <a href="#" class="fa-brands fa-linkedin"></a>
        <a href="#" class="fa-brands fa-pinterest"></a>
    </div>

    <div class="credit">Created By <span>Atharva Shewale & Soham Sonavane</span> | all rights reserved! </div>

</section>

<!-- !Footer Section -->



<!-- Custom JS -->
<script src="/js/index.js"></script>

<!-- Swiper Jscript -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>
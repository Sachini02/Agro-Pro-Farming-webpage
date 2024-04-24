<!DOCTYPE html>
<html lang="en">
<head style="background-color: #024928;">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" initial-scale="1"><!--device width-->
    <title>Home Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="homeStyle.css"   rel="Stylesheet">
    
    
</head>
<body>

<div class="navbar">

<video autoplay loop muted plays-inline class="back-video">
    <source src="image/backV1.mp4" type="video/mp4">
</video>

       <nav>
        <img src="image/LOG.jpg" class="logo">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="login.php">Product</a></li>
            <li class="dropdown">
            <a href="#">Account</a>
            <ul class="dropdown-menu">
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
        </li>

            <li><a href="learnmore.php">About Us</a></li>
        </ul>
       </nav>
       <div class="content">
             <h1>AGRO PRO</h1>
             <a href="learnmore.php">GreenWorld</a>
       </div>
</div>

<section class="about" id="about">

    <div class="row">

    <div class="imcontent">
        <img src="image/largeLOG.PNG">
        <h3>AGRO PRO</h3>
    </div>

    <div class="lcontent">
        <h3>Why choose us?</h3>
        <h4>Cultivating Sustainability, Nurturing Growth in the Green World.</h4>
        <p>With a legacy spanning back to the 2012s, AGRO PRO - Green World stands as a beacon of 
            excellence in Sri Lanka's agricultural landscape. Our comprehensive range of top-quality 
            products and services is designed to cater to all your farming needs. We are dedicated to 
            sustainable practices, ensuring that your crops thrive while respecting the environment.
             As a leading agricultural company in Sri Lanka, we also extend our expertise globally, 
             exporting premium agro produce to international markets. When you choose AGRO PRO, 
             you're not just selecting products, but a partner committed to your success and the 
             future of agriculture. <i class="bi bi-cash-coin"></i> </p>
             <a href="learnmore.php" class="btn">learn more</a>
    </div>
           <hr class="line">
    </div>
</section>

<section class="vision">
<div class="gutter-layout">
     
        <div class="gutter-columnv">
            <h2>Vision</h2>
            <p>To lead the agricultural industry towards a sustainable and prosperous future, where every harvest enriches the planet and empowers communities.</p>
        </div>
        <div class="gutter-columnm">
            <h2>Mission</h2>
            <p>At AGRO PRO, we are committed to providing cutting-edge agricultural solutions and products that enhance yields, protect the environment, and promote a harmonious coexistence between agriculture and nature. Through innovation, education, and collaboration, we strive to revolutionize farming practices worldwide, creating a greener, more abundant future.</p>
        </div>
    </div>
    
 </section>

 <footer class="footer">
    <div class="focontainer">
        <div class="footrow">
            <div class="footer-col">
                <h4>Company</h4>
                <ul>
                    <li><a href="#">about us</a></li>
                    <li><a href="#">our services</a></li>
                    <li><a href="#">privacy police</a></li>
                    <li><a href="#">affiliate program</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>get help</h4>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">delivery</a></li>
                    <li><a href="#">returns</a></li>
                    <li><a href="#">order status</a></li>
                    <li><a href="#">payment option</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>online shop</h4>
                <ul>
                    <li><a href="#">Organic Fertilizers</a></li>
                    <li><a href="#">Seeds and Seedlings</a></li>
                    <li><a href="#">Tools and Equipment</a></li>
                    <li><a href="#">Specialty and Niche Products</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>fallow us</h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
 </footer>
    
</body>


</html>

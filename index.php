<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Game Hosting Template</title>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <!-- Owl Carousel CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
      <link href="assets/plugins/jqvmap-master/dist/jqvmap.css" media="screen" rel="stylesheet" type="text/css"/>
      <!-- Custom CSS -->
      <link rel="stylesheet" href="assets/css/landing.css">
   </head>
   <body>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="#"><img src="https://i.ibb.co/9hJs5JN/Untitled-1.png" alt="Logo"> Reliant Template</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="#home"><i class="fas fa-home"></i> Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#packages"><i class="fas fa-box"></i> Packages</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#games"><i class="fas fa-gamepad"></i> Games</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#about"><i class="fas fa-info-circle"></i> About</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="mailto:#"><i class="fas fa-envelope"></i> Contact</a>
                  </li>
               </ul>
            </div>
            <button class="btn btn-login ml-auto" id="btn-login"><i class="fas fa-terminal"></i> Login</button>
         </div>
      </nav>
      <!-- Owl Carousel -->
      <div class="owl-carousel owl-theme">
         <div class="item">
            <img src="https://i.ibb.co/HV2Tcdv/ssssss.jpg" alt="Slika 1">
            <div class="content">
               <div class="title">Counter Strike</div>
               <div class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>
            </div>
         </div>
         <div class="item">
            <img src="https://i.ibb.co/7GX11wd/ffivem.jpg" alt="Slika 2">
            <div class="content">
               <div class="title">FiveM</div>
               <div class="description">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
            </div>
         </div>
         <div class="item">
            <img src="https://i.ibb.co/r7yqfKJ/fdf.jpg" alt="Slika 3">
            <div class="content">
               <div class="title">Minecraft</div>
               <div class="description">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</div>
            </div>
         </div>
      </div>
      <!-- Features Section -->
      <section id="features" class="features">
         <div class="container">
            <h2 class="section-title"><i class="fas fa-tasks"></i> Features</h2>
            <div class="row">
               <!-- Feature 1: Support -->
               <div class="col-md-3">
                  <div class="feature-item">
                     <i class="fas fa-headset"></i>
                     <h3>24/7 Support</h3>
                     <p>Professional support team available round the clock to assist you.</p>
                  </div>
               </div>
               <!-- Feature 2: DDoS Protection -->
               <div class="col-md-3">
                  <div class="feature-item">
                     <i class="fas fa-shield-alt"></i>
                     <h3>DDoS Protection</h3>
                     <p>Advanced DDoS protection to keep your server secure from attacks.</p>
                  </div>
               </div>
               <!-- Feature 3: Control Panel -->
               <div class="col-md-3">
                  <div class="feature-item">
                     <i class="fas fa-desktop"></i>
                     <h3>Control Panel</h3>
                     <p>User-friendly control panel for easy server management.</p>
                  </div>
               </div>
               <!-- Feature 4: Cashback -->
               <div class="col-md-3">
                  <div class="feature-item">
                     <i class="fas fa-money-bill-wave"></i>
                     <h3>Cashback</h3>
                     <p>Get cashback rewards on select plans and purchases in first 5 days.</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Packages -->
      <section id="packages" class="packages">
         <div class="container">
            <h2 class="section-title"><i class="fas fa-cube"></i> Packages</h2>
            <div class="row">
               <div class="col-md-4">
                  <div class="package" id="paket1">
                     <img src="https://i.ibb.co/HV2Tcdv/ssssss.jpg" alt="Counter-Strike 1.6">
                     <div class="package-content">
                        <h3>Counter Strike</h3>
                        <p>Price: $10/month</p>
                        <!-- Description -->
                        <p><i class="fas fa-database"></i> 1 Database</p>
                        <p><i class="fas fa-memory"></i> 4 GB RAM</p>
                        <p><i class="fas fa-hard-drive"></i> 10 GB SSD</p>
                        <button class="btn btn-primary">Order</button>
                     </div>
                     <h2 class="package-title">Counter Strike</h2>
                     <div class="arrow-up">
                        <i class="fa-solid fa-angles-up"></i>
                        <span class="swipe-up">Swipe up</span>
                     </div>
                  </div>
               </div>
               <!-- {Package 2}--> 
               <div class="col-md-4">
                  <div class="package" id="paket1">
                     <img src="https://i.ibb.co/7GX11wd/ffivem.jpg" alt="FiveM">
                     <div class="package-content">
                        <h3>FiveM</h3>
                        <p>Price: $25/month</p>
                        <!-- Description -->
                        <p><i class="fas fa-database"></i> 1 Database</p>
                        <p><i class="fas fa-memory"></i> 16 GB RAM</p>
                        <p><i class="fas fa-hard-drive"></i> 25 GB SSD</p>
                        <button class="btn btn-primary">Order</button>
                     </div>
                     <h2 class="package-title">FiveM</h2>
                     <div class="arrow-up">
                        <i class="fa-solid fa-angles-up"></i>
                        <span class="swipe-up">Swipe up</span>
                     </div>
                  </div>
               </div>
               <!-- {Package 3}--> 
               <div class="col-md-4">
                  <div class="package" id="paket1">
                     <img src="https://i.ibb.co/r7yqfKJ/fdf.jpg" alt="Minecraft">
                     <div class="package-content">
                        <h3>Minecraft</h3>
                        <p>Price: $15/month</p>
                        <!-- Description -->
                        <p><i class="fas fa-database"></i> 3 Database</p>
                        <p><i class="fas fa-memory"></i> 32 GB RAM</p>
                        <p><i class="fas fa-hard-drive"></i> 25 GB SSD</p>
                        <button class="btn btn-primary">Order</button>
                     </div>
                     <h2 class="package-title">Minecraft</h2>
                     <div class="arrow-up">
                        <i class="fa-solid fa-angles-up"></i>
                        <span class="swipe-up">Swipe up</span>
                     </div>
                  </div>
               </div>
               <!-- Add more packages here --> 
            </div>
         </div>
      </section>
      <!-- Info Hosting -->
      <section id="statistics" class="statistics">
         <div class="container">
            <h2 class="section-title"><i class="fa-solid fa-chart-simple"></i> Statistics</h2>
            <div class="row">
               <div class="col-md-3">
                  <div class="statistic">
                     <div class="statistic-icon">
                        <i class="fas fa-users"></i> <!-- Icon for registered users -->
                     </div>
                     <div class="statistic-info">
                        <h3>Registered Users</h3>
                        <p class="statistic-text" id="registered-users">Loading...</p>
                        <!-- PHP will populate this -->
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="statistic">
                     <div class="statistic-icon">
                        <i class="fas fa-server"></i> <!-- Icon for servers -->
                     </div>
                     <div class="statistic-info">
                        <h3>Servers</h3>
                        <p class="statistic-text" id="server-count">Loading...</p>
                        <!-- PHP will populate this -->
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="statistic">
                     <div class="statistic-icon">
                        <i class="fas fa-hdd"></i> <!-- Icon for hosting machines -->
                     </div>
                     <div class="statistic-info">
                        <h3>Hosting Machines</h3>
                        <p class="statistic-text" id="hosting-machines">Loading...</p>
                        <!-- PHP will populate this -->
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="statistic">
                     <div class="statistic-icon">
                        <i class="fab fa-instagram"></i> <!-- Icon for Instagram followers -->
                     </div>
                     <div class="statistic-info">
                        <h3>Instagram Followers</h3>
                        <p class="statistic-text" id="instagram-followers">Loading...</p>
                        <!-- PHP will populate this -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Location -->
      <section class="location-section">
         <h2><i class="fa-solid fa-map-location-dot"></i> Data Center Locations</h2>
         <div id="vmap" class="map"></div>
      </section>
      <!-- Footer -->
      <div class="footer">
         <div class="container">
            <div class="footer-content">
               <div class="logo">
                  <!-- Logo -->
                  <img src="https://i.ibb.co/9hJs5JN/Untitled-1.png" alt="Your Logo">
               </div>
               <div class="description">
                  <p>Reliant Template</p>
               </div>
            </div>
            <div class="author-info">
               <p>Created with ☕ by Vostic</p>
               <p><i class="fa-solid fa-envelope"></i> info@reliantcloud.net</p>
            </div>
            <div class="social-links">
               <ul>
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                  <!-- Here add more links if you need -->
               </ul>
            </div>
         </div>
      </div>
      <!-- Bootstrap JS and Owl Carousel JS -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      <!-- jQuery Vector Map JS -->
      <script src="assets/js/vmap.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
      <script src="assets/plugins/jqvmap-master/dist/jquery.vmap.js"></script>
      <script src="assets/plugins/jqvmap-master/dist/maps/jquery.vmap.world.js"></script>
      <!-- Custom JS -->
      <script src="assets/js/owl.js"></script>
      <script src="assets/js/script.js"></script>
   </body>
</html>
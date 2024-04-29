<?php include_once('modules/header.php'); ?>
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
      <button class="btn btn-login ml-auto"><i class="fas fa-terminal"></i> Login</button>
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
<?php include_once('modules/footer.php'); ?>
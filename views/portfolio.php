<!DOCTYPE html>
<html lang="en">
<?php include 'layouts/head/head_portfolio.php'; ?>
<script async src="assets/js/gaAnalytics.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-42RFV7HHWV"></script>
<body>
    <?php include 'header.php'; ?>

    <!-- Pre loader -->
    <div class="preloader">
        <img class="preloader-item" src="assets/images/loader/02.gif" alt="Loading">
    </div>
    <!-- **************** MAIN CONTENT START **************** -->
    <main>
        <!-- =======================
Inner intro START -->
        <section>
            <div class="container">
                <div class="row d-flex justify-content-lg-between">
                    <div class="col-lg-7">
                        <div class="display-4 font-heading fw-bold caret-primary text-dark-stroke text-primary-shadow">
                            <span class="text-dark-stroke text-light-shadow d-block d-sm-inline-block">
                                Our
                            </span>
                            <span class="typed text-end" data-type-text="Creativity&&Portfolio&&Stories"></span>
                        </div>
                        <p class="lead">
                        Explore our portfolio to see the transformative work we've done.
                        </p>
                        <a href="/contact#contact-form" class="btn btn-dark btn-sm btn-line">Get a quote</a>
                    </div>
                </div>
                <!-- Row END -->
            </div>
        </section>
        <!-- =======================
Inner intro END -->

        <!-- =======================
Portfolio START -->
        <section class="pt-0" id="portfolio">
            <div class="container">
                <!-- Nav Filters -->
                <div class="row">
                    <div class="col-12">
                        <div class="grid-menu" data-target=".filter-container">
                            <ul class="nav nav-pills justify-content-start mb-5">
                                <li class="nav-item">
                                    <span class="nav-link disabled ps-0">Show me:</span>
                                </li>
                                <li class="nav-item">
                                    <a data-filter="*" class="nav-link active">All</a>
                                </li>
                                <li class="nav-item">
                                    <a data-filter=".marketing" class="nav-link">Marketing</a>
                                </li>
                                <li class="nav-item">
                                    <a data-filter=".digital" class="nav-link">WordPress</a>
                                </li>
                                <li class="nav-item">
                                    <a data-filter=".branding" class="nav-link ps-0 ps-sm-3">Branding</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Items START -->
                <div class="row filter-container overflow-hidden" data-isotope='{"layoutMode": "masonry"}'>
                    <!-- Card item START -->
                    <div class="col-sm-6 col-md-4 grid-item digital wordpress">
                        <a href="/top-notch-detailing" target="_blank" class="card card-metro mb-30">
                            <!-- Card Image -->
                            <div class="card-image">
                                <img src="assets/images/portfolio/top-notch/topnotch.jpg" alt="card image" />
                            </div>
                            <!-- Card Overlay -->
                            <div class="card-img-overlay d-flex flex-column">
                                <!-- <img class="w-40" src="assets/images/clients/light/01.svg" alt="" /> -->
                                <div class="mt-auto card-text">
                                    <h4 class="text-white">Top Notch Mobile Detailing</h4>
                                 
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Card item END -->
                    <!-- Card item START -->
                    <div class="col-sm-6 col-md-4 grid-item marketing ">
                        <a href="/uvc" class="card card-metro mb-30">
                            <!-- Card Image -->
                            <div class="card-image">
                                <img src="assets/images/portfolio/uvc/logouvc.png" alt="card image" />
                            </div>
                            <!-- Card Overlay -->
                            <div class="card-img-overlay d-flex flex-column">
                         
                                <div class="mt-auto card-text">
                                    <h4 class="text-white">UVC Transportation</h4>
                                  
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Card item END -->
              
          
                 
                </div>
                <!-- Portfolio Items END -->
            </div>
            <!-- row END -->
        </section>
        <!-- =======================
Portfolio END -->

        <!-- =======================
Action Box START -->
        <section class="bg-primary pattern-overlay-2">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <h3 class="text-white mb-5">Ready to get started?</h3>
                            <a href="/contact#contact-form" class="display-2 text-white-stroke h2 text-uppercase">
                                Hire us!
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
Action Box END -->
<?php include 'cookie-alert.php'; ?>
    </main>
    <div class="cursor-dot-outline"></div>
  <div class="cursor-dot"></div>
  <div class="back-top">
    <div class="scroll-line"></div>
    <span class="scoll-text">Go Up</span>
  </div>
    <script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/imagesLoaded/imagesloaded.js"></script>
<script src="assets/vendor/ityped/index.js"></script>

    <?php include 'footer.php'; ?>
    <!-- Back to top -->

    <!-- Bootstrap JS -->

<!-- Vendors -->

  
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<?php include 'layouts/head/head_portfolio.php'; ?>

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
        <div class="row d-flex justify-content-md-between">
          <!-- Inner intro title -->
          <div class="col-md-9 col-lg-8">
            <span class="font-alt fw-normal display-8 d-block mb-3">
              Case study
            </span>
            <h1 class="display-5 text-dark-stroke text-primary-shadow">
              Professional Chauffeur Services
            </h1>
            <p class="lead">
              For our subsequent venture, we collaborated with UVC Transportation, a premier luxury transportation
              service provider. The company sought to establish a digital presence that paralleled the exclusivity and
              efficiency of their offerings. Their requisites were precise: the development of a new website that
              effectively showcased their fleet of luxury vehicles, incorporated a booking feature for their services,
              and included a contact form for direct inquiries.
            </p>
            <a href="http://jacksonholetaxiuvc.com/" target="_blank" class="btn btn-dark btn-sm">
              View Website
              <i class="fas fa-external-link-alt ms-2"></i>
            </a>
          </div>

          <!-- Inner intro detail START -->
          <div class="col-md-3 col-lg-2 mt-5 mt-md-0">
            <!-- Detail item -->
            <div class="mb-4">
              <h6>
                <i class="far fa-user me-2"></i>
                Client:
              </h6>
              <p>UVC Transportation</p>
            </div>
            <!-- Detail item -->
            <div class="mb-4">
              <h6>
                <i class="far fa-compass me-2"></i>
                Location:
              </h6>
              <p>WY, United States</p>
            </div>
            <!-- Detail item List-->
            <div class="mb-4">
              <h6>
                <i class="fas fa-briefcase me-2"></i>
                Services:
              </h6>
              <ul>
                <li>Website Development</li>
                <li>Web Design</li>
                <li>SEO</li>
                <li>Social Media Management</li>
                <li>Google Analytics</li>
              </ul>
            </div>
          </div>
          <!-- Inner intro detail END -->
        </div>
        <!-- Row END -->
      </div>
    </section>
    <!-- =======================
Inner intro END -->

    <!-- =======================
Case study details START -->
    <section class="pt-0 mt-8 bg-light">
      <div class="container">
        <div class="row">
          <!-- Image -->
          <div class="col-12 mb-5 mb-md-7">
            <img class="img-fluid rounded mt-n8" src="assets/images/portfolio/uvc/uvc-site.png"
              alt="UVC Transportation" />
          </div>
          <!-- Details -->
          <div class="col-md-6 border-end border-1">
            <h3>Challenges & Solutions</h3>
            <p>
              The primary challenge was to engineer a digital interface that reflected the opulence of UVC
              Transportation's services. Our objective was to craft a website that was not only visually appealing but
              also highly functional, aligning with the brand's ethos of luxury and precision. We employed a minimalist
              design aesthetic, complemented by high-resolution imagery and a refined color palette, to articulate
              sophistication and attention to detail—qualities that resonate with their target audience.

            </p>
            <p>
              Incorporating a booking feature that matched the company's standard for luxury and ease of use required
              meticulous planning. We opted for a custom booking system developed using the .NET framework, known for
              its robustness and scalability. This choice enabled us to create a seamless booking experience that allows
              clients to select their service, choose a vehicle, and schedule their transportation with unparalleled
              ease. The system's integration with backend management software ensures efficient operations and real-time
              updates.
            </p>
          </div>
          <div class="col-md-6">
            <p class="mt-5">
              Furthermore, the addition of a contact form was implemented to facilitate effortless communication between
              UVC Transportation and its clientele. This feature was designed to be intuitive, encouraging potential
              customers to make inquiries or special requests, thus enabling the company to offer personalized service.
            </p>
          </div>

        </div>
      </div>
    </section>
    <!-- =======================
Case study details END -->


    <!-- =======================
Action Box START -->
    <section class="bg-parallax bg-dark-overlay-4" style="
          background: url(assets/images/portfolio/big/02.jpg) no-repeat center
            center;
          background-size: cover;
        ">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="text-center">
              <h2 class="text-white display-4 text-white-stroke mb-3">
                Next project
              </h2>
             
              <a href="#" class="btn btn-primary btn-line">Next case</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- =======================
Action Box END -->
<?php include 'cookie-alert.php'; ?>
  </main>

  <?php include 'footer.php'; ?>
  <!-- Back to top -->
  <div class="back-top">
    <div class="scroll-line"></div>
    <span class="scoll-text">Go Up</span>
  </div>
  <!-- Bootstrap JS -->
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Vendors -->
  <script src="assets/vendor/jarallax/jarallax.min.js"></script>
  <script src="assets/vendor/tiny-slider/tiny-slider.js"></script>

  <!-- Template Functions -->
  <script src="assets/js/functions.js"></script>
</body>

</html>
<?php 

setcookie('name', 'daniel', time() + 86400);

$_SESSION['name'] = "Daniel";

session_start();
?>

<!doctype html>
<html lang="en">
<?php include 'layouts/head/head_default.php'; ?>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-42RFV7HHWV"></script>
<script async src="assets/js/gaAnalytics.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-42RFV7HHWV"></script>


<body>
        <!-- Pre loader -->
        <div class="preloader">
      <img
        class="preloader-item"
        src="assets/images/loader/02.gif"
        alt="Loading"
      />
    </div>

    <?php include 'header.php'; ?>

    <main>
      <!-- =======================
Inner intro START -->
      <section class="text-center">
        <div class="container">
          <div class="row">
            <!-- Inner intro title -->
            <div class="col-12 my-5">
              <h1 class="display-2 text-dark-stroke text-primary-shadow">
                404!
              </h1>
              <h3>Page Not Found</h3>
              <p>Oops! The page you are looking for, couldn't be found.</p>
            </div>
          </div>
        </div>
      </section>
      <!-- =======================
Inner intro END -->

      <!-- =======================
Links START -->
      <section class="bg-light">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <!-- item -->
            <div class="col-md-4 col-lg-3">
              <a
                href="index.html"
                class="bg-white d-block text-center p-3 mb-30 line-draw-animation"
              >
                <div class="line-draw-inner">
                  <span class="text-primary display-8">
                    <i class="bi bi-house"></i>
                  </span>
                  <h5 class="my-2">Back to home</h5>
                </div>
              </a>
            </div>
            <!-- item -->
            <div class="col-md-4 col-lg-3">
              <a
                href="portfolio-classic-grid-3-col.html"
                class="bg-white d-block text-center p-3 mb-30 line-draw-animation"
              >
                <div class="line-draw-inner">
                  <span class="text-primary display-8">
                    <i class="bi bi-briefcase"></i>
                  </span>
                  <h5 class="my-2">View our work</h5>
                </div>
              </a>
            </div>
            <!-- item -->
            <div class="col-md-4 col-lg-3">
              <a
                href="contact.html"
                class="bg-white d-block text-center p-3 mb-30 line-draw-animation"
              >
                <div class="line-draw-inner">
                  <span class="text-primary display-8">
                    <i class="bi bi-info-square"></i>
                  </span>
                  <h5 class="my-2">Contact us</h5>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- =======================
Links END -->
<?php include 'cookie-alert.php'; ?>
    </main>
    <div class="back-top">
        <div class="scroll-line"></div>
        <span class="scoll-text">Go Up</span>
        
    </div>
    <div class="cursor-dot-outline"></div>
    <div class="cursor-dot"></div>
    <?php include 'footer.php'; ?>


    <!-- Back to top -->
 
</body>

</html>
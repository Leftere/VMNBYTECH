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
            <h1 class="display-6 text-dark-stroke text-primary-shadow">
              Terra Fönster e-commerce
            </h1>
            <p class="lead intro-text">
              Terra Fönster, located in Verkstadsgatan, Sweden, is a premier manufacturer of windows and doors renowned
              for its dedication to quality, durability, and aesthetic appeal in its products. With a rich history and a
              reputation built on delivering exceptional craftsmanship, Terra Fönster has established itself as a leader
              in the Scandinavian market, catering to both residential and commercial projects.
            </p>
            <a href="https://terrafonster.se" target="_blank" class="btn btn-dark btn-sm">
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
              <p class="text-dark">Terra Fönster</p>
            </div>
            <!-- Detail item -->
            <div class="mb-4">
              <h6>
                <i class="far fa-compass me-2"></i>
                Location:
              </h6>
              <p class="text-dark">Verkstadsgatan, Sweden</p>
            </div>
            <!-- Detail item List-->
            <div class="mb-4">
              <h6>
                <i class="fas fa-briefcase me-2"></i>
                Services:
              </h6>
              <ul>
                <li class="text-dark">Digital Strategy</li>
                <li class="text-dark">UI/UX</li>
                <li class="text-dark">Content Production</li>
                <li class="text-dark">Drupal 9 E-commerce</li>
                <li class="text-dark">SEO</li>
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
            <img class="img-fluid rounded mt-n8" src="assets/images/portfolio/terra-fonster/terra-fonster-min.jpg"
              alt="UVC Transportation" />
          </div>
          <!-- Details -->
          <div class="col-md-6 border-end border-1">
            <h4>The Challenge</h4>
            <p class="text-dark">
              In response to the evolving digital landscape and changing consumer behaviors, Terra Fönster aimed to
              enhance its online presence. The goal was to develop an e-commerce site that not only listed their premium
              products but also incorporated a blog to educate and engage customers. The challenge lay in creating a
              platform that reflected Terra Fönster’s brand values of quality, sustainability, and innovation, while
              offering a seamless and intuitive shopping experience.


            </p>
            <h4>Implemented Solution:</h4>
            <p class="text-dark">
              To meet Terra Fönster's needs, we leveraged Drupal 9 and the Drupal Commerce module, known for their
              flexibility, scalability, and robust security features. This combination allowed us to create a custom
              e-commerce solution tailored to the unique demands of Terra Fönster’s product range and business model.
            </p>
            <h4>Key Features of the Implemented Solution:
            </h4>
            <ul>
              <li class="text-dark">
                <strong>Product Showcase:</strong>
                Utilizing Drupal Commerce, we developed a comprehensive online catalog that not only displays Terra
                Fönster’s windows and doors but also highlights their energy efficiency and eco-friendly attributes.
                Products are easily navigable, with detailed information and high-quality imagery.
              </li>
              <li class="text-dark">
                <strong>Blog Integration:</strong>
                To support Terra Fönster’s educational and engagement goals, we integrated a blog directly into the
                site. This feature enables Terra Fönster to share insights on sustainability, innovation in product
                design, and care tips, fostering a community of informed and environmentally conscious customers.
              </li>

            </ul>

          </div>
          <div class="col-md-6">
            <ul>
              <li class="text-dark">
                <strong>Customizable Products:</strong>
                Built on Drupal 9, the site offers a user-friendly interface and responsive design, ensuring an optimal
                browsing and shopping experience across all devices.
              </li>
              <li class="text-dark">
                <strong>Sustainability and Innovation Highlighted:</strong>
                Reflecting Terra Fönster’s core values, the platform emphasizes their commitment to sustainability and
                innovation. Through strategic content placement and design, we ensure these brand pillars are front and
                center.
              </li>
            </ul>
            <h4 class="mt-3">Outcome</h4>
            <p class="text-dark">Our solution for Terra Fönster represents a significant step forward in their digital transformation
              journey. By harnessing the power of Drupal 9 and Drupal Commerce, Terra Fönster now boasts an online
              presence that truly embodies their brand ethos, engages their target audience, and meets the demands of
              the modern consumer. This digital platform not only showcases their high-quality products but also serves
              as a testament to their commitment to sustainability and innovation.</p>
          </div>

        </div>
      </div>
    </section>
    <!-- =======================
Case study details END -->
    <section class="">
      <div class="container ">
        <div class="row justify-content-lg-center">
          <!-- About Title -->
          <div class="col col-md-12">
            <h4>Have a question?</h4>
            <p class="display-6 font-heading mb-3 text-dark-stroke text-primary-shadow">
              Get in touch
            </p>
          </div>

        </div>

        <div class="col-lg-9">
          <!-- Form START -->
          <!-- 	-->
          <form class="contact-form form-line" id="contact_form" name="contactform" method="POST"
            action="assets/include/contact-action.php" id="">
            <!-- Main form -->
            <div class="row">
              <div class="col-md-6">
                <!-- name -->
                <div class="mb-3 position-relative">
                  <input required id="first-name" name="firstName" type="text" class="form-control"
                    placeholder="First Name">
                  <span class="focus-border"></span>
                </div>
              </div>
              <div class="col-md-6">
                <!-- name -->
                <div class="mb-3 position-relative">
                  <input required id="last-name" name="lastName" type="text" class="form-control"
                    placeholder="Last Name">
                  <span class="focus-border"></span>
                </div>
              </div>
              <div class="col-md-12">
                <!-- email -->
                <div class="mb-3 position-relative">
                  <input required id="con-email" name="email" type="email" class="form-control" placeholder="E-mail">
                  <span class="focus-border"></span>
                </div>
              </div>
              <div class="col-md-12">
                <!-- Subject -->
                <div class="mb-3 position-relative">
                  <input required id="con-subject" name="subject" type="text" class="form-control"
                    placeholder="Subject">
                  <span class="focus-border"></span>
                </div>
              </div>
              <div class="col-md-12">
                <!-- Message -->
                <div class="mb-3 position-relative">
                  <textarea required id="con-message" name="message" cols="40" rows="6" class="form-control"
                    placeholder="Message"></textarea>
                  <span class="focus-border"></span>
                </div>
              </div>
              <!-- submit button -->
              <div class="col-md-12 text-start"><button class="btn btn-primary btn-line g-recaptcha"
                  data-sitekey="6Lc4N3gpAAAAAKI0BA6ec9muDE_Yw34-nMGIil__" data-callback="onSubmit" data-action="submit"
                  type="submit">Send Message</button></div>
            </div>
          </form>
          <!-- Form END -->
        </div>
        <!-- Row END -->
      </div>
    </section>
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

              <a href="/burunduk" class="btn btn-primary btn-line">Next case</a>
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
  <div class="cursor-dot-outline"></div>
  <div class="cursor-dot"></div>

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
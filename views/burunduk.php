<!DOCTYPE html>
<html lang="en">
<?php include 'layouts/head/head_burunduk.php'; ?>

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
              Burunduk online store
            </h1>
            <p class="lead intro-text">
              For the Burunduk project, we got to play around with Drupal 8 to build a really cool, user-friendly online
              toy store. Our main goal was to make it super easy for folks to find and check out all kinds of toys. We
              tapped into Drupal 8 to set up a smooth navigation and fun product pages, aiming for a shopping experience
              that's as enjoyable as browsing through toys should be. This project was a great chance for us to show off
              how we can use Drupal 8 to create something both functional and inviting, making sure everyone visiting
              the site has a great time exploring.
            </p>
            <a href="https://burunduk.by//" target="_blank" class="btn btn-dark btn-sm">
              View Website
              <i class="fas fa-external-link-alt ms-2"></i>
            </a>
          </div>

          <!-- Inner intro detail START -->
          <div class="col-md-3 col-lg-2 mt-5 mt-md-0">
            <!-- Detail item -->
            <div class="mb-4">
              <h6 >
                <i class="far fa-user me-2"></i>
                Client:
              </h6>
              <p class="text-dark">burunduk.by</p>
            </div>
            <!-- Detail item -->
            <div class="mb-4">
              <h6>
                <i class="far fa-compass me-2"></i>
                Location:
              </h6>
              <p class="text-dark">Vitebsk, Belarus</p>
            </div>
            <!-- Detail item List-->
            <div class="mb-4">
              <h6>
                <i class="fas fa-briefcase me-2"></i>
                Services:
              </h6>
              <ul>
                <li class="text-dark">Digital Strategy</li>
                <li class="text-dark">Content Production</li>
                <li class="text-dark">Drupal 8 E-commerce</li>
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
            <img class="img-fluid rounded mt-n8" src="assets/images/portfolio/burunduk/burunduk-min.jpg"
              alt="UVC Transportation" />
          </div>
          <!-- Details -->
          <div class="col-md-6 border-end border-1">
            <h4>Project Goal</h4>
            <p class="text-dark">
              Develop an online catalog of construction toys on the Drupal Commerce 2 (Core) platform, featuring an
              advanced system for the automatic display of categories based on the availability of products. This
              ensures a seamless and dynamic shopping experience for users, by always showcasing the most current and
              accessible items.

            </p>
            <h4>Development Process</h4>
            <p class="text-dark">
              For building online stores and catalogs, we favor the Commerce module for its scalability and enhancement
              capabilities, allowing for the integration of various product types, from physical to virtual goods.
            </p>
            <ul>
              <li class="text-dark">
                A slider block.

              </li>
              <li class="text-dark">
                A CTA block for promotional content.

              </li>
            </ul>
            <h4 class="my-3">A basic block for custom content.</h4>
            <ul>
              <li class="text-dark">
                For the main content, we developed three material types:

              </li>
              <li class="text-dark">
                Basic material for static pages and contact pages.

              </li>
              <li class="text-dark">
                News for handling updates and promotions.

              </li>
            </ul>
            <h4 class="my-3">Product Pages
            </h4>
            <p class="text-dark"> Product pages are built on Drupal Commerce without variations, with specific fields
              and taxonomy
              terms for each product. Voting is implemented using the Voting API.</p>

            <p class="text-dark">We utilized Views and Facet API for categories to refine filter functionality and
              display the main
              catalog's structure seamlessly. If a category lacks products, empty terms are automatically hidden in the
              menu. This approach ensures a user-friendly, navigable online shopping experience, aligning with VMNBY
              Tech's commitment to delivering sophisticated, efficient digital solutions.
            </p>
          </div>
          <div class="col-md-6">
            <h4>Modules Used</h4>
            <ul>
              <li class="text-dark">Drupal Commerce
              </li>
              <li class="text-dark">Search API
              </li>
              <li class="text-dark">Facet
              </li>
              <li class="text-dark">Flag
              </li>
              <li class="text-dark">Better Exposed Filters
              </li>
              <li class="text-dark">Views Infinite Scroll

              </li>
              <li class="text-dark">Block Visibility Groups
              </li>
            </ul>
            <h4 class="my-3">Results</h4>
            <p class="text-dark">The project culminated in a fully automated system, enabling the client to manage
              operations independently without the need for additional specialists. This accomplishment underscores
              VMNBY Tech's dedication to empowering businesses with self-sufficient, scalable digital solutions. By
              prioritizing user autonomy and minimizing reliance on external support, we ensure our clients can
              seamlessly adapt and grow their online presence, reflecting our commitment to delivering not just
              technology, but a strategic advantage in the digital realm. Our approach ensures that businesses can
              leverage their digital platforms with confidence, knowing they have a robust, user-friendly system
              designed for efficiency and growth. With VMNBY Tech, companies gain more than a service provider; they
              gain a partner invested in their long-term success, ready to support them in navigating the ever-evolving
              digital landscape.</p>
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
						<p class="display-6 font-heading mb-3 text-dark-stroke text-primary-shadow" >
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
										<input required id="con-email" name="email" type="email" class="form-control"
											placeholder="E-mail">
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
										<textarea required id="con-message" name="message" cols="40" rows="6"
											class="form-control" placeholder="Message"></textarea>
										<span class="focus-border"></span>
									</div>
								</div>
								<!-- submit button -->
								<div class="col-md-12 text-start"><button class="btn btn-primary btn-line g-recaptcha"
										data-sitekey="6Lc4N3gpAAAAAKI0BA6ec9muDE_Yw34-nMGIil__" data-callback="onSubmit"
										data-action="submit" type="submit">Send Message</button></div>
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

              <a href="/uvc" class="btn btn-primary btn-line">Next case</a>
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
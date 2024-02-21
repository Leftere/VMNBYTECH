<!DOCTYPE html>
<html lang="en">
<?php include 'layouts/head/head_blog.php'; ?>

<body>
	
<!-- Pre loader -->
<div class="preloader">
	<img class="preloader-item" src="assets/images/loader/02.gif" alt="Loading">
</div>

<?php include 'header.php'; ?>

<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Inner intro START -->
<section>
	<div class="container">
		<div class="row d-flex justify-content-lg-between">
			<!-- Inner intro title -->
			<div class="col-12">
				<h1 class="display-4 text-dark-stroke text-primary-shadow">Blog Post</h1>
				<p class="lead">Sharing thoughts, ideas, stories and news with everyone.</p>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Inner intro END -->

<!-- =======================
Blog START -->
<section class="pt-0">
	<div class="container">
		<div class="row">
			<!-- Card item START -->
			<div class="col-sm-6 col-lg-4 mb-30">
				<div class="card card-metro">
					<!-- Card Image -->
					<div class="card-image">
						<img src="assets/images/blog/drupal-image.jpg" alt="card image">
					</div>
					<!-- Card Overlay -->
					<div class="card-img-overlay d-flex flex-column">
						<div class="background-transparent"></div>
						<div class="mt-auto card-text z-index-9">
							<!-- Featured label-->
							<span class="featured-label" title="Featured Blog"><i class="fas fa-star"></i></span>

							<div class="card-meta mb-3 d-flex flex-row align-items-center text-white">
								<!-- Card Categories -->
								<div class="text-primary-hover">
									<a href="#" class="text-white me-2">Drupal</a>
								</div>
								<!-- Divider -->
								<i class="fas fa-circle smaller me-2 fw-bold"></i>
								<!-- Min of read -->
								<span>5 min read</span>
							</div>

							<h4><a href="#" class="text-white text-primary-hover">Drupal 7 end-of-life. <br /> Support ending on 5 January 2025</a></h4>
							<p class="text-white text-truncate">For those in CMS world and specifically Drupal enthusiasts</p>
							<a href="blog-drupal7-end-of-life" class="btn btn-line text-white mb-0">Read Article</a>
						</div>
					</div>
				</div>
			</div>
			<!-- Card item END -->
		
	
			
		</div><!-- row END -->

		<!-- Load more START -->
		<div class="row">
			<div class="col-12">
				<div class="text-center mt-5">
					<button type="button" class="btn btn-light">Load more! <i class="fas fa-sync ms-3 text-primary"></i></button>
				</div>
			</div>
		</div>
		<!-- Load more END -->
	</div>
</section>
<!-- =======================
Blog END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<div class="cursor-dot-outline"></div>
<div class="cursor-dot"></div>

<!-- Back to top -->
<div class="back-top">
	<div class="scroll-line"></div>
	<span class="scoll-text">Go Up</span>
</div>

<?php include 'footer.php'; ?>





</body>
</html>
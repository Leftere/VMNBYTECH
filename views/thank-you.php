<?php 

setcookie('name', 'daniel', time() + 86400);

$_SESSION['name'] = "Daniel";

session_start();
?>

<!doctype html>
<html lang="en">
<?php include 'layouts/head/head_default.php'; ?>
<script async src="assets/js/gaAnalytics.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-42RFV7HHWV"></script>
<!-- Google tag (gtag.js) -->


<body>
    <?php include 'header.php'; ?>
    <main>
        <section class="text-center">
	<div class="container">
		<div class="row">
			<!-- Inner intro title -->
			<div class="col-12 my-5">
				<h1 class="display-2 text-dark-stroke text-primary-shadow">200!</h1>
				<h3>Message Sent</h3>
				<p>Thank you for contacting us. A member of our team will be in touch with you shortly!</p>
			</div>
		</div>
	</div>
</section>
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
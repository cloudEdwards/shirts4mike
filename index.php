<?php  
	// Includes the Configuration file with  Constants  ROOT_PATH and BASE_URL 
	// which point to the servers root path and the website root directory, 
	require_once("inc/config.php");
	require_once(ROOT_PATH."inc/products.php");
	$products = getProductsAll();
	$pageTitle = "Shirts 4 Mike"; 
	$section = "home";
	include(ROOT_PATH."inc/header.php"); 
	
	
?>


		<div class="section banner">

			<div class="wrapper">

				<img class="hero" src="<?php echo BASE_URL;?>img/mike-the-frog.png" alt="Mike the Frog says:">
				<div class="button">
					<a href="<?php echo BASE_URL; ?>shirts.php">
						<h2>Hey, I&rsquo;m Mike!</h2>
						<p>Check Out My Shirts</p>
					</a>
				</div>
			</div>

		</div>

		<div class="section shirts latest">

			<div class="wrapper">

				<h2>Mike&rsquo;s Latest Shirts</h2>

				<ul class="products">
					<?php 
					echo displayShirtList($products, 3,"left");					
					?>
				</ul>

			</div>

		</div>

	</div>

	<?php include(ROOT_PATH."inc/footer.php"); ?>
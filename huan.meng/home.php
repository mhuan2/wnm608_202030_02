<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
		<title>Wonderland Icecream</title>
		<?php include "parts/meta.php" ?>
	
</head>
<body>
	<?php include "parts/navbar.php" ?>
	<div class="view-window" style="background-image:url(img/welcome_page.png)">
	</div>
	<div class="container flex-parent-col" style="max-width: 700px">
		<h2>Welcome to the Wonderful Ice Cream Hub!</h2>
		<h3>Our handcrafted ice cream starts with natural, organic, and locally sourced ingredients.We know you'll find a delicious, cold treat to soothe your sweet tooth.We'll see you soon!</h3>
		<div class="flex-parent-row" style="justify-content: space-between">
			<a href="product_list.php">
				<button type="button" class="main-button">
					Shop Now
				</button>
			</a>
			<a href="home.php">
				<button type="button" class="main-button">
					Pick a Perfect Gift
				</button>
			</a>
		</div>
	</div>

	<div style="text-align: center; margin-top: 60px;">
		<h2>The Latest Scoop</h2>
	</div>

	<div style="text-align: center">
		<h4>Check us out on Instagram!</h4>
	</div>

	<div class="container">
		<div class="row cookie-category-section">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<a href="product_list.php"><img src="img/ins1.gif" class="media-image"></a>
				<h3>Your package be dilivered.</h3>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-12">
				<a href="product_list.php"><img src="img/ins2.gif" class="media-image"></a>
				<h3>Receiving your packing.</h3>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-12">
				<a href="product_list.php"><img src="img/ins3.gif" class="media-image"></a>
				<h3>Enjoy your delicious.</h3>
			</div>
		</div>
	</div>
<footer>
	<?php include "parts/footer.php" ?>
</footer>
</body>
</html>
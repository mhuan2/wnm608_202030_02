  
<?php
include_once "lib/php/functions.php";
include_once "parts/templates.php";

$_SESSION['cart'] = [];
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Purchase Confirmation</title>

	<?php include "parts/meta.php" ?>

</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="container">
		<div class="card soft">

			<h2>Purchase Confirmation</h2>

			<div>Thank you for buying</div>

			<div class="form-control">
				<a href="product_list.php" type="button" class="form-button">Back to shopping</a>
			</div>
		
		</div>
	</div>
<footer>
	<?php include "parts/footer.php" ?>
</footer>
</body>
</html>
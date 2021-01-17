<?php
	require 'connect.php';
?>

<!DOCTYPE html>


	
	<title>Shopee</title>

	<div class="app">
		<!-- header -->
		<?php
		include('header.php');
		?>
		<!--end header -->
	<?php

    /*  truyền dữ liệu vào */
        count($product->getData('cart')) ? include ('Template/_cart-template.php') :  include ('Template/notFound/_cart_notFound.php');


?>

<!-- footer -->
		<?php
		include('footer.php');
		?>

		<!--end footer -->
	</div>
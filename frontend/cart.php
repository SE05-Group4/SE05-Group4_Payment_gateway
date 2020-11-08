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

    /*  include cart items if it is not empty */
        count($product->getData('cart')) ? include ('Template/_cart-template.php') :  include ('Template/notFound/_cart_notFound.php');
    /*  include cart items if it is not empty */

        /*  include top sale section */
        count($product->getData('wishlist')) ? include ('Template/_wishilist_template.php') :  include ('Template/notFound/_wishlist_notFound.php');
        /*  include top sale section */


    /*  include top sale section */
        include ('Template/_new-phones.php');
    /*  include top sale section */

?>

<!-- footer -->
		<?php
		include('footer.php');
		?>

		<!--end footer -->
	</div>
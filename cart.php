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
    

       
        count($product->getData('wishlist')) ? include ('Template/_wishilist_template.php') :  include ('Template/notFound/_wishlist_notFound.php');
        


    /*  include phần top sale đt mới */
        include ('Template/_new-phones.php');
   

?>

<!-- footer -->
		<?php
		include('footer.php');
		?>

		<!--end footer -->
	</div>
 
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
	<link rel="stylesheet" href="assets/css/base.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/fonts/fontawesome/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
	
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
	<?php
    // require functions.php file
    require ('functions.php');
    ?>
</head>
<body>
<!-- header -->
		<header class="header">
			<div class="grid wide">

				<!-- header navbar -->
				<nav class="header__navbar">

					<!-- header navbar left -->
					<ul class="header__navbar-list">
						<li class="header__navbar-item header__navbar-item-has-qr header__navbar-item--separate">
							Vào cửa hàng trên ứng dụng Shop
							<div class="header__qr">
								<img src="assets/img/qrcode.png" alt="QR code" class="header__qr-img">
								<div class="header__qr-apps">
									<a class="header__qr-link">
										<img src="assets/img/ch_play.png" alt="CH Play" class="header__qr-download-img">
									</a>
									<a class="header__qr-link">
										<img src="assets/img/apstore.png" alt="Apstore" class="header__qr-download-img">
									</a>
								</div>
							</div>
						</li>
						<li class="header__navbar-item">
							<span class="header__navbar-item-no-pointer">Kết nối</span>
							<a href="#" class="header__navbar-icon-link">
								<i class="header__navbar-icon fab fa-facebook"></i>
							</a>
							<a href="#" class="header__navbar-icon-link">
								<i class="header__navbar-icon fab fa-instagram"></i>
							</a>
						</li>
					</ul>
					<!--rnd header navbar left -->

					<!-- header navbar right -->
					<ul class="header__navbar-list">
						<li class="header__navbar-item header__navbar-item-has-notity">
							<a href="#" class="header__navbar-item-link">
								<i class="header__navbar-icon far fa-bell"></i>
								Thông báo
							</a>
							<div class="header__notify">
								<header class="header__notify-header">
									<h3>Thông báo mới nhận</h3>
								</header>
								<ul class="header__notify-list">
									<li class="header__notify-item header__notify-item-viewed">
										<a href="#" class="header__notify-link">
											<img src="assets/img/prd_img_3.jpg" alt="" class="header__notify-img">
											<div class="header__notify-info">
												<div class="header__notify-name">4 ký do bạn phải sử dụng kem chống nắng thường xuyên</div>
												<div class="header__notify-descrition">Nhiều người vẫn cho rằng kem chống nắng chỉ sử dụng khi có ánh nắng mặt trời, còn khi thời tiết lạnh, râm</div>
											</div>
										</a>
									</li>
									<li class="header__notify-item">
										<a href="#" class="header__notify-link">
											<img src="assets/img/prd_img_2.jpg" alt="" class="header__notify-img">
											<div class="header__notify-info">
												<div class="header__notify-name">4 ký do bạn phải sử dụng kem chống nắng thường xuyên</div>
												<div class="header__notify-descrition">Nhiều người vẫn cho rằng kem chống nắng chỉ sử dụng khi có ánh nắng mặt trời, còn khi thời tiết lạnh, râm</div>
											</div>
										</a>
									</li>
									<li class="header__notify-item header__notify-item-viewed">
										<a href="#" class="header__notify-link">
											<img src="assets/img/prd_img_4.jpg" alt="" class="header__notify-img">
											<div class="header__notify-info">
												<div class="header__notify-name">4 ký do bạn phải sử dụng kem chống nắng thường xuyên</div>
												<div class="header__notify-descrition">Nhiều người vẫn cho rằng kem chống nắng chỉ sử dụng khi có ánh nắng mặt trời, còn khi thời tiết lạnh, râm</div>
											</div>
										</a>
									</li>
									<li class="header__notify-item">
										<a href="#" class="header__notify-link">
											<img src="assets/img/prd_img_8.jpg" alt="" class="header__notify-img">
											<div class="header__notify-info">
												<div class="header__notify-name">4 ký do bạn phải sử dụng kem chống nắng thường xuyên</div>
												<div class="header__notify-descrition">Nhiều người vẫn cho rằng kem chống nắng chỉ sử dụng khi có ánh nắng mặt trời, còn khi thời tiết lạnh, râm</div>
											</div>
										</a>
									</li>
								</ul>
								<div class="header__notify-footer">
									<a href="#" class="header__notity-footer-link">Xem tất cả</a>
								</div>
							</div>
						</li>
						<li class="header__navbar-item">
							<a href="#" class="header__navbar-item-link">
								<i class="header__navbar-icon far fa-question-circle"></i>
								Trợ giúp
							</a>
						</li>	

						<!-- <li class="header__navbar-item header__navbar-item--strong header__navbar-item--separate">Đăng ký</li>
							<li class="header__navbar-item header__navbar-item--strong">Đăng nhập</li> -->

							<li class="header__navbar-item header__navbar-user">
								<img src="assets/img/avata.jpg" class="header__navbar-user-img">
								<span class="header__navbar-user-name">Vĩnh Tiến</span>

								<ul class="header__navbar-user-menu">
									<li class="header__navbar-user-item">
										<a href="#">Tài khoản của tôi</a>
									</li>
									<li class="header__navbar-user-item">
										<a href="/demo/address.php">Địa chỉ của tôi</a>
									</li>
									<li class="header__navbar-user-item">
										<a href="#">Đơn mua</a>
									</li>
									<li class="header__navbar-user-item header__navbar-user-item--separate">
										<a href="/demo/dangky/login.php">

										Đăng xuất</a>
									</li>
								</ul>
							</li>		
						</ul>
						<!--end header navbar right -->
					</nav>

					<!-- end header-navbar -->


					<!-- header-search -->
					<div class="header-with-search">

						<!-- logo -->
						<div class="header__logo">
							<a href="#" class="header__logo-link">
								<img class="header__logo-img" src="" alt="">
							</a>
						</div>

						<!-- end logo -->

						<!-- search -->
						<a class="navbar-brand" href="/demo/main-page.php">Shop</a>
						<div class="header__search hide-on-mobile">
							<div class="header__search-input-wrap">

								<input type="text" class="header__search-input" placeholder="Tìm kiếm sản phẩm tại đây">

								<div class="header__search-history">
									<h3 class="header__search-history-heading">Lịch sử tìm kiếm</h3>
									<ul class="header__search-history-list">
										<li class="header__search-history-item">
											<a href="#">SamSung Galaxy S10</a>
										</li>
										<li class="header__search-history-item">
											<a href="#"></a>
										</li>
									</ul>
								</div>
							</div>
							<div class="header__search-select">
								<span class="header__search-select-label">
									Trong shop
								</span>
								<i class="fas fa-chevron-down header__search-select-icon"></i>

								<ul class="header__search-option">
									<li class="header__search-option-item header__search-option-item--active">
										<span>Trong shop</span>
										<i class="fas fa-check "></i>
									</li>

									<li class="header__search-option-item">
										<span>Ngoài shop</span>
										<i class="fas fa-check "></i>
									</li>
								</ul>
							</div>

							<button class="header__search-btn">
								<i class="fas fa-search header__search-btn-icon"></i>
							</button>

						</div>
						<!--end search -->

						<!-- cart -->
						<div class="header__cart">
							<div class="header__cart-wrap">
							
								<a href="cart.php" class="py-2 rounded-pill color-primary-bg">
									<span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
									<span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart')); ?></span>
								</a>
							</div>
						</div>
						<!--end cart -->
					</div>

					<!--end header-search -->
				</div>
			<!-- <ul class="header__sort-bar grid wide">
				<li class="header__sort-item">
					<a href="#" class="header__sort-link">Liên quan</a>
				</li>

				<li class="header__sort-item header__sort-item--active">
					<a href="#" class="header__sort-link">Mới nhất</a>
				</li>

				<li class="header__sort-item">
					<a href="#" class="header__sort-link">Bán chạy</a>
				</li>

				<li class="header__sort-item">
					<a href="#" class="header__sort-link">Giá</a>
				</li>

			</ul> -->
		</header>
		<!--end header -->
</body>
</html>
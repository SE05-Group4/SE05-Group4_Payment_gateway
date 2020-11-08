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

		<!-- container -->
		<div class="app__container">
			<div class="grid wide">
				<div class="grid__row app__content">

					<!-- aside -->
					<div class="grid__column-2">
						<nav class="category">
							<h3 class="category__heading">
								<i class="fas fa-list-ul category__heading-icon"></i>
							Danh mục</h3>
							<ul class="category-list">
								<li class="category-item catgory-item--active">
									<a href="#" class="category-item__link">Gang tay phượt</a>
								</li>
								<li class="category-item">
									<a href="#" class="category-item__link">Mũ bảo hiểm</a>
								</li>
								<li class="category-item">
									<a href="#" class="category-item__link">Giày leo núi</a>
								</li>
								<li class="category-item">
									<a href="#" class="category-item__link">Giáp bảo hộ</a>
								</li>
								<li class="category-item">
									<a href="#" class="category-item__link">Túi đeo chéo</a>
								</li>
								<li class="category-item">
									<a href="#" class="category-item__link">Khăn chống nắng</a>
								</li>
								<li class="category-item">
									<a href="#" class="category-item__link">Kính đi phượt </a>
								</li>
								<li class="category-item">
									<a href="#" class="category-item__link">Áo đi phượt</a>
								</li>
								<li class="category-item">
									<a href="#" class="category-item__link">Balo đi phượt</a>
								</li>
							</ul>
						</nav>
					</div>
					<!-- end aside -->

					<!-- article -->
					<div class="grid__column-10">

						<!-- home filter -->
						<div class="home-filter hide-on-mobile-tablet">
							<span class="home-filter__label">
								Sắp xếp theo
							</span>
							<button class="btn home-filter__btn">Phổ biến</button>
							<button class="btn btn--primary home-filter__btn">Mới nhất</button>
							<button class="btn home-filter__btn">Bán chạy</button>

							<div class="select-input">
								<span class="select-input__label">Giá</span>
								<i class="fas fa-chevron-down select-input__icon"></i>
								<ul class="select-input__list">
									<li class="select-input__item">
										<a href="#" class="select-input__link">Giá: Thấp đến cao</a>
									</li>
									<li class="select-input__item">
										<a href="#" class="select-input__link">Giá: Cao đến thấp</a>
									</li>

								</ul>
							</div>

							<div class="home-filter__page">
								<span class="home-filter__page-num">
									<span class="home-filter__page-current">1</span>/
									<span class="home-filter__page-total">14</span>
								</span>
								<div class="home-filter__page-control">
									<a href="#" class="home-filter__page-btn home-filter__page-btn--disable">
										<i class="fas fa-angle-left home-filter__page-icon"></i>
									</a>
									<a href="#" class="home-filter__page-btn">
										<i class="fas fa-angle-right home-filter__page-icon"></i>
									</a>
								</div>
							</div>
						</div>

						<!--end home filter -->

						<!-- product -->
						<div class="home-product">
							<div class="grid__row">
								<!-- product item -->
								<?php
								$sql='SELECT * FROM PRODUCT';
								// var_dump($sql); 
								$result = $connect->query($sql);
								// if ($result->$num_rows > 0) {
								while($row = $result->fetch_assoc()) {  ?>
								<div class="grid__column-2-4">
									<a class="home-product-item" href="#">
										<div class="home-product-item-img" style="background-image: url(<?php echo $row["item_image"]; ?>)">
										</div>
										<h4 class="home-product-item-name"><?php echo $row["item_name"]; ?></h4>
										<div class="home-product-item__price">
											<span class="home-product-item__price-old">1.400.000đ</span>
											<span class="home-product-item__price-current"><?php echo $row['item_price']; ?></span>
										</div>
										<div class="home-product-item__action">
											<div class="header__cart" style="width: 28px">
									<div class="header__cart-wrap">
										<button type="button" style="background-color: white; border: white"><i class="fas fa-shopping-cart header__cart-icon" style="color: #e14818; "></i></button>
										<div class="header__cart-list">
											<!-- no cart: header__cart-list--no-cart -->
											<img src="assets/img/no_cart.png" alt="" class="header__cart-no-cart-img">
										</div>
											</div>
										</div>
											<div class="home-product-item__rating">
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
												<i class="fas fa-star home-product-item__star--gold"></i>
											</div>
											<span class="home-product-item__sold">22 đã bán</span>
										</div>
										<div class="home-product-item__origin">
											<span class="home-product-item__brand"></span>
											<span class="home-product-item__origin-name">Thái Lan</span>
										</div>
										<div class="home-product-item__favourite">
											<i class="fas fa-check"></i>
											<span>Yêu thích</span>
										</div>
										<div class="home-product-item__sale-off">
											<span class="home-product-item__sale-off-percent">10%</span>
											<span class="home-product-item__sale-off-label">GIẢM</span>
										</div>
									</a>
								</div>
							<?php } ?>
								<!-- //import -->
								
								
							</div>
						</div>
						<!--end product -->
						
						<!-- pagination -->
						<ul class="pagination home-product__pagination">
							<li class="pagination-item">
								<a href="#" class="pagination-item__link">
									<i class="pagination-item__icon fas fa-angle-left"></i>
								</a>
							</li>

							<li class="pagination-item pagination-item--active">
								<a href="#" class="pagination-item__link">1</a>
							</li>
							<li class="pagination-item">
								<a href="#" class="pagination-item__link">2</a>
							</li>
							<li class="pagination-item">
								<a href="#" class="pagination-item__link">3</a>
							</li>
							<li class="pagination-item">
								<a href="#" class="pagination-item__link">4</a>
							</li>
							<li class="pagination-item">
								<a href="#" class="pagination-item__link">5</a>
							</li>
							<li class="pagination-item">
								<a href="#" class="pagination-item__link">...</a>
							</li>
							<li class="pagination-item">
								<a href="#" class="pagination-item__link">14</a>
							</li>

							<li class="pagination-item">
								<a href="#" class="pagination-item__link">
									<i class="pagination-item__icon fas fa-angle-right"></i>
								</a>
							</li>
						</ul>
						<!--end pagination -->
					</div>
					<!--end article -->
				</div>
			</div>
		</div>
		<!--end container -->

		<!-- footer -->
		<?php
		include('footer.php');
		?>

		<!--end footer -->
	</div>
	<!-- <div class="modal">
		<div class="modal__overlay"></div>
		<div class="modal__body"> -->

			<!-- resgist form -->
			<!-- <div class="auth-form">
				<div class="auth-form__container">
					<div class="auth-form__header">
						<h3 class="auth-form__heading">Đăng ký</h3>
						<span class="auth-form__switch-btn">Đăng nhập</span>
					</div>

					<div class="auth-form__form">
						<div class="auth-form__group">
							<input class="auth-form__input" type="text" placeholder="Email của bạn">
						</div>
						<div class="auth-form__group">
							<input class="auth-form__input" type="password" placeholder="Mật khẩu của bạn">
						</div>
						<div class="auth-form__group">
							<input class="auth-form__input" type="password" placeholder="Nhập lại mật khẩu">
						</div>
					</div>

					<div class="auth-form__aside">
						<p class="auth-form__policy-text">Bằng việc đăng ký, bạn đã đồng ý với QC - Shop về <a href="#" class="auth-form__policy-link">Điều khoản dịch vụ</a> & 
							<a href="#" class="auth-form__policy-link">Chính sách bảo mật</a>
						</p>
					</div>

					<div class="auth-form__controls">
						<button class="btn auth-form__controls-back">TRỞ LẠI</button>
						<button class="btn btn--primary">Đăng ký</button>
					</div>
				</div>

				<div class="auth-form__socials">
					<a href="#" class="btn btn--with-icon btn--size-s auth-form__socials--facebook">
						<i class="fab fa-facebook-square auth-form__socials-icon"></i>
						<span class="auth-form__socials-title">
							Kết nối với Facebook
						</span>
					</a>
					<a href="#" class="btn btn--with-icon btn--size-s auth-form__socials--google">
						<i class="fab fa-google auth-form__socials-icon"></i>
						<span class="auth-form__socials-title">
							Kết nối với google
						</span>
					</a>
				</div>
			</div> -->

			<!-- login form -->
			<!-- <div class="auth-form">
				<div class="auth-form__container">
					<div class="auth-form__header">
						<h3 class="auth-form__heading">Đăng nhập</h3>
						<span class="auth-form__switch-btn">Đăng ký</span>
					</div>

					<div class="auth-form__form">
						<div class="auth-form__group">
							<input class="auth-form__input" type="text" placeholder="Email của bạn">
						</div>
						<div class="auth-form__group">
							<input class="auth-form__input" type="password" placeholder="Mật khẩu của bạn">
						</div>
					</div>

					<div class="auth-form__aside">
						<div class="auth-form-help">
							<a href="#" class="auth-form__help-link auth-form-help-fogot">Quên mật khẩu</a>
							<span class="auth-form-help-separate">
							</span>
							<a href="#" class="auth-form__help-link">Cần trợ giúp?</a>
						</div>
					</div>

					<div class="auth-form__controls">
						<button class="btn auth-form__controls-back">TRỞ LẠI</button>
						<button class="btn btn--primary">Đăng nhập</button>
					</div>
				</div>

				<div class="auth-form__socials">
					<a href="#" class="btn btn--with-icon btn--size-s auth-form__socials--facebook">
						<i class="fab fa-facebook-square auth-form__socials-icon"></i>
						<span class="auth-form__socials-title">
							Đăng nhập với Facebook
						</span>
					</a>
					<a href="#" class="btn btn--with-icon btn--size-s auth-form__socials--google">
						<i class="fab fa-google auth-form__socials-icon"></i>
						<span class="auth-form__socials-title">
							Đăng nhập với google
						</span>
					</a>
				</div>
			</div> -->
		<!-- </div>
	</div>  -->
</html>

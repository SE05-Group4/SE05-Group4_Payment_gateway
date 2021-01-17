<?php

// shuffle($product_shuffle);

    // request method post
if($_SERVER['REQUEST_METHOD'] == "POST"){
	if (isset($_POST['top_sale_submit'])){
            // call method addToCart
		$Cart->addToCart($_POST['user_id'], $_POST['item_id']);
	}
}
?>
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
							<a href="#" class="category-item__link">Điện thoại</a>
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
								<div class="grid__column-2-4 text-center">
									<a class="home-product-item" href="#">
										<div class="home-product-item-img" style="background-image: url(<?php echo $row["item_image"]; ?>)"></div>
										<h4 class="home-product-item-name"><?php echo $row["item_name"]; ?></h4>

										<div class="rating text-warning font-size-12" >
											<span><i class="fas fa-star"></i></span>
											<span><i class="fas fa-star"></i></span>
											<span><i class="fas fa-star"></i></span>
											<span><i class="fas fa-star"></i></span>
											<span><i class="far fa-star"></i></span>
										</div>
										<div>
											<span class="home-product-item__price-current "><?php echo  $format_number_1 = number_format($row['item_price']); ?></span>
										</div>
										<div>
											<div class="header__cart" style="width:190px">
												<form method="post">
													<input type="hidden" name="item_id" value="<?php echo $row['item_id'] ?? '1'; ?>">
													<input type="hidden" name="user_id" value="<?php echo 1; ?>">
													<?php
													if (in_array($row['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
														echo '<button type="submit" disabled class="btn btn-success font-size-12">Đã thêm vào giỏ</button>';
													
													}else{
														echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Thêm vài giỏ</button>';
													}
													?>

												</form>
											</div>
										</div>
										<div class="home-product-item__favourite">
											<i class="fas fa-check"></i>
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

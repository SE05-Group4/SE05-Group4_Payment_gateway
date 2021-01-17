<?php
	require 'connect.php';
?>

<!DOCTYPE html>


	
	<title>Shopee</title>
	
	<div class="app">
		<!-- header -->
		<?php include('header.php'); ?>
		
		<!--end header -->

		<!-- main -->
		<?php include('main.php') ?>

		<!--end footer -->
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

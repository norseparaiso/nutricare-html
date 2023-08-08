<!doctype html>
<html lang="en">
	<head>
		<?php include "includes/head.php"; ?>
		</head>
    <body>
		<div id="app">
			<div class="mainwrap">
				<div class="container my-auto">
					<div class="login-wrap">
						<div class="row no-gutters">
							<div class="col-12 col-lg-7 text-center my-auto">
								<div class="splash d-flex flex-column my-auto">
									<div class="logo-wrap">
										<picture>
											<source srcset="images/logo-splash.webp" type="image/webp">
											<source srcset="images/logo-splash.png" type="image/png">
											<img alt="NutriCare" src="images/logo-splash.png" width="348" draggable="false" height="248">
										</picture>
									</div>
									<h1>Welcome to NutriCare</h1>
								</div>
							</div>
							<div class="col-12 col-lg-5 text-center my-auto">
								<div class="form-wrap">
									<h2>Log into your account</h2>
									<form action="#" method="post">
										<div class="row">
											<div class="col-12">
												<div class="input-grp">
													<label for="uname" class="icon-lbl"><i class="fa-solid fa-envelope"></i><span class="sr-only">Username</span></label>
													<input type="email" name="username" class="uname" id="uname" placeholder="Email" required>
												</div>
											</div>
											<div class="col-12">
												<div class="input-grp">
													<label for="pword" class="icon-lbl"><i class="fa-solid fa-lock"></i><span class="sr-only">Password</span></label>
													<input type="password" name="password" class="pword" id="pword" placeholder="Password" required>
													<span class="show-password">
														<i class="fa-solid fa-eye"></i>
														<i class="fa-solid fa-eye-slash"></i>
													</span>
												</div>
											</div>
											<div class="col-12 notify-wrap">
												<div class="alert alert-danger" role="alert" style="display: none;">
													<i class="fa-solid fa-triangle-exclamation"></i> Incorrect email or password! Try again.
												</div>
											</div>
											<div class="col-12">
												<a href="forgot.html" class="forgot-link">Forgot password?</a>
											</div>
											<div class="col-12">
												<input type="submit" value="Log in" class="btn btn-primary mb-2">
											</div>
											<div class="col-12">
												<span class="d-block hr-text mb-2"><span>Or</span></span>
												<button class="btn btn-secondary mb-4 google-btn">
													<span class="google">
														<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 48 48" class="abcRioButtonSvg"><g><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path><path fill="none" d="M0 0h48v48H0z"></path></g></svg>
													</span>
													Google
												</button>
												<span class="d-block mb-3">Have no account yet?</span>
												<a href="#" class="btn btn-secondary">Register as a new user</a>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include "includes/footer.php"; ?>
		<script>
			(function(){
				$(document).ready(function(){
					$(".show-password").click(function(e){
						e.preventDefault();
						if(!$(this).is(".toggled")){
							$(this).parent().find("input[type='password']").attr("type","text");
						}else{
							$(this).parent().find("input[type='text']").attr("type","password");
						}
						$(this).toggleClass("toggled");
					});
					$("form").submit(function(e){
						e.preventDefault();
						setTimeout(function(){
							$(".alert-danger").slideDown("fast");
						}, 500);
					});
				});
			})(jQuery);
		</script>
	</body>
</html>
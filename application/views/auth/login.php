<!--wrapper-->
<div class="wrapper">
	<div class="section-authentication-cover">
		<div class="">
			<div class="row g-0">

				<div class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex">

					<div class="card shadow-none bg-transparent shadow-none rounded-0 mb-0">
						<div class="card-body">
							<img src="<?php echo base_url(); ?>assets/images/login-images/login-cover.svg" class="img-fluid auth-img-cover-login" width="650" alt="" />
						</div>
					</div>

				</div>

				<div class="col-12 col-xl-5 col-xxl-4 auth-cover-right align-items-center justify-content-center">
					<div class="card rounded-0 m-3 shadow-none bg-transparent mb-0">
						<div class="card-body p-sm-5">
							<div class="">
								<div class="mb-3 text-center">
									<img src="<?php echo base_url(); ?>assets/images/logo-icon.png" width="60" alt="">
								</div>
								<div class="text-center mb-4">
									<h5 class="">Login Page</h5>
									<p class="mb-0">Please log in to your account</p>
								</div>
								<div class="form-body">
									<form class="row g-3">
										<div class="col-12">
											<label for="inputEmailAddress" class="form-label">Email</label>
											<input type="text" class="form-control" id="email" name="email" placeholder="email.example@gmail.com">
										</div>
										<div class="col-12">
											<label for="inputChoosePassword" class="form-label">Password</label>
											<div class="input-group" id="show_hide_password">
												<input type="password" class="form-control border-end-0" id="password" name="password" value="" placeholder="Masukkan Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class="bx bx-hide"></i></a>
											</div>
										</div>
										<div class="col-md-6">

										</div>
										<div class="col-md-6 text-end"> <a href="authentication-forgot-password.html">Lupa Password?</a>
										</div>
										<div class="col-12">
											<div class="d-grid">
												<button type="submit" class="btn btn-primary">Login</button>
											</div>
										</div>
										<div class="col-12">
											<div class="text-center ">
												<p class="mb-0">Belum punya akun ?, Buat akun disini <a href="<?php echo base_url('auth/registration')?>">Register disini</a>
												</p>
											</div>
										</div>
									</form>
								</div>

							</div>
						</div>
					</div>
				</div>

			</div>
			<!--end row-->
		</div>
	</div>
</div>
<!--end wrapper-->
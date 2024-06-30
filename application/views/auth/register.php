<!--wrapper-->
<div class="wrapper">
	<div class="section-authentication-cover">
		<div class="">
			<div class="row g-0">

				<div class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex">

					<div class="card shadow-none bg-transparent shadow-none rounded-0 mb-0">
						<div class="card-body">
							<img src="<?= base_url('assets/'); ?>images/login-images/register-cover.svg" class="img-fluid auth-img-cover-login" width="550" alt="" />
						</div>
					</div>

				</div>

				<div class="col-12 col-xl-5 col-xxl-4 auth-cover-right align-items-center justify-content-center">
					<div class="card rounded-0 m-3 shadow-none bg-transparent mb-0">
						<div class="card-body p-sm-5">
							<div class="">
								<div class="mb-3 text-center">
									<img src="<?= base_url('assets/'); ?>images/logo-icon.png" width="60" alt="" />
								</div>
								<div class="text-center mb-4">
									<h5 class="">Register Page</h5>
									<p class="mb-0">Please fill the below details to create your account</p>
								</div>
								<div class="form-body">
									<form class="row g-3" method="post" action="<?= base_url('auth/register');?>">
										<div class="col-12">
											<label for="inputUsername" class="form-label">Username</label>
											<input type="text" class="form-control" id="name" name="name" placeholder="Jhon" value="<?= set_value('name');?>">
											<?= form_error('name', '<small class="text-danger">', '</small>');?>
											
										</div>
										<div class="col-12">
											<label for="inputEmailAddress" class="form-label">Email Address</label>
											<input type="email" class="form-control" id="email" name="email" placeholder="example@user.com" value="<?= set_value('email');?>">
											<?= form_error('email', '<small class="text-danger">', '</small>');?>
										</div>
										<div class="col-12">
											<label for="inputChoosePassword" class="form-label">Password</label>
											<div class="input-group" id="show_hide_password1">
												<input type="password" class="form-control border-end-0" id="password1" name="password1" value="" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
											</div>
											<?= form_error('password1', '<small class="text-danger">', '</small>');?>
										</div>
										<div class="col-12">
											<label for="inputChoosePassword" class="form-label">Repeat Password</label>
											<div class="input-group" id="show_hide_password2">
												<input type="password" class="form-control border-end-0" id="password2" name="password2" value="" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
											</div>
										</div>
										<div class="col-12">

										</div>
										<div class="col-12">
											<div class="d-grid">
												<button type="submit" class="btn btn-primary">Register</button>
											</div>
										</div>
										<div class="col-12">
											<div class="text-center ">
												<p class="mb-0">Sudah punya akun? <a href="<?= base_url('auth'); ?>">Login disini</a></p>
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
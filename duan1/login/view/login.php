<section class="ftco-section" style="height:100vh; padding: 5rem;">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Bạn đã có tài khoản?</h3>
		      	<form action="?" class="signin-form" id="" method="post">
		      		<div class="form-group">
		      			<input type="text" class="form-control" placeholder="Username" required name="username">
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Password" required name="password">
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
					<span style="color: Maroon; font-size:15px;"><?php if(!empty($erro['username'])){
                      echo $erro['username'];
					}?></span>
						<span style="color: Maroon; font-size:15px;"><?php if(!empty($erro['password'])){
                      echo $erro['password'];
					}?></span>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Quên Mật Khẩu</a>
								</div>
	            </div>
	          </form>
	          <p class="w-100 text-center">&mdash;<a href="?ctl=createAcc" style="font-size: 20px;">Tạo tài khoản</a> &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
	          	<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>
<section class="ftco-section" class="img js-fullheight" style="height:100vh; padding: 2rem;">
		<div class="container">
			<!-- <div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
				</div>
			</div> -->
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Tạo tài khoản</h3>
		      	<form action="?ctl=createAcc" class="signin-form" id="form-login" method="post">
		      	<div class="form-group">
		      			<input id="name" type="text" class="form-control" placeholder="Tên người dùng" name="name">
                          <span class="form-message" style="color:Maroon;"><?php if(!empty($error['name'])){
	                       echo $error['name'];
	                       } ?></span>

		      		</div>
                <div class="form-group">
		      			<input id="email" type="email" class="form-control" placeholder="Email" name="email">
                          <span class="form-message" style="color:Maroon;"><?php if(!empty($error['email'])){
	                       echo $error['email'];
	                       } ?></span>
		      	</div>
                  <div class="form-group">
		      			<input id="username" type="text" class="form-control" placeholder="Username"  name="username">
                          <span class="form-message" style="color:Maroon;"><?php if(!empty($error['username'])){
	                       echo $error['username'];
	                       } ?></span>
		      		</div>
	            <div class="form-group">
	              <input id="password" type="password" class="form-control" placeholder="Password"  name="password">
                  <span class="form-message" style="color:Maroon;"><?php if(!empty($error['password'])){
	                       echo $error['password'];
	                       } ?></span>
	            </div>
                <div class="form-group">
	              <input id="password2" type="password" class="form-control" placeholder="Nhập lại mật khẩu" name="password2">
                  <span class="form-message" style="color:Maroon;"><?php if(!empty($error['password2'])){
	                       echo $error['password2'];
	                       } ?></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Tạo tài khoản</button>
					<span style="color: green; font-size:20px;"><?php if(!empty($alret)){
                      echo $alret;
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
	          <p class="w-100 text-center">&mdash;<a href="?" style="font-size: 20px;">Đăng Nhập</a> &mdash;</p>
			
	          <div class="social d-flex text-center">
	          	<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
	          	<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>
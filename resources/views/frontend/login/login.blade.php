<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>TIHO đăng nhập</title>
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700,800' rel='stylesheet' type='text/css'>
		<!-- bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- all css -->
		<link rel="stylesheet" href="css/all.css">
		<!-- login css -->
		<link rel="stylesheet" href="css/login.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<!-- font-awesome -->
		<link rel="stylesheet" href="css/css/fontawesome.min.css">
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	</head> 
	<body>
		<!-- start header -->
		<header>
			@include('layouts._header')
		</header>
		<!-- end header -->
		<div class="container">
			<div class="login-form">
				<form action="/examples/actions/confirmation.php" method="post">
					<h2 class="text-center">Đăng nhập</h2>		
					<div class="text-center social-btn">
						<a href="#" class="btn btn-primary btn-block"><i class="fa fa-facebook"></i> Đăng nhập với <b>Facebook</b></a>
						<a href="#" class="btn btn-info btn-block"><i class="fa fa-twitter"></i> Đăng nhập với <b>Twitter</b></a>
						<a href="#" class="btn btn-danger btn-block"><i class="fa fa-google"></i> Đăng nhập với <b>Google</b></a>
					</div>
					<div class="or-seperator"><i>hoặc</i></div>
					<div class="form-group">
						<div class="input-group">                
							<div class="input-group-prepend">
								<span class="input-group-text">
									<span class="fa fa-user"></span>
								</span>                    
							</div>
							<input type="text" class="form-control" name="username" placeholder="Tên đăng nhập" required="required">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="fa fa-lock"></i>
								</span>                    
							</div>
							<input type="password" class="form-control" name="password" placeholder="Mật khẩu" required="required">
						</div>
					</div>        
					<div class="form-group">
						<button type="submit" class="btn btn-success btn-block login-btn">Đăng nhập</button>
					</div>
					<div class="clearfix">
						<label class="float-left form-check-label"><input type="checkbox"> Ghi nhớ</label>
						<a href="#" class="float-right text-success">Quên mật khẩu?</a>
					</div>  
					
				</form>
				<div class="hint-text">Bạn chưa có tài khoản? <a href="/register" class="text-success">Đăng kí ngay!</a></div>
			</div>
		</div>			
		<!-- start footer -->
		<footer>
			@include('layouts._footer')
		</footer>
		<!-- end footer -->
	</body>
</html>
<!-- bootstrap -->
<script src="js/bootstrap.min.js"></script>
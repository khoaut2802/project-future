<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>TIHO đăng kí</title>
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700,800' rel='stylesheet' type='text/css'>
		<!-- bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- all css -->
		<link rel="stylesheet" href="css/all.css">
		<!-- register css -->
		<link rel="stylesheet" href="css/register.css">
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
		<div class="signup-form">
			<form action="/examples/actions/confirmation.php" method="post">
				<h2>Tạo tài khoản</h2>
				<p class="hint-text">Đăng kí tài khoản với các mạng xã hội hoặc email</p>
				<div class="social-btn text-center">
					<a href="#" class="btn btn-primary btn-lg"><i class="fa fa-facebook"></i> Facebook</a>
					<a href="#" class="btn btn-info btn-lg"><i class="fa fa-twitter"></i> Twitter</a>
					<a href="#" class="btn btn-danger btn-lg"><i class="fa fa-google"></i> Google</a>
				</div>
				<div class="or-seperator"><b>hoặc</b></div>
				<div class="form-group">
					<input type="text" class="form-control input-lg" name="username" placeholder="Tên đăng nhập" required="required">
				</div>
				<div class="form-group">
					<input type="email" class="form-control input-lg" name="email" placeholder="Địa chỉ email" required="required">
				</div>
				<div class="form-group">
					<input type="password" class="form-control input-lg" name="password" placeholder="Mật khẩu" required="required">
				</div>
				<div class="form-group">
					<input type="password" class="form-control input-lg" name="confirm_password" placeholder="Xác nhận mật khẩu" required="required">
				</div>  
				<div class="form-group">
					<button type="submit" class="btn btn-success btn-lg btn-block signup-btn">Đăng kí</button>
				</div>
			</form>
			<div class="text-center">Bạn đã có tài khoản? <a href="/login">Đăng nhập ngay</a></div>
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
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>TIHO tìm kiếm phòng trọ Buôn Ma Thuột</title>
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700,800' rel='stylesheet' type='text/css'>
		<!-- bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- all css -->
		<link rel="stylesheet" href="css/all.css">
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
		
		<!-- start footer -->
		<footer>
			@include('layouts._footer')
		</footer>
		<!-- end footer -->
	</body>
</html>
<!-- bootstrap -->
<script src="js/bootstrap.min.js"></script>
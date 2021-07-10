<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="icon" type="image/svg" href="assets/img/twemoji_desktop-computer.svg" />

	<!-- CSS Bostrap -->
	<link rel="stylesheet" href="{{ asset('other/bootstrap/css/bootstrap.css') }}">

	<!-- CSS Manual -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/style/css/style.css') }}">


	<!-- JS Boostrap -->
	<script src="{{ asset('other/bootstrap/jquery.js') }}"></script>
	<script src="{{ asset('other/bootstrap/js/bootstrap.js') }}"></script>
</head>

<body>
	<!-- <div class="row">
		<div class="col-8" style="background-color: #1a365d;">
			<div class="box1">
				<div class="batas">
					<div class="col-md-5 offset-md-4">
						<img src="assets/img/computer.png">
						<p1>Billing</p1>
					</div>
					<div class="col-md-1 offset-md-2">
						<img src="assets/img/Admin.png" alt="">
					</div>
				</div>
			</div>
		</div>
		<div class="col-4">
			<div class="box2">

				<p2>Selamat Datang Admin</p2>


				<p3>Masukkan email dan password yang benar</p3>


				<p4>Email</p4>

				<div class="input1">
					<input type="text">
				</div>

				<p5>Password</p5>

				<div class="input2">
					<input type="text">
				</div>
				<button class="b1">Login</button>
			</div>
		</div>
	</div> -->



	<section class="form">
		<div class="row">
			<div class="col-lg-8">
				<div class="banner">
					<img src="{{ asset('frontend/img/LogoKecil.svg') }}" alt="">
					<div class="image">
						<img src="{{ asset('frontend/img/Admin-rafiki.svg') }}" alt="">
					</div>
				</div>
			</div>
			<div class="col-lg-4 px-5 pt-5">
				<h4>Selamat Datang Admin</h4>
				<h6>Masukkan Email dan Password yang benar</h6>
				<form action="#">
					<div class="form-row">
						<div class="col-lg-7">
							<label for="exampleInputEmail1">Email </label>
							<input type="email" placeholder="Masukkan Email" class="form-control mb-4 p-4">
						</div>
					</div>
					<div class="form-row">
						<div class="col-lg-7">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" placeholder="Masukkan Password" class="form-control mb-4 p-4">
						</div>
					</div>
					<div class="form-row">
						<div class="col-lg-7">
							<a href="/home"><button type="button" class="btn1">Login</button></a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>


</body>

</html>
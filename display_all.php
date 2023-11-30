<!-- connect file -->
<?php
include('includes/connect.php');
include('functions/common_function.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utd-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, intial-scale.0">
	<title>LebanonExpress</title>
	<!-- boostrap CSS link -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
		crossorigin="anonymous">
	<!-- font awesome link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
		integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- css file -->
	<link rel="stylesheet" href="style.css">


</head>

<body>
	<!-- navbar -->
	<div class="container-fluid p-0" style="overflow:hidden">
		<!--first child -->
		<nav class="navbar navbar-expand-lg navbar-light bg-primary">
			<div class="container-fluid">

				<img src="./image/leb.png" alt="" class="logo">
				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Home <span
									class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="display_all.php">Products</a>
						</li>
						<li class="nav-item">
							<a class="nav-link"
								href="users_area/user_registration.php">Register</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><i
									class="fa-sharp fa-solid fa-cart-plus"></i></a>
						</li>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Total Price</a>
						</li>
					</ul>
					<form class="d-flex">
						<input class="form-control mr-sm-2" type="search"
							placeholder="Search" aria-label="Search">
						<!-- <button class="btn btn-outline-light"
							type="submit">Search</button> -->
							<input type="submit" value="search" class="btn btn-outline-light">
					</form>
				</div>
			</div>
		</nav>
		<!-- second child -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
			<ul class="navbar-nav me-auto">
				<li class="nav-item">
					<a class="nav-link" href="#">Welcome Guest</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="users_area/user_login.php">Login</a>
				</li>
			</ul>
		</nav>
		<!-- third child -->
		<div class="bg-light">
			<h3 class="text-center">Lebanon Express</h3>
			<p class="text-center">Shopping at the comfort of your home</p>
		</div>
		<!-- fourth cild -->
		<div class="row px-1">
			<div class="col-md-10">
				<!-- products -->
				<div class="row">
					<!-- fetching products -->
					<?php
					get_all_products();
					get_unique_categories();
					get_unique_brands();
					?>
					

					<!-- row end -->
				</div>
				<!-- col end -->
			</div>

			<div class="col-md-2 bg-secondary p-0">
				<!-- brands to be displayed -->
				<ul class="navbar-nav me-auto text-center">
					<li class="nav-item bg-info">
						<a href="#" class="nav-link text-light">
							<h3>Delivery brands</h3>
						</a>
					</li>
					<?php
					getbrands()
					?>

				</ul>
				<ul class="navbar-nav me-auto text-center">
					<li class="nav-item bg-info">
						<a href="#" class="nav-link text-light">
							<h3>Categories</h3>
						</a>
					</li>
					<?php
					getcategories()
					?>

				</ul>
			</div>
		</div>
		<!-- last child -->
		<div class="bg-info p-3 text-center col-md-12">
			<p>all rights reserved @- Designed by Ali</p>
		</div>
	</div>





	<!-- bootstrap js link -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
		integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
		crossorigin="anonymous"></script>
</body>

</html>
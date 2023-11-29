<!-- connect file -->
<?php
include('includes/connect.php')
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
							<a class="nav-link" href="#">Home <span
									class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Products</a>
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
						<button class="btn btn-outline-light"
							type="submit">Search</button>
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
		<div class="row">
			<div class="col-md-10">
				<!-- products -->
				<div class="row">
					<div class="col-md-4 mb-2 paddingfix">
						<div class="card">
							<img class="card-img-top" src="./images/apple.jpg"
								alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">Some quick example
									text to build on the card
									title and make up the bulk of
									the card's content.</p>
								<a href="#" class="btn btn-info">add to
									cart</a>
								<a href="#"
									class="btn btn-secondary">view
									more</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-2 paddingfix">
						<div class="card">
							<img class="card-img-top"
								src="./images/iphone.jpg"
								alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">Some quick example
									text to build on the card
									title and make up the bulk of
									the card's content.</p>
								<a href="#" class="btn btn-info">add to
									cart</a>
								<a href="#"
									class="btn btn-secondary">view
									more</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-2 paddingfix">
						<div class="card">
							<img class="card-img-top" src="./images/ipad.jpg"
								alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">Some quick example
									text to build on the card
									title and make up the bulk of
									the card's content.</p>
								<a href="#" class="btn btn-info">add to
									cart</a>
								<a href="#"
									class="btn btn-secondary">view
									more</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-2 paddingfix">
						<div class="card">
							<img class="card-img-top"
								src="./images/carrots.jpg"
								alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">Some quick example
									text to build on the card
									title and make up the bulk of
									the card's content.</p>
								<a href="#" class="btn btn-info">add to
									cart</a>
								<a href="#"
									class="btn btn-secondary">view
									more</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-2 paddingfix">
						<div class="card">
							<img class="card-img-top"
								src="./images/carrots.jpg"
								alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">Some quick example
									text to build on the card
									title and make up the bulk of
									the card's content.</p>
								<a href="#" class="btn btn-info">add to
									cart</a>
								<a href="#"
									class="btn btn-secondary">view
									more</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-2 paddingfix">
						<div class="card">
							<img class="card-img-top" src="./images/apple.jpg"
								alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">Some quick example
									text to build on the card
									title and make up the bulk of
									the card's content.</p>
								<a href="#" class="btn btn-info">add to
									cart</a>
								<a href="#"
									class="btn btn-secondary">view
									more</a>
							</div>
						</div>
					</div>



				</div>








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
					$select_brands = "Select * from `brand`";
					$result_brands = mysqli_query($con, $select_brands);
					//$row_data = mysqli_fetch_assoc($result_brands);
					//echo $row_data['brand_name'];
					while($row_data = mysqli_fetch_assoc($result_brands)){
						$brand_name=$row_data['brand_name'];
						$brand_id=$row_data['brand_id'];
						echo"<li class='nav-item'>
						<a href='index.php?brand=$brand_id' class='nav-link text-light'>
							<h4>$brand_name</h4>
						</a>
					</li>";

					}





					?>

				</ul>
				<ul class="navbar-nav me-auto text-center">
					<li class="nav-item bg-info">
						<a href="#" class="nav-link text-light">
							<h3>Categories</h3>
						</a>
					</li>
					<?php
					$select_categories = "Select * from `category`";
					$result_categories = mysqli_query($con, $select_categories);
					//$row_data = mysqli_fetch_assoc($result_brands);
					//echo $row_data['brand_name'];
					while($row_data = mysqli_fetch_assoc($result_categories)){
						$category_title = $row_data['name'];
						$category_id = $row_data['Cat-ID'];
						echo"<li class='nav-item'>
						<a href='index.php?category=$category_id' class='nav-link text-light'>
							<h4>$category_title</h4>
						</a>
					</li>";

					}





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
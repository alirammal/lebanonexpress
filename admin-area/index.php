<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Admin Dashboard</title>
          <!-- bootstrap css link -->
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
                    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
                    crossorigin="anonymous">

                    <!-- font awesome link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
		integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
                    <!-- css file -->
	<link rel="stylesheet" href="../style.css">
          <style>
                    .admin_image{
  width: 100px;
  object-fit: contain;

}
.footer{
  position: absolute;
  bottom:0 ;
}
          </style>

</head>

<body>
          <!-- navbar -->
          <div class="container-fluid p-0">
                    <!-- first child -->
                    <nav class="navbar navbar-expand-lg navbar-light bg-info">
                              <div class="container-fluid">
                                        <img src="../images/leb.png" alt="" class="logo">
                                        <nav class="navbar navbar-expand-lg">
                                                  <ul class="navbar-nav">
                                                            <li class="nav-item">
                                                                      <a href="" class="nav-link">Welcome guest</a>
                                                            </li>
                                                  </ul>
                                        </nav>
                              </div>

                    </nav>


                    <!-- second child -->
                    <div class="bg-light">
                              <h3 class="text-center p-2">Manage Details</h3>
                    </div>

                    <!-- third child -->
                    <div class="row">
                              <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                                        <div class="p-3">
                                                  <a href="#"><img src="../images/carrots.jpg" alt=""
                                                  class="admin_image"></a>
                                                  <p class="text-light text-center">Admin Name</p>
                                        </div>
                                        <div class="button text-center">
                                                  <button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert PRODUCTS</a></button>
                                                  <button><a href="" class="nav-link text-light bg-info my-1">View products</a></button>
                                                  <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
                                                  <button><a href="" class="nav-link text-light bg-info my-1">View Categories</a></button>
                                                  <button><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">Insert brands</a></button>
                                                  <button><a href="" class="nav-link text-light bg-info my-1">View Brands</a></button>
                                                  <button><a href="" class="nav-link text-light bg-info my-1">All orders</a></button>
                                                  <button><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
                                                  <button><a href="" class="nav-link text-light bg-info my-1">List users</a></button>
                                                  <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
                                        </div>
                              </div>
                    

                    </div>

          </div>
          <!-- fourth child -->
          <div class="container my-3">
                    <?php 
                    if(isset($_GET['insert_category'])) {
                              include('insert_categories.php');
                    }
                    if(isset($_GET['insert_brand'])) {
                              include('insert_brands.php');
                    }
                    
                    
                    ?>




          </div>



          <!-- last child -->
		<div class="bg-info p-3 text-center footer">
			<p>all rights reserved @- Designed by Ali</p>
		</div>



          <!-- bootstrap css link -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
                    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
                    crossorigin="anonymous"></script>
</body>

</html>
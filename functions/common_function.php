<?php
//including connect file
include('./includes/connect.php');

// getting products
function getproducts()
{
        global $con;

        //condition to check isset or not
        if (!isset($_GET['category'])) {
                if (!isset($_GET['brand'])) {
                        $select_query = "Select * from `product-table` order by rand() LIMIT 0,9";
                        $result_query = mysqli_query($con, $select_query);
                        while ($row = mysqli_fetch_assoc($result_query)) {
                                $product_id = $row['product-Id'];
                                $product_title = $row['product_title'];
                                $product_description = $row['product_description'];
                                $product_image1 = $row['product_image1'];
                                $product_price = $row['product_price'];
                                $Cat_ID = $row['Cat_ID'];
                                $brand_id = $row['brand_id'];
                                echo "<div class='col-md-4 mb-2 paddingfix'>
                          <div class='card'>
                          <img class='card-img-top'
                                  src='./admin-area/product_images/$product_image1'
                                  alt='$product_title'>
                          <div class='card-body'>
                                  <h5 class='card-title'>$product_title</h5>
                                  <p class='card-text'>$product_description</p>
                                  <a href='#' class='btn btn-info'>add to
                                          cart</a>
                                  <a href='product_details.php?product_id=$product_id.php'
                                          class='btn btn-secondary'>view
                                          more</a>
                          </div>
                  </div>
          </div>";

                        }
                }
        }
}
//getting all products
function get_all_products()
{
        global $con;

        //condition to check isset or not
        if (!isset($_GET['category'])) {
                if (!isset($_GET['brand'])) {
                        $select_query = "Select * from `product-table` order by rand()";
                        $result_query = mysqli_query($con, $select_query);
                        while ($row = mysqli_fetch_assoc($result_query)) {
                                $product_id = $row['product-Id'];
                                $product_title = $row['product_title'];
                                $product_description = $row['product_description'];
                                $product_image1 = $row['product_image1'];
                                $product_price = $row['product_price'];
                                $Cat_ID = $row['Cat_ID'];
                                $brand_id = $row['brand_id'];
                                echo "<div class='col-md-4 mb-2 paddingfix'>
                          <div class='card'>
                          <img class='card-img-top'
                                  src='./admin-area/product_images/$product_image1'
                                  alt='$product_title'>
                          <div class='card-body'>
                                  <h5 class='card-title'>$product_title</h5>
                                  <p class='card-text'>$product_description</p>
                                  <a href='#' class='btn btn-info'>add to
                                          cart</a>
                                          <a href='product_details.php?product_id=$product_id.php'
                                          class='btn btn-secondary'>view
                                          more</a>
                          </div>
                  </div>
          </div>";

                        }
                }
        }

}

//getting unique categories
function get_unique_categories()
{
        global $con;

        //condition to check isset or not
        if (isset($_GET['category'])) {
                $category_id = $_GET['category'];
                $select_query = "Select * from `product-table` where Cat_ID=$category_id";
                $result_query = mysqli_query($con, $select_query);
                $numb_of_rows = mysqli_num_rows($result_query);
                if ($numb_of_rows == 0) {
                        echo "<h2 class='text-danger text-center'>No stock for this category</h2>";
                }
                while ($row = mysqli_fetch_assoc($result_query)) {
                        $product_id = $row['product-Id'];
                        $product_title = $row['product_title'];
                        $product_description = $row['product_description'];
                        $product_image1 = $row['product_image1'];
                        $product_price = $row['product_price'];
                        $Cat_ID = $row['Cat_ID'];
                        $brand_id = $row['brand_id'];
                        echo "<div class='col-md-4 mb-2 paddingfix'>
                          <div class='card'>
                          <img class='card-img-top'
                                  src='./admin-area/product_images/$product_image1'
                                  alt='$product_title'>
                          <div class='card-body'>
                                  <h5 class='card-title'>$product_title</h5>
                                  <p class='card-text'>$product_description</p>
                                  <a href='#' class='btn btn-info'>add to
                                          cart</a>
                                          <a href='product_details.php?product_id=$product_id.php'
                                          class='btn btn-secondary'>view
                                          more</a>
                          </div>
                  </div>
          </div>";

                }
        }
}
//getting unique categories
function get_unique_brands()
{
        global $con;

        //condition to check isset or not
        if (isset($_GET['brand'])) {
                $brand_id = $_GET['brand'];
                $select_query = "Select * from `product-table` where brand_id=$brand_id";
                $result_query = mysqli_query($con, $select_query);
                $numb_of_rows = mysqli_num_rows($result_query);
                if ($numb_of_rows == 0) {
                        echo "<h2 class='text-danger text-center'>This brand not available for service</h2>";
                }
                while ($row = mysqli_fetch_assoc($result_query)) {
                        $product_id = $row['product-Id'];
                        $product_title = $row['product_title'];
                        $product_description = $row['product_description'];
                        $product_image1 = $row['product_image1'];
                        $product_price = $row['product_price'];
                        $Cat_ID = $row['Cat_ID'];
                        $brand_id = $row['brand_id'];
                        echo "<div class='col-md-4 mb-2 paddingfix'>
                                  <div class='card'>
                                  <img class='card-img-top'
                                          src='./admin-area/product_images/$product_image1'
                                          alt='$product_title'>
                                  <div class='card-body'>
                                          <h5 class='card-title'>$product_title</h5>
                                          <p class='card-text'>$product_description</p>
                                          <a href='#' class='btn btn-info'>add to
                                                  cart</a>
                                                  <a href='product_details.php?product_id=$product_id.php'
                                                  class='btn btn-secondary'>view
                                                  more</a>
                                  </div>
                          </div>
                  </div>";

                }
        }
}





//getting brands in sidenav
function getbrands()
{
        global $con;
        $select_brands = "Select * from `brand`";
        $result_brands = mysqli_query($con, $select_brands);

        while ($row_data = mysqli_fetch_assoc($result_brands)) {
                $brand_name = $row_data['brand_name'];
                $brand_id = $row_data['brand_id'];
                echo "<li class='nav-item'>
						<a href='index.php?brand=$brand_id' class='nav-link text-light'>
							<h4>$brand_name</h4>
						</a>
					</li>";
        }
}
function getcategories()
{
        global $con;
        $select_categories = "Select * from `category`";
        $result_categories = mysqli_query($con, $select_categories);
        while ($row_data = mysqli_fetch_assoc($result_categories)) {
                $category_title = $row_data['name'];
                $category_id = $row_data['Cat-ID'];
                echo "<li class='nav-item'>
						<a href='index.php?category=$category_id' class='nav-link text-light'>
							<h4>$category_title</h4>
						</a>
					</li>";
        }
}

// searching products function
function search_product()
{

        global $con;
        if(isset($_GET['search_data_product'])){
                $search_data_value=$_GET['search_data'];
        $search_query="Select * from `product-table` where product_keywords like '%$search_data_value%'";
        $result_query = mysqli_query($con, $search_query);
        $numb_of_rows = mysqli_num_rows($result_query);
        if ($numb_of_rows == 0) {
                echo "<h2 class='text-danger text-center'>No results match.No products found on this category</h2>";
        }
        while ($row = mysqli_fetch_assoc($result_query)) {
                $product_id = $row['product-Id'];
                $product_title = $row['product_title'];
                $product_description = $row['product_description'];
                $product_image1 = $row['product_image1'];
                $product_price = $row['product_price'];
                $Cat_ID = $row['Cat_ID'];
                $brand_id = $row['brand_id'];
                echo "<div class='col-md-4 mb-2 paddingfix'>
                          <div class='card'>
                          <img class='card-img-top'
                                  src='./admin-area/product_images/$product_image1'
                                  alt='$product_title'>
                          <div class='card-body'>
                                  <h5 class='card-title'>$product_title</h5>
                                  <p class='card-text'>$product_description</p>
                                  <a href='#' class='btn btn-info'>add to
                                          cart</a>
                                          <a href='product_details.php?product_id=$product_id.php'
                                          class='btn btn-secondary'>view
                                          more</a>
                          </div>
                  </div>
          </div>";

        }
        }
}
?>
<?php
include('../includes/connect.php');
if (isset($_POST['insert_product'])) {


          $product_title = $_POST['product_title'];
          $product_description = $_POST['description'];
          $product_keywords = $_POST['product_keywords'];
          $product_category = $_POST['product_category'];
          $product_brands = $_POST['product_brands'];
          $product_price = $_POST['product_price'];
          $product_status = 'true';

          // accessing images
          $product_image1 = $_FILES['product_image1']['name'];
          $product_image2 = $_FILES['product_image2']['name'];
          $product_image3 = $_FILES['product_image3']['name'];


          // accessing images
          $temp_image1 = $_FILES['product_image1']['tmp_name'];
          $temp_image2 = $_FILES['product_image2']['tmp_name'];
          $temp_image3 = $_FILES['product_image3']['tmp_name'];

          //checking empty condition
          if ($product_title == '' or $product_description == '' or $product_keywords == '' or $product_category == '' or $product_brands == '' or $product_price == '' or $product_keywords == '' or $product_image1 == '' or $product_image2 == '' or $product_image3 == '') {
                    echo "<script>alert('please fill all the available fields')</script>";
                    exit();
          } else {
                    move_uploaded_file($temp_image1, "./product_images/$product_image1");
                    move_uploaded_file($temp_image2, "./product_images/$product_image2");
                    move_uploaded_file($temp_image3, "./product_images/$product_image3");

                    //insert query
                    $insert_products = "insert into `product-table` (product_title,product_description,product_keywords,Cat_ID,brand_id,product_image1,product_image2,product_image3,product_price,date,status)
                     values('$product_title','$product_description','$product_keywords','$product_category','$product_brands','$product_image1','$product_image2','$product_image3','$product_price','NOW()','$product_status')";
                    $result_query = mysqli_query($con, $insert_products);
                    if ($result_query) {
                              echo "<script>alert('Successfully inserted the products'</script>";

                    }



          }



}
?>



<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Insert PRoducts-Admin Dashboard</title>
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

<body class="bg-light">
          <div class="container mt-3">
                    <h1 class="text-center">Insert Products</h1>
                    <!-- FORM -->
                    <form action="" method="post" enctype="multipart/form-data">
                              <!-- title -->
                              <div class="form-outline mb-4 w-50 m-auto">
                                        <label for="product_title" class="form-label">Product title</label>
                                        <input type="text" name="product_title" id="product_title" class="form-control"
                                                  placeholder="Enter Product Here" autocomplete="off"
                                                  required="required">
                              </div>
                              <!-- description -->
                              <div class="form-outline mb-4 w-50 m-auto">
                                        <label for="description" class="form-label">Product description</label>
                                        <input type="text" name="description" id="description" class="form-control"
                                                  placeholder="Enter Product description" autocomplete="off"
                                                  required="required">
                              </div>
                              <!-- keywords -->
                              <div class="form-outline mb-4 w-50 m-auto">
                                        <label for="product_keywords" class="form-label">Product keywords</label>
                                        <input type="text" name="product_keywords" id="product_keywords"
                                                  class="form-control" placeholder="Enter Product keywords"
                                                  autocomplete="off" required="required">
                              </div>
                              <!-- categories -->
                              <div class="form-outline mb-4 w-50 m-auto">
                                        <select name="product_category" id="" class="form-control mt-4">
                                                  <option value="">Select a Category</option>
                                                  <?php
                                                  $select_query = "Select * from `category`";
                                                  $result_query = mysqli_query($con, $select_query);
                                                  while ($row = mysqli_fetch_assoc($result_query)) {
                                                            $category_title = $row['name'];
                                                            $category_id = $row['Cat-ID'];
                                                            echo "<option value='$category_id'>$category_title</option>";

                                                  }


                                                  ?>
                                        </select>
                              </div>
                              <!-- brands -->
                              <div class="form-outline mb-4 w-50 m-auto">
                                        <select name="product_brands" id="" class="form-control mt-4">
                                                  <option value="">Select a brands</option>
                                                  <?php
                                                  $select_query = "Select * from `brand`";
                                                  $result_query = mysqli_query($con, $select_query);
                                                  while ($row = mysqli_fetch_assoc($result_query)) {
                                                            $brand_title = $row['brand_name'];
                                                            $brand_id = $row['brand_id'];
                                                            echo "<option value='$brand_id'>$brand_title</option>";

                                                  }


                                                  ?>
                                        </select>
                              </div>
                              <!-- image 1 -->
                              <div class="form-outline mb-4 w-50 m-auto">
                                        <label for="product_image1" class="form-label">Product image 1</label>
                                        <input type="file" name="product_image1" id="product_image1"
                                                  class="form-control" required="required">
                              </div>
                              <!-- image 2 -->
                              <div class="form-outline mb-4 w-50 m-auto">
                                        <label for="product_image2" class="form-label">Product image 2</label>
                                        <input type="file" name="product_image2" id="product_image2"
                                                  class="form-control" required="required">
                              </div>
                              <!-- image 3 -->
                              <div class="form-outline mb-4 w-50 m-auto">
                                        <label for="product_image3" class="form-label">Product image 3</label>
                                        <input type="file" name="product_image3" id="product_image3"
                                                  class="form-control" required="required">
                              </div>
                              <!-- price -->
                              <div class="form-outline mb-4 w-50 m-auto">
                                        <label for="product_price" class="form-label">Product price</label>
                                        <input type="text" name="product_price" id="product_price" class="form-control"
                                                  placeholder="Enter Product price" autocomplete="off"
                                                  required="required">
                              </div>
                              <!-- price -->
                              <div class="form-outline mb-4 w-50 m-auto">
                                        <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3 mt-3"
                                                  value="Insert Products">
                              </div>

                    </form>
          </div>

</body>

</html>
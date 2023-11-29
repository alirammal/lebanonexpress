<?php
//including connect file
include('../includes/connect.php');

// getting products
function getproducts(){
          global $con;

          $select_query="Select * from `products` order by rand() limit 0,9";
          $result_query=mysqli_query($con,$select_query);
          while($row=mysqli_fetech_assoc($result_query)){
                    $product_id=$row['product_id'];
                    $product_title=$row['$product_title'];
                    $product_description=$row['product_description'];
                    $product_image1=$row['product_image1'];
                    $product_price=$row['product_price'];
                    $category_id=$row['category_id'];
                    $brand_id=$row['brand'];
                    echo "<div class='col-md-4 mb-2'>
                                        "
                    }

            }

?>
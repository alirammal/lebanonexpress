<?php
include('../includes/connect.php');
if(isset($_POST['insert_brand'])){
  $brand_name=$_POST['brand_name'];
  
  $select_query="Select * from `brand` where brand_name='$brand_name'";
  $result_select=mysqli_query($con,$select_query);
  $number=mysqli_num_rows($result_select);
  if($number>0){
    echo "<script>alert('this brand is already present inside the database')</script>";

  }else{

  $insert_query="insert into `brand` (brand_name) values ('$brand_name')";
  $result=mysqli_query($con,$insert_query);
  if($result){
    echo "<script>alert('Brand has been inserted successfully')</script>";
  }
}
}
?>
<h2 class="text-center">Insert Brands</h2>
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
    <span class="input-group-text bg-info" id="basic-addon1"><i class="fa solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="brand_name" placeholder="insert Brands" aria-label="bands" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2 m-auto">
  <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_brand" value="Insert Brands"> 



</div>
</form>